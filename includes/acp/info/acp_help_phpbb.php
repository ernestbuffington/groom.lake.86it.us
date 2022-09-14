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

class acp_help_an602_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_help_phpbb',
			'title'		=> 'ACP_HELP_PHPBB',
			'modes'		=> array(
				'help_phpbb'	=> array('title' => 'ACP_HELP_PHPBB', 'auth' => 'acl_a_server', 'cat' => array('ACP_SERVER_CONFIGURATION')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
