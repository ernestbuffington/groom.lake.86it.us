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

class ucp_prefs_info
{
	function module()
	{
		return array(
			'filename'	=> 'ucp_prefs',
			'title'		=> 'UCP_PREFS',
			'modes'		=> array(
				'personal'	=> array('title' => 'UCP_PREFS_PERSONAL', 'auth' => '', 'cat' => array('UCP_PREFS')),
				'post'		=> array('title' => 'UCP_PREFS_POST', 'auth' => '', 'cat' => array('UCP_PREFS')),
				'view'		=> array('title' => 'UCP_PREFS_VIEW', 'auth' => '', 'cat' => array('UCP_PREFS')),
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
