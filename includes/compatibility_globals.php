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
*/
if (!defined('IN_AN602'))
{
	exit;
}

//
// Deprecated globals
//
define('ATTACHMENT_CATEGORY_WM', 2); // Windows Media Files - Streaming - @deprecated 3.2
define('ATTACHMENT_CATEGORY_RM', 3); // Real Media Files - Streaming - @deprecated 3.2
define('ATTACHMENT_CATEGORY_QUICKTIME', 6); // Quicktime/Mov files - @deprecated 3.2
define('ATTACHMENT_CATEGORY_FLASH', 5); // Flash/SWF files - @deprecated 3.3

/**
 * Sets compatibility globals in the global scope
 *
 * This function registers compatibility variables to the global
 * variable scope. This is required to make it possible to include this file
 * in a service.
 */
function register_compatibility_globals()
{
	global $an602_container;

	global $cache, $an602_dispatcher, $request, $user, $auth, $db, $config, $language, $an602_log;
	global $symfony_request, $an602_filesystem, $an602_path_helper, $an602_extension_manager, $template;

	// set up caching
	/* @var $cache \an602\cache\service */
	$cache = $an602_container->get('cache');

	// Instantiate some basic classes
	/* @var $an602_dispatcher \an602\event\dispatcher */
	$an602_dispatcher = $an602_container->get('dispatcher');

	/* @var $request \an602\request\request_interface */
	$request = $an602_container->get('request');
	// Inject request instance, so only this instance is used with request_var
	request_var('', 0, false, false, $request);

	/* @var $user \an602\user */
	$user = $an602_container->get('user');

	/* @var \an602\language\language $language */
	$language = $an602_container->get('language');

	/* @var $auth \an602\auth\auth */
	$auth = $an602_container->get('auth');

	/* @var $db \an602\db\driver\driver_interface */
	$db = $an602_container->get('dbal.conn');

	// Grab global variables, re-cache if necessary
	/* @var $config an602\config\db */
	$config = $an602_container->get('config');
	set_config('', '', false, $config);
	set_config_count('', 0, false, $config);

	/* @var $an602_log \an602\log\log_interface */
	$an602_log = $an602_container->get('log');

	/* @var $symfony_request \an602\symfony_request */
	$symfony_request = $an602_container->get('symfony_request');

	/* @var $an602_filesystem \an602\filesystem\filesystem_interface */
	$an602_filesystem = $an602_container->get('filesystem');

	/* @var $an602_path_helper \an602\path_helper */
	$an602_path_helper = $an602_container->get('path_helper');

	// load extensions
	/* @var $an602_extension_manager \an602\extension\manager */
	$an602_extension_manager = $an602_container->get('ext.manager');

	/* @var $template \an602\template\template */
	$template = $an602_container->get('template');
}
