#!/usr/bin/env php
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

use Symfony\Component\Console\Input\ArgvInput;

if (php_sapi_name() != 'cli')
{
	echo 'This program must be run from the command line.' . PHP_EOL;
	exit(1);
}

define('IN_PHPBB', true);

$an602_root_path = __DIR__ . '/../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
require($an602_root_path . 'includes/startup.' . $phpEx);
require($an602_root_path . 'an602/class_loader.' . $phpEx);

$an602_class_loader = new \an602\class_loader('an602\\', "{$an602_root_path}an602/", $phpEx);
$an602_class_loader->register();

$an602_config_php_file = new \an602\config_php_file($an602_root_path, $phpEx);
extract($an602_config_php_file->get_all());

if (!defined('PHPBB_ENVIRONMENT'))
{
	@define('PHPBB_ENVIRONMENT', 'production');
}

require($an602_root_path . 'includes/constants.' . $phpEx);
require($an602_root_path . 'includes/functions.' . $phpEx);
require($an602_root_path . 'includes/functions_admin.' . $phpEx);
require($an602_root_path . 'includes/utf/utf_tools.' . $phpEx);
require($an602_root_path . 'includes/functions_compatibility.' . $phpEx);

$an602_container_builder = new \an602\di\container_builder($an602_root_path, $phpEx);
$an602_container = $an602_container_builder->with_config($an602_config_php_file);

$input = new ArgvInput();

if ($input->hasParameterOption(array('--env')))
{
	$an602_container_builder->with_environment($input->getParameterOption('--env'));
}

if ($input->hasParameterOption(array('--safe-mode')))
{
	$an602_container_builder->without_extensions();
	$an602_container_builder->without_cache();
}
else
{
	$an602_class_loader_ext = new \an602\class_loader('\\', "{$an602_root_path}ext/", $phpEx);
	$an602_class_loader_ext->register();
}

$an602_container = $an602_container_builder->get_container();
$an602_container->get('request')->enable_super_globals();
require($an602_root_path . 'includes/compatibility_globals.' . $phpEx);

register_compatibility_globals();

/** @var \an602\config\config $config */
$config = $an602_container->get('config');

/** @var \an602\language\language $language */
$language = $an602_container->get('language');
$language->set_default_language($config['default_lang']);
$language->add_lang(array('common', 'acp/common', 'cli'));

/* @var $user \an602\user */
$user = $an602_container->get('user');
$user->data['user_id'] = ANONYMOUS;
$user->ip = '127.0.0.1';

$application = new \an602\console\application('AN602 Console', PHPBB_VERSION, $language, $config);
$application->setDispatcher($an602_container->get('dispatcher'));
$application->register_container_commands($an602_container->get('console.command_collection'));
$application->run($input);
