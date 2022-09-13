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

/**
* @package module_install
*/
class acp_contact_info
{
	public function module()
	{
		return array(
			'filename'	=> 'acp_contact',
			'title'		=> 'ACP_CONTACT',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'contact'	=> array('title' => 'ACP_CONTACT_SETTINGS', 'auth' => 'acl_a_board', 'cat' => array('ACP_BOARD_CONFIGURATION')),
			),
		);
	}
}
