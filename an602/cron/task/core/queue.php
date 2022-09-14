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
* Queue cron task. Sends email and jabber messages queued by other scripts.
*/
class queue extends \an602\cron\task\base
{
	protected $an602_root_path;
	protected $php_ext;
	protected $cache_dir;
	protected $config;

	/**
	 * Constructor.
	 *
	 * @param string $an602_root_path The root path
	 * @param string $php_ext PHP file extension
	 * @param \an602\config\config $config The config
	 * @param string $cache_dir AN602 cache directory
	 */
	public function __construct($an602_root_path, $php_ext, \an602\config\config $config, $cache_dir)
	{
		$this->an602_root_path = $an602_root_path;
		$this->php_ext = $php_ext;
		$this->config = $config;
		$this->cache_dir = $cache_dir;
	}

	/**
	* Runs this cron task.
	*
	* @return null
	*/
	public function run()
	{
		if (!class_exists('queue'))
		{
			include($this->an602_root_path . 'includes/functions_messenger.' . $this->php_ext);
		}
		$queue = new \queue();
		$queue->process();
	}

	/**
	* Returns whether this cron task can run, given current board configuration.
	*
	* Queue task is only run if the email queue (file) exists.
	*
	* @return bool
	*/
	public function is_runnable()
	{
		return file_exists($this->cache_dir . 'queue.' . $this->php_ext);
	}

	/**
	* Returns whether this cron task should run now, because enough time
	* has passed since it was last run.
	*
	* The interval between queue runs is specified in board configuration.
	*
	* @return bool
	*/
	public function should_run()
	{
		return $this->config['last_queue_run'] < time() - $this->config['queue_interval'];
	}
}
