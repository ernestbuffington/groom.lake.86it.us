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
* Tidy cache cron task.
*/
class tidy_cache extends \an602\cron\task\base
{
	protected $config;
	protected $cache;

	/**
	* Constructor.
	*
	* @param \an602\config\config $config The config
	* @param \an602\cache\driver\driver_interface $cache The cache driver
	*/
	public function __construct(\an602\config\config $config, \an602\cache\driver\driver_interface $cache)
	{
		$this->config = $config;
		$this->cache = $cache;
	}

	/**
	* Runs this cron task.
	*
	* @return null
	*/
	public function run()
	{
		$this->cache->tidy();
	}

	/**
	* Returns whether this cron task can run, given current board configuration.
	*
	* Tidy cache cron task runs if the cache implementation in use
	* supports tidying.
	*
	* @return bool
	*/
	public function is_runnable()
	{
		return true;
	}

	/**
	* Returns whether this cron task should run now, because enough time
	* has passed since it was last run.
	*
	* The interval between cache tidying is specified in board
	* configuration.
	*
	* @return bool
	*/
	public function should_run()
	{
		return $this->config['cache_last_gc'] < time() - $this->config['cache_gc'];
	}
}
