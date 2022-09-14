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
$user->setup();

/** @var \an602\controller\helper $controller_helper */
$controller_helper = $an602_container->get('controller.helper');

$response = new \Symfony\Component\HttpFoundation\RedirectResponse(
	$controller_helper->route(
		$request->variable('mode', 'faq') === 'bbcode' ? 'an602_help_bbcode_controller' : 'an602_help_faq_controller'
	),
	301
);
$response->send();
