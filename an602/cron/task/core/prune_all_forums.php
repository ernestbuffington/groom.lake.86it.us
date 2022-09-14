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
* Prune all forums cron task.
*
* It is intended to be invoked from system cron.
* This task will find all forums for which pruning is enabled, and will
* prune all forums as necessary.
*/
class prune_all_forums extends \an602\cron\task\base
{
	protected $an602_root_path;
	protected $php_ext;
	protected $config;
	protected $db;

	/**
	* Constructor.
	*
	* @param string $an602_root_path The root path
	* @param string $php_ext The PHP file extension
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

		$sql = 'SELECT forum_id, prune_next, enable_prune, prune_days, prune_viewed, enable_shadow_prune, prune_shadow_days, prune_shadow_freq, prune_shadow_next, forum_flags, prune_freq
			FROM ' . FORUMS_TABLE;
		$result = $this->db->sql_query($sql);
		while ($row = $this->db->sql_fetchrow($result))
		{
			$log_prune = true;

			if ($row['enable_prune'] && $row['prune_next'] < time())
			{
				if ($row['prune_days'])
				{
					auto_prune($row['forum_id'], 'posted', $row['forum_flags'], $row['prune_days'], $row['prune_freq'], $log_prune);
					$log_prune = false;
				}

				if ($row['prune_viewed'])
				{
					auto_prune($row['forum_id'], 'viewed', $row['forum_flags'], $row['prune_viewed'], $row['prune_freq'], $log_prune);
					$log_prune = false;
				}
			}

			if ($row['enable_shadow_prune'] && $row['prune_shadow_next'] < time() && $row['prune_shadow_days'])
			{
				auto_prune($row['forum_id'], 'shadow', $row['forum_flags'], $row['prune_shadow_days'], $row['prune_shadow_freq'], $log_prune);
			}
		}
		$this->db->sql_freeresult($result);
	}

	/**
	* Returns whether this cron task can run, given current board configuration.
	*
	* This cron task will only run when system cron is utilised.
	*
	* @return bool
	*/
	public function is_runnable()
	{
		return (bool) $this->config['use_system_cron'];
	}
}
