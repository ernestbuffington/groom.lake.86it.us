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

use Symfony\Component\HttpFoundation\RedirectResponse;

/**
* @ignore
*/
define('IN_AN602', true);
$an602_root_path = (defined('AN602_ROOT_PATH')) ? AN602_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($an602_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);

$post_id		= $request->variable('p', 0);
$pm_id			= $request->variable('pm', 0);

$redirect_route_name = ($pm_id === 0) ? 'an602_report_post_controller' : 'an602_report_pm_controller';

/** @var \an602\controller\helper $controller_helper */
$controller_helper = $an602_container->get('controller.helper');
$response = new RedirectResponse(
	$controller_helper->route($redirect_route_name, array(
		'id'	=> ($pm_id === 0) ? $post_id : $pm_id,
	), false),
	301
);
$response->send();
