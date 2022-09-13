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

class acp_email_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_email',
			'title'		=> 'ACP_MASS_EMAIL',
			'modes'		=> array(
				'email'		=> array('title' => 'ACP_MASS_EMAIL', 'auth' => 'acl_a_email && cfg_email_enable', 'cat' => array('ACP_GENERAL_TASKS')),
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
