<?php
/**
 *
 * VigLink extension for the AN602 CMS Software package.
 *
 * @copyright (c) 2016 PHP-AN602 <https://groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace an602\viglink\migrations;

/**
 * Migration to install VigLink cron task data
 */
class viglink_cron extends \an602\db\migration\migration
{
	public static function depends_on()
	{
		return array('\an602\viglink\migrations\viglink_data');
	}

	public function effectively_installed()
	{
		return isset($this->config['viglink_last_gc']);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('viglink_last_gc', 0, true)),
		);
	}
}
