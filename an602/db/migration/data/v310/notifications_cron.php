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

namespace an602\db\migration\data\v310;

class notifications_cron extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array('\an602\db\migration\data\v310\notifications');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('read_notification_expire_days', 30)),
			array('config.add', array('read_notification_last_gc', 0)), // last run
			array('config.add', array('read_notification_gc', (60 * 60 * 24))), // seconds between run; 1 day
		);
	}
}
