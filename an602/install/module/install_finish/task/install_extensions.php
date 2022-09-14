<?php
/**
 *
 * This file is part of the AN602 CMS Software package.
 *
 * @copyright (c) AN602 Limited <https://www.groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace an602\install\module\install_finish\task;

use an602\config\db;
use an602\install\exception\resource_limit_reached_exception;

/**
 * Installs extensions that exist in ext folder upon install
 */
class install_extensions extends \an602\install\task_base
{
	/**
	 * @var \an602\install\helper\config
	 */
	protected $install_config;

	/**
	 * @var \an602\install\helper\iohandler\iohandler_interface
	 */
	protected $iohandler;

	/**
	 * @var db
	 */
	protected $config;

	/**
	 * @var \an602\log\log_interface
	 */
	protected $log;

	/**
	 * @var \an602\user
	 */
	protected $user;

	/** @var \an602\extension\manager */
	protected $extension_manager;

	/** @var \Symfony\Component\Finder\Finder */
	protected $finder;

	/** @var string Extension table */
	protected $extension_table;

	/** @var \an602\db\driver\driver_interface */
	protected $db;

	/**
	 * Constructor
	 *
	 * @param \an602\install\helper\container_factory				$container
	 * @param \an602\install\helper\config							$install_config
	 * @param \an602\install\helper\iohandler\iohandler_interface	$iohandler
	 * @param string												$an602_root_path AN602 root path
	 */
	public function __construct(\an602\install\helper\container_factory $container, \an602\install\helper\config $install_config, \an602\install\helper\iohandler\iohandler_interface $iohandler, $an602_root_path)
	{
		$this->install_config	= $install_config;
		$this->iohandler		= $iohandler;
		$this->extension_table = $container->get_parameter('tables.ext');

		$this->log				= $container->get('log');
		$this->config			= $container->get('config');
		$this->user				= $container->get('user');
		$this->extension_manager = $container->get('ext.manager');
		$this->db				= $container->get('dbal.conn');
		$this->finder = new \Symfony\Component\Finder\Finder();
		$this->finder->in($an602_root_path . 'ext/')
			->ignoreUnreadableDirs()
			->depth('< 3')
			->files()
			->name('composer.json');

		/** @var \an602\cache\driver\driver_interface $cache */
		$cache = $container->get('cache.driver');
		$cache->destroy('config');

		global $config;
		$config = new db(
			$this->db,
			$cache,
			$container->get_parameter('tables.config')
		);

		// Make sure asset version exists in config. Otherwise we might try to
		// insert the assets_version setting into the database and cause a
		// duplicate entry error.
		if (!isset($this->config['assets_version']))
		{
			$this->config['assets_version'] = 0;
		}

		parent::__construct(true);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		$this->user->session_begin();
		$this->user->setup(array('common', 'acp/common', 'cli'));

		$install_extensions = $this->iohandler->get_input('install-extensions', array());

		$all_available_extensions = $this->extension_manager->all_available();
		$i = $this->install_config->get('install_extensions_index', 0);
		$available_extensions = array_slice($all_available_extensions, $i);

		// Install extensions
		foreach ($available_extensions as $ext_name => $ext_path)
		{
			if (!empty($install_extensions) && $install_extensions !== ['all'] && !in_array($ext_name, $install_extensions))
			{
				continue;
			}

			try
			{
				$extension = $this->extension_manager->get_extension($ext_name);

				if (!$extension->is_enableable())
				{
					$this->iohandler->add_log_message(array('CLI_EXTENSION_NOT_ENABLEABLE', $ext_name));
					continue;
				}

				$this->extension_manager->enable($ext_name);
				$extensions = $this->get_extensions();

				if (isset($extensions[$ext_name]) && $extensions[$ext_name]['ext_active'])
				{
					// Create log
					$this->log->add('admin', ANONYMOUS, '', 'LOG_EXT_ENABLE', time(), array($ext_name));
					$this->iohandler->add_success_message(array('CLI_EXTENSION_ENABLE_SUCCESS', $ext_name));
				}
				else
				{
					$this->iohandler->add_log_message(array('CLI_EXTENSION_ENABLE_FAILURE', $ext_name));
				}
			}
			catch (\Exception $e)
			{
				// Add fail log and continue
				$this->iohandler->add_log_message(array('CLI_EXTENSION_ENABLE_FAILURE', $ext_name));
			}

			$i++;

			// Stop execution if resource limit is reached
			if ($this->install_config->get_time_remaining() <= 0 || $this->install_config->get_memory_remaining() <= 0)
			{
				break;
			}
		}

		$this->install_config->set('install_extensions_index', $i);

		if ($i < count($all_available_extensions))
		{
			throw new resource_limit_reached_exception();
		}
	}

	/**
	 * {@inheritdoc}
	 */
	static public function get_step_count()
	{
		return 1;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_task_lang_name()
	{
		return 'TASK_INSTALL_EXTENSIONS';
	}

	/**
	 * Get extensions from database
	 *
	 * @return array List of extensions
	 */
	private function get_extensions()
	{
		$sql = 'SELECT *
			FROM ' . $this->extension_table;

		$result = $this->db->sql_query($sql);
		$extensions_row = $this->db->sql_fetchrowset($result);
		$this->db->sql_freeresult($result);

		$extensions = array();

		foreach ($extensions_row as $extension)
		{
			$extensions[$extension['ext_name']] = $extension;
		}

		ksort($extensions);

		return $extensions;
	}
}
