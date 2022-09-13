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
 * Migration to install VigLink data
 */
class viglink_data extends \an602\db\migration\migration
{
	public static function depends_on()
	{
		return array('\an602\db\migration\data\v31x\v312');
	}

	public function effectively_installed()
	{
		return isset($this->config['an602_viglink_api_key']);
	}

	public function update_data()
	{
		return array(
			// Basic config options
			array('config.add', array('viglink_enabled', 0)),
			array('config.add', array('viglink_api_key', '')),

			// Special config options for AN602 use
			array('config.add', array('allow_viglink_an602', 1)),
			array('config.add', array('allow_viglink_global', 1)),
			array('config.add', array('an602_viglink_api_key', 'e4fd14f5d7f2bb6d80b8f8da1354718c')),
			array('config.add', array('viglink_convert_account_url', '')),
			array('config.add', array('viglink_api_siteid', md5($this->config['server_name']))),

			// Add the ACP module to Board Configuration
			array('module.add', array(
				'acp',
				'ACP_BOARD_CONFIGURATION',
				array(
					'module_basename'	=> '\an602\viglink\acp\viglink_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
