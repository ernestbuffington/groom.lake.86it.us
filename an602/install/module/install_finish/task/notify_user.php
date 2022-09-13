<?php
/**
 *
 * This file is part of the AN602 CMS Software package.
 *
 * @copyright (c) PHP-AN602 <https://groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace an602\install\module\install_finish\task;

use an602\config\db;

/**
 * Logs installation and sends an email to the admin
 */
class notify_user extends \an602\install\task_base
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
	 * @var \an602\auth\auth
	 */
	protected $auth;

	/**
	 * @var db
	 */
	protected $config;

	/**
	 * @var \an602\language\language
	 */
	protected $language;

	/**
	 * @var \an602\log\log_interface
	 */
	protected $log;

	/**
	 * @var \an602\user
	 */
	protected $user;

	/**
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * @var string
	 */
	protected $php_ext;

	/**
	 * Constructor
	 *
	 * @param \an602\install\helper\container_factory				$container
	 * @param \an602\install\helper\config							$install_config
	 * @param \an602\install\helper\iohandler\iohandler_interface	$iohandler
	 * @param string												$an602_root_path
	 * @param string												$php_ext
	 */
	public function __construct(\an602\install\helper\container_factory $container, \an602\install\helper\config $install_config, \an602\install\helper\iohandler\iohandler_interface $iohandler, $an602_root_path, $php_ext)
	{
		$this->install_config	= $install_config;
		$this->iohandler		= $iohandler;

		$this->auth				= $container->get('auth');
		$this->language			= $container->get('language');
		$this->log				= $container->get('log');
		$this->user				= $container->get('user');
		$this->an602_root_path	= $an602_root_path;
		$this->php_ext			= $php_ext;

		// We need to reload config for cases when it doesn't have all values
		/** @var \an602\cache\driver\driver_interface $cache */
		$cache = $container->get('cache.driver');
		$cache->destroy('config');

		$this->config = new db(
			$container->get('dbal.conn'),
			$cache,
			$container->get_parameter('tables.config')
		);

		global $config;
		$config = $this->config;

		parent::__construct(true);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		$this->user->session_begin();
		$this->user->setup('common');

		if ($this->config['email_enable'])
		{
			include ($this->an602_root_path . 'includes/functions_messenger.' . $this->php_ext);

			$messenger = new \messenger(false);
			$messenger->template('installed', $this->install_config->get('user_language', 'en'));
			$messenger->to($this->config['board_email'], $this->install_config->get('admin_name'));
			$messenger->anti_abuse_headers($this->config, $this->user);
			$messenger->assign_vars(array(
					'USERNAME'		=> html_entity_decode($this->install_config->get('admin_name'), ENT_COMPAT),
					'PASSWORD'		=> html_entity_decode($this->install_config->get('admin_passwd'), ENT_COMPAT))
			);
			$messenger->send(NOTIFY_EMAIL);
		}

		// Login admin
		// Ugly but works
		$this->auth->login(
			$this->install_config->get('admin_name'),
			$this->install_config->get('admin_passwd'),
			false,
			true,
			true
		);

		$this->iohandler->set_cookie($this->config['cookie_name'] . '_sid', $this->user->session_id);
		$this->iohandler->set_cookie($this->config['cookie_name'] . '_u', $this->user->cookie_data['u']);
		$this->iohandler->set_cookie($this->config['cookie_name'] . '_k', $this->user->cookie_data['k']);

		// Create log
		$this->log->add(
			'admin',
			$this->user->data['user_id'],
			$this->user->ip,
			'LOG_INSTALL_INSTALLED',
			false,
			array($this->config['version'])
		);

		// Remove install_lock
		@unlink($this->an602_root_path . 'cache/install_lock');
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
		return 'TASK_NOTIFY_USER';
	}
}
