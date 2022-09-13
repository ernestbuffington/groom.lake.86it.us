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
* Prune notifications cron task.
*/
class prune_notifications extends \an602\cron\task\base
{
	protected $config;
	protected $notification_manager;

	/**
	* Constructor.
	*
	* @param \an602\config\config $config The config
	* @param \an602\notification\manager $notification_manager Notification manager
	*/
	public function __construct(\an602\config\config $config, \an602\notification\manager $notification_manager)
	{
		$this->config = $config;
		$this->notification_manager = $notification_manager;
	}

	/**
	* {@inheritdoc}
	*/
	public function run()
	{
		// time minus expire days in seconds
		$timestamp = time() - ($this->config['read_notification_expire_days'] * 60 * 60 * 24);
		$this->notification_manager->prune_notifications($timestamp);
	}

	/**
	* {@inheritdoc}
	*/
	public function is_runnable()
	{
		return (bool) $this->config['read_notification_expire_days'];
	}

	/**
	* {@inheritdoc}
	*/
	public function should_run()
	{
		return $this->config['read_notification_last_gc'] < time() - $this->config['read_notification_gc'];
	}
}
