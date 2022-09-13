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

namespace an602\cron\task\core;

/**
* Tidy search cron task.
*
* Will only run when the currently selected search backend supports tidying.
*/
class tidy_search extends \an602\cron\task\base
{
	/**
	* AN602 root path
	* @var string
	*/
	protected $an602_root_path;

	/**
	* PHP file extension
	* @var string
	*/
	protected $php_ext;

	/**
	* Auth object
	* @var \an602\auth\auth
	*/
	protected $auth;

	/**
	* Config object
	* @var \an602\config\config
	*/
	protected $config;

	/**
	* Database object
	* @var \an602\db\driver\driver_interface
	*/
	protected $db;

	/**
	* User object
	* @var \an602\user
	*/
	protected $user;

	/**
	* Event dispatcher object
	* @var \an602\event\dispatcher_interface
	*/
	protected $an602_dispatcher;

	/**
	* Constructor.
	*
	* @param string $an602_root_path The AN602 root path
	* @param string $php_ext The PHP file extension
	* @param \an602\auth\auth $auth The auth object
	* @param \an602\config\config $config The config object
	* @param \an602\db\driver\driver_interface $db The database object
	* @param \an602\user $user The user object
	* @param \an602\event\dispatcher_interface $an602_dispatcher The event dispatcher object
	*/
	public function __construct($an602_root_path, $php_ext, \an602\auth\auth $auth, \an602\config\config $config, \an602\db\driver\driver_interface $db, \an602\user $user, \an602\event\dispatcher_interface $an602_dispatcher)
	{
		$this->an602_root_path = $an602_root_path;
		$this->php_ext = $php_ext;
		$this->auth = $auth;
		$this->config = $config;
		$this->db = $db;
		$this->user = $user;
		$this->an602_dispatcher = $an602_dispatcher;
	}

	/**
	* Runs this cron task.
	*
	* @return null
	*/
	public function run()
	{
		$search_type = $this->config['search_type'];

		// We do some additional checks in the module to ensure it can actually be utilised
		$error = false;
		$search = new $search_type($error, $this->an602_root_path, $this->php_ext, $this->auth, $this->config, $this->db, $this->user, $this->an602_dispatcher);

		if (!$error)
		{
			$search->tidy();
		}
	}

	/**
	* Returns whether this cron task can run, given current board configuration.
	*
	* Search cron task is runnable in all normal use. It may not be
	* runnable if the search backend implementation selected in board
	* configuration does not exist.
	*
	* @return bool
	*/
	public function is_runnable()
	{
		return class_exists($this->config['search_type']);
	}

	/**
	* Returns whether this cron task should run now, because enough time
	* has passed since it was last run.
	*
	* The interval between search tidying is specified in board
	* configuration.
	*
	* @return bool
	*/
	public function should_run()
	{
		return $this->config['search_last_gc'] < time() - $this->config['search_gc'];
	}
}
