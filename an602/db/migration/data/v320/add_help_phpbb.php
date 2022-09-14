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

namespace an602\db\migration\data\v320;

class add_help_an602 extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v320\v320rc1',
		);
	}

	public function effectively_installed()
	{
		return isset($this->config['help_send_statistics']);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('help_send_statistics', true)),
			array('config.add', array('help_send_statistics_time', 0)),
			array('module.remove', array('acp', false, 'ACP_SEND_STATISTICS')),
			array('module.add', array(
				'acp',
				'ACP_SERVER_CONFIGURATION',
				array(
					'module_basename'	=> 'acp_help_an602',
					'module_langname'	=> 'ACP_HELP_AN602',
					'module_mode'		=> 'help_an602',
					'module_auth'		=> 'acl_a_server',
				),
			)),
		);
	}
}
