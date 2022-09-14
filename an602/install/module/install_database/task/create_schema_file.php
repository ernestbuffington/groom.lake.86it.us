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

namespace an602\install\module\install_database\task;

use an602\install\exception\resource_limit_reached_exception;

/**
 * Create database schema
 */
class create_schema_file extends \an602\install\task_base
{
	/**
	 * @var \an602\install\helper\config
	 */
	protected $config;

	/**
	 * @var \an602\db\driver\driver_interface
	 */
	protected $db;

	/**
	 * @var \an602\filesystem\filesystem_interface
	 */
	protected $filesystem;

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
	 * @param \an602\install\helper\config							$config				Installer's config provider
	 * @param \an602\install\helper\database						$db_helper			Installer's database helper
	 * @param \an602\filesystem\filesystem_interface				$filesystem			Filesystem service
	 * @param string												$an602_root_path	Path AN602's root
	 * @param string												$php_ext			Extension of PHP files
	 */
	public function __construct(\an602\install\helper\config $config,
								\an602\install\helper\database $db_helper,
								\an602\filesystem\filesystem_interface $filesystem,
								$an602_root_path,
								$php_ext)
	{
		$dbms = $db_helper->get_available_dbms($config->get('dbms'));
		$dbms = $dbms[$config->get('dbms')]['DRIVER'];

		$this->db				= new $dbms();
		$this->db->sql_connect(
			$config->get('dbhost'),
			$config->get('dbuser'),
			$config->get('dbpasswd'),
			$config->get('dbname'),
			$config->get('dbport'),
			false,
			false
		);

		$this->config			= $config;
		$this->filesystem		= $filesystem;
		$this->an602_root_path	= $an602_root_path;
		$this->php_ext			= $php_ext;

		parent::__construct(true);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		// Generate database schema
		if ($this->filesystem->exists($this->an602_root_path . 'install/schemas/schema.json'))
		{
			$db_table_schema = @file_get_contents($this->an602_root_path . 'install/schemas/schema.json');
			$this->config->set('change_table_prefix', true);
		}
		else
		{
			global $table_prefix;

			// As this task may take a large amount of time to complete refreshing the page might be necessary for some
			// server configurations with limited resources
			if (!$this->config->get('pre_schema_forced_refresh', false))
			{
				if ($this->config->get_time_remaining() < 5)
				{
					$this->config->set('pre_schema_forced_refresh', true);
					throw new resource_limit_reached_exception();
				}
			}

			$table_prefix = $this->config->get('table_prefix');

			if (!defined('CONFIG_TABLE'))
			{
				// We need to include the constants file for the table constants
				// when we generate the schema from the migration files.
				include ($this->an602_root_path . 'includes/constants.' . $this->php_ext);
			}

			$finder = new \an602\finder($this->filesystem, $this->an602_root_path, null, $this->php_ext);
			$migrator_classes = $finder->core_path('an602/db/migration/data/')->get_classes();
			$factory = new \an602\db\tools\factory();
			$db_tools = $factory->get($this->db, true);
			$schema_generator = new \an602\db\migration\schema_generator(
				$migrator_classes,
				new \an602\config\config(array()),
				$this->db,
				$db_tools,
				$this->an602_root_path,
				$this->php_ext,
				$table_prefix
			);
			$db_table_schema = $schema_generator->get_schema();
			$db_table_schema = json_encode($db_table_schema, JSON_PRETTY_PRINT);

			$this->config->set('change_table_prefix', false);
		}

		$fp = @fopen($this->an602_root_path . 'store/schema.json', 'wb');
		if (!$fp)
		{
			throw new \Exception('INST_SCHEMA_FILE_NOT_WRITABLE');
		}

		fwrite($fp, $db_table_schema);
		fclose($fp);
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
		return 'TASK_CREATE_DATABASE_SCHEMA_FILE';
	}
}
