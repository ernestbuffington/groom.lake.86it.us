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

namespace an602\captcha\plugins;

class gd_wave extends captcha_abstract
{
	public function is_available()
	{
		return @extension_loaded('gd');
	}

	public function get_name()
	{
		return 'CAPTCHA_GD_3D';
	}

	/**
	* @return string the name of the class used to generate the captcha
	*/
	function get_generator_class()
	{
		return '\\an602\\captcha\\gd_wave';
	}

	function acp_page($id, $module)
	{
		global $user;

		trigger_error($user->lang['CAPTCHA_NO_OPTIONS'] . adm_back_link($module->u_action));
	}
}
