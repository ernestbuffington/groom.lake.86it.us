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
class add_default_data extends \an602\install\task_base
{
	/**
	 * @var \an602\db\driver\driver_interface
	 */
	protected $db;

	/**
	 * @var \an602\install\helper\database
	 */
	protected $database_helper;

	/**
	 * @var \an602\install\helper\config
	 */
	protected $config;

	/**
	 * @var \an602\install\helper\iohandler\iohandler_interface
	 */
	protected $iohandler;

	/**
	 * @var \an602\language\language
	 */
	protected $language;

	/**
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * Constructor
	 *
	 * @param \an602\install\helper\database						$db_helper	Installer's database helper
	 * @param \an602\install\helper\config							$config		Installer config
	 * @param \an602\install\helper\iohandler\iohandler_interface	$iohandler	Installer's input-output handler
	 * @param \an602\install\helper\container_factory				$container	Installer's DI container
	 * @param \an602\language\language								$language	Language service
	 * @param string												$root_path	Root path of AN602
	 */
	public function __construct(\an602\install\helper\database $db_helper,
								\an602\install\helper\config $config,
								\an602\install\helper\iohandler\iohandler_interface $iohandler,
								\an602\install\helper\container_factory $container,
								\an602\language\language $language,
								$root_path)
	{
		$this->db				= $container->get('dbal.conn.driver');
		$this->database_helper	= $db_helper;
		$this->config			= $config;
		$this->iohandler		= $iohandler;
		$this->language			= $language;
		$this->an602_root_path	= $root_path;

		parent::__construct(true);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		$this->db->sql_return_on_error(true);

		$table_prefix = $this->config->get('table_prefix');
		$dbms = $this->config->get('dbms');
		$dbms_info = $this->database_helper->get_available_dbms($dbms);

		// Get schema data from file
		$sql_query = @file_get_contents($this->an602_root_path . 'install/schemas/schema_data.sql');

		// Clean up SQL
		$sql_query = $this->replace_dbms_specific_sql($sql_query);
		$sql_query = preg_replace('# an602_([^\s]*) #i', ' ' . $table_prefix . '\1 ', $sql_query);
		$sql_query = preg_replace_callback('#\{L_([A-Z0-9\-_]*)\}#s', array($this, 'lang_replace_callback'), $sql_query);
		$sql_query = $this->database_helper->remove_comments($sql_query);
		$sql_query = $this->database_helper->split_sql_file($sql_query, $dbms_info[$dbms]['DELIM']);

		$i = $this->config->get('add_default_data_index', 0);
		$total = count($sql_query);
		$sql_query = array_slice($sql_query, $i);

		foreach ($sql_query as $sql)
		{
			if (!$this->db->sql_query($sql))
			{
				$error = $this->db->sql_error($this->db->get_sql_error_sql());
				$this->iohandler->add_error_message('INST_ERR_DB', $error['message']);
			}

			$i++;

			// Stop execution if resource limit is reached
			if ($this->config->get_time_remaining() <= 0 || $this->config->get_memory_remaining() <= 0)
			{
				break;
			}
		}

		$this->config->set('add_default_data_index', $i);

		if ($i < $total)
		{
			throw new resource_limit_reached_exception();
		}
	}

	/**
	 * Process DB specific SQL
	 *
	 * @return string
	 */
	protected function replace_dbms_specific_sql($query)
	{
		if ($this->db instanceof \an602\db\driver\mssql_base)
		{
			$query = preg_replace('#\# MSSQL IDENTITY (an602_[a-z_]+) (ON|OFF) \##s', 'SET IDENTITY_INSERT \1 \2;', $query);
		}
		else if ($this->db instanceof \an602\db\driver\postgres)
		{
			$query = preg_replace('#\# POSTGRES (BEGIN|COMMIT) \##s', '\1; ', $query);
		}
		else if ($this->db instanceof \an602\db\driver\mysql_base)
		{
			$query = str_replace('\\', '\\\\', $query);
		}

		return $query;
	}

	/**
	 * Callback function for language replacing
	 *
	 * @param array	$matches
	 * @return string
	 */
	public function lang_replace_callback($matches)
	{
		if (!empty($matches[1]))
		{
			return $this->db->sql_escape($this->language->lang($matches[1]));
		}

		return '';
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
		return 'TASK_ADD_DEFAULT_DATA';
	}
}
