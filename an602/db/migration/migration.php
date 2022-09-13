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

namespace an602\db\migration;

/**
* Abstract base class for database migrations
*
* Each migration consists of a set of schema and data changes to be implemented
* in a subclass. This class provides various utility methods to simplify editing
* a AN602.
*/
abstract class migration implements migration_interface
{
	/** @var \an602\config\config */
	protected $config;

	/** @var \an602\db\driver\driver_interface */
	protected $db;

	/** @var \an602\db\tools\tools_interface */
	protected $db_tools;

	/** @var string */
	protected $an602_table_prefix;

	/** @var string */
	protected $an602_root_path;

	/** @var string */
	protected $php_ext;

	/** @var array Errors, if any occurred */
	protected $errors;

	/** @var array List of queries executed through $this->sql_query() */
	protected $queries = array();

	/**
	* Constructor
	*
	* @param \an602\config\config $config
	* @param \an602\db\driver\driver_interface $db
	* @param \an602\db\tools\tools_interface $db_tools
	* @param string $an602_root_path
	* @param string $php_ext
	* @param string $an602_table_prefix
	*/
	public function __construct(\an602\config\config $config, \an602\db\driver\driver_interface $db, \an602\db\tools\tools_interface $db_tools, $an602_root_path, $php_ext, $an602_table_prefix)
	{
		$this->config = $config;
		$this->db = $db;
		$this->db_tools = $db_tools;
		$this->table_prefix = $an602_table_prefix;

		$this->an602_root_path = $an602_root_path;
		$this->php_ext = $php_ext;

		$this->errors = array();
	}

	/**
	* {@inheritdoc}
	*/
	static public function depends_on()
	{
		return array();
	}

	/**
	* {@inheritdoc}
	*/
	public function effectively_installed()
	{
		return false;
	}

	/**
	* {@inheritdoc}
	*/
	public function update_schema()
	{
		return array();
	}

	/**
	* {@inheritdoc}
	*/
	public function revert_schema()
	{
		return array();
	}

	/**
	* {@inheritdoc}
	*/
	public function update_data()
	{
		return array();
	}

	/**
	* {@inheritdoc}
	*/
	public function revert_data()
	{
		return array();
	}

	/**
	* Wrapper for running queries to generate user feedback on updates
	*
	* @param string $sql SQL query to run on the database
	* @return mixed Query result from db->sql_query()
	*/
	protected function sql_query($sql)
	{
		$this->queries[] = $sql;

		$this->db->sql_return_on_error(true);

		if ($sql === 'begin')
		{
			$result = $this->db->sql_transaction('begin');
		}
		else if ($sql === 'commit')
		{
			$result = $this->db->sql_transaction('commit');
		}
		else
		{
			$result = $this->db->sql_query($sql);
			if ($this->db->get_sql_error_triggered())
			{
				$this->errors[] = array(
					'sql'	=> $this->db->get_sql_error_sql(),
					'code'	=> $this->db->get_sql_error_returned(),
				);
			}
		}

		$this->db->sql_return_on_error(false);

		return $result;
	}

	/**
	* Get the list of queries run
	*
	* @return array
	*/
	public function get_queries()
	{
		return $this->queries;
	}
}
