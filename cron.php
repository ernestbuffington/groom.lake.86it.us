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

use Symfony\Component\HttpFoundation\RedirectResponse;

/**
*/
define('IN_AN602', true);
$an602_root_path = (defined('AN602_ROOT_PATH')) ? AN602_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($an602_root_path . 'common.' . $phpEx);

// Do not update users last page entry
$user->session_begin(false);
$auth->acl($user->data);

$cron_type = $request->variable('cron_type', '');

$get_params_array = $request->get_super_global(\an602\request\request_interface::GET);

/** @var \an602\controller\helper $controller_helper */
$controller_helper = $an602_container->get('controller.helper');
$response = new RedirectResponse(
	$controller_helper->route('an602_cron_run', $get_params_array, false),
	301
);
$response->send();
