<?php
/**
 *
 * VigLink extension for the AN602 CMS Software package.
 *
 * @copyright (c) 2014 PHP-AN602 <https://groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace an602\viglink\migrations;

/**
 * Migration to ask admin about viglink
 */
class viglink_ask_admin extends \an602\db\migration\migration
{
	public static function depends_on()
	{
		return array('\an602\viglink\migrations\viglink_data_v2');
	}

	public function effectively_installed()
	{
		return isset($this->config['viglink_ask_admin']);
	}

	public function update_data()
	{
		return array(
			array('if', array(
				(!$this->config->offsetExists('viglink_ask_admin')),
				array('config.add', array('viglink_ask_admin', '')),
			)),
		);
	}
}
