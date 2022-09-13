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

class acp_help_an602_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_help_an602',
			'title'		=> 'ACP_HELP_AN602',
			'modes'		=> array(
				'help_an602'	=> array('title' => 'ACP_HELP_AN602', 'auth' => 'acl_a_server', 'cat' => array('ACP_SERVER_CONFIGURATION')),
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
