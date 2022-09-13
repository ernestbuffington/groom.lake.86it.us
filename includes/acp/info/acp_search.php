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

class acp_search_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_search',
			'title'		=> 'ACP_SEARCH',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_SEARCH_SETTINGS', 'auth' => 'acl_a_search', 'cat' => array('ACP_SERVER_CONFIGURATION')),
				'index'		=> array('title' => 'ACP_SEARCH_INDEX', 'auth' => 'acl_a_search', 'cat' => array('ACP_CAT_DATABASE')),
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
