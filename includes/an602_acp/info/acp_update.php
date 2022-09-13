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

class acp_update_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_update',
			'title'		=> 'ACP_UPDATE',
			'modes'		=> array(
				'version_check'		=> array('title' => 'ACP_VERSION_CHECK', 'auth' => 'acl_a_board', 'cat' => array('ACP_AUTOMATION')),
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
