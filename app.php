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
$user->setup('app');

/* @var $http_kernel \Symfony\Component\HttpKernel\HttpKernel */
$http_kernel = $an602_container->get('http_kernel');

/* @var $symfony_request \an602\symfony_request */
$symfony_request = $an602_container->get('symfony_request');
$response = $http_kernel->handle($symfony_request);
$response->send();
$http_kernel->terminate($symfony_request, $response);
