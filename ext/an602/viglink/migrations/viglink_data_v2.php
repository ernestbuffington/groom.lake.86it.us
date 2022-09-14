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
 * Migration to remove VigLink data
 */
class viglink_data_v2 extends \an602\db\migration\migration
{
	public static function depends_on()
	{
		return array('\an602\viglink\migrations\viglink_data');
	}

	public function effectively_installed()
	{
		return !isset($this->config['viglink_api_key']);
	}

	public function update_data()
	{
		return array(
			array('config.remove', array('viglink_api_key')),
			array('config.remove', array('allow_viglink_global')),
		);
	}
}
