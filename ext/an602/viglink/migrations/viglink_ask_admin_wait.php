<?php
/**
 *
 * VigLink extension for the AN602 CMS Software package.
 *
 * @copyright (c) 2014 AN602 Limited <https://www.groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace an602\viglink\migrations;

/**
 * Migration to only ask admin once per day
 */
class viglink_ask_admin_wait extends \an602\db\migration\migration
{
	public static function depends_on()
	{
		return array('\an602\viglink\migrations\viglink_ask_admin');
	}

	public function effectively_installed()
	{
		return isset($this->config['viglink_ask_admin_last']);
	}

	public function update_data()
	{
		return array(
			array('if', array(
				(!$this->config->offsetExists('viglink_ask_admin_last')),
				array('config.add', array('viglink_ask_admin_last', '0')),
			)),
		);
	}
}
