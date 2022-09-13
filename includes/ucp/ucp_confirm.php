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
* @ignore
*/
if (!defined('IN_AN602'))
{
	exit;
}

/**
* ucp_confirm
* Visual confirmation
*
* Note to potential users of this code ...
*
* Remember this is released under the _GPL_ and is subject
* to that licence. Do not incorporate this within software
* released or distributed in any way under a licence other
* than the GPL. We will be watching ... ;)
*/
class ucp_confirm
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $an602_container, $request;

		$captcha = $an602_container->get('captcha.factory')->get_instance($config['captcha_plugin']);
		$captcha->init($request->variable('type', 0));
		$captcha->execute();

		garbage_collection();
		exit_handler();
	}
}
