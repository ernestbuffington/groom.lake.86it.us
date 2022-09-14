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

namespace an602\cron\task\core;

/**
* Prune one forum cron task.
*
* It is intended to be used when cron is invoked via web.
* This task can decide whether it should be run using data obtained by viewforum
* code, without making additional database queries.
*/
class prune_forum extends \an602\cron\task\base implements \an602\cron\task\parametrized
{
	protected $an602_root_path;
	protected $php_ext;
	protected $config;
	protected $db;

	/**
	* If $forum_data is given, it is assumed to contain necessary information
	* about a single forum that is to be pruned.
	*
	* If $forum_data is not given, forum id will be retrieved via $request->variable()
	* and a database query will be performed to load the necessary information
	* about the forum.
	*/
	protected $forum_data;

	/**
	* Constructor.
	*
	* @param string $an602_root_path The root path
	* @param string $php_ext PHP file extension
	* @param \an602\config\config $config The config
	* @param \an602\db\driver\driver_interface $db The db connection
	*/
	public function __construct($an602_root_path, $php_ext, \an602\config\config $config, \an602\db\driver\driver_interface $db)
	{
		$this->an602_root_path = $an602_root_path;
		$this->php_ext = $php_ext;
		$this->config = $config;
		$this->db = $db;
	}

	/**
	* Manually set forum data.
	*
	* @param array $forum_data Information about a forum to be pruned.
	*/
	public function set_forum_data($forum_data)
	{
		$this->forum_data = $forum_data;
	}

	/**
	* Runs this cron task.
	*
	* @return null
	*/
	public function run()
	{
		if (!function_exists('auto_prune'))
		{
			include($this->an602_root_path . 'includes/functions_admin.' . $this->php_ext);
		}

		$log_prune = true;

		if ($this->forum_data['prune_days'])
		{
			auto_prune($this->forum_data['forum_id'], 'posted', $this->forum_data['forum_flags'], $this->forum_data['prune_days'], $this->forum_data['prune_freq'], $log_prune);
			$log_prune = false;
		}

		if ($this->forum_data['prune_viewed'])
		{
			auto_prune($this->forum_data['forum_id'], 'viewed', $this->forum_data['forum_flags'], $this->forum_data['prune_viewed'], $this->forum_data['prune_freq'], $log_prune);
		}
	}

	/**
	* Returns whether this cron task can run, given current board configuration.
	*
	* This cron task will not run when system cron is utilised, as in
	* such cases prune_all_forums task would run instead.
	*
	* Additionally, this task must be given the forum data, either via
	* the constructor or parse_parameters method.
	*
	* @return bool
	*/
	public function is_runnable()
	{
		return !$this->config['use_system_cron'] && $this->forum_data;
	}

	/**
	* Returns whether this cron task should run now, because enough time
	* has passed since it was last run.
	*
	* Forum pruning interval is specified in the forum data.
	*
	* @return bool
	*/
	public function should_run()
	{
		return $this->forum_data['enable_prune'] && $this->forum_data['prune_next'] < time();
	}

	/**
	* Returns parameters of this cron task as an array.
	* The array has one key, f, whose value is id of the forum to be pruned.
	*
	* @return array
	*/
	public function get_parameters()
	{
		return array('f' => $this->forum_data['forum_id']);
	}

	/**
	* Parses parameters found in $request, which is an instance of
	* \an602\request\request_interface.
	*
	* It is expected to have a key f whose value is id of the forum to be pruned.
	*
	* @param \an602\request\request_interface $request Request object.
	*
	* @return null
	*/
	public function parse_parameters(\an602\request\request_interface $request)
	{
		$this->forum_data = null;
		if ($request->is_set('f'))
		{
			$forum_id = $request->variable('f', 0);

			$sql = 'SELECT forum_id, prune_next, enable_prune, prune_days, prune_viewed, forum_flags, prune_freq
				FROM ' . FORUMS_TABLE . "
				WHERE forum_id = $forum_id";
			$result = $this->db->sql_query($sql);
			$row = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			if ($row)
			{
				$this->forum_data = $row;
			}
		}
	}
}
