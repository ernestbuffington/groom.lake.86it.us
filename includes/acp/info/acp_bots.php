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

class acp_bots_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_bots',
			'title'		=> 'ACP_BOTS',
			'modes'		=> array(
				'bots'		=> array('title' => 'ACP_BOTS', 'auth' => 'acl_a_bots', 'cat' => array('ACP_GENERAL_TASKS')),
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
