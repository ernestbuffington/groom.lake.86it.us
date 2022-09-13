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

class ucp_notifications_info
{
	function module()
	{
		return array(
			'filename'	=> 'ucp_notifications',
			'title'		=> 'UCP_NOTIFICATION_OPTIONS',
			'modes'		=> array(
				'notification_options'		=> array('title' => 'UCP_NOTIFICATION_OPTIONS', 'auth' => '', 'cat' => array('UCP_PREFS')),
				'notification_list'			=> array('title' => 'UCP_NOTIFICATION_LIST',    'auth' => 'cfg_allow_board_notifications', 'cat' => array('UCP_MAIN')),
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
