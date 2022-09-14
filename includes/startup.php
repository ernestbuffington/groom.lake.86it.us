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

// Report all errors, except notices and deprecation messages
$level = E_ALL & ~E_NOTICE & ~E_DEPRECATED;
error_reporting($level);

/**
* Minimum Requirement: PHP 7.1.3
*/
if (version_compare(PHP_VERSION, '7.1.3', '<'))
{
	die('You are running an unsupported PHP version. Please upgrade to PHP 7.1.3 or higher before trying to install or update to AN602 3.3');
}
// Register globals and magic quotes have been dropped in PHP 5.4 so no need for extra checks


// In PHP 5.3.0 the error level has been raised to E_WARNING which causes problems
// because we show E_WARNING errors and do not set a default timezone.
// This is because we have our own timezone handling and work in UTC only anyway.

// So what we basically want to do is set our timezone to UTC,
// but we don't know what other scripts (such as bridges) are involved,
// so we check whether a timezone is already set by calling date_default_timezone_get().

// Unfortunately, date_default_timezone_get() itself might throw E_WARNING
// if no timezone has been set, so we have to keep it quiet with @.

// date_default_timezone_get() tries to guess the correct timezone first
// and then falls back to UTC when everything fails.
// We just set the timezone to whatever date_default_timezone_get() returns.
date_default_timezone_set(@date_default_timezone_get());

// Autoloading of dependencies.
// Three options are supported:
// 1. If dependencies are installed with Composer, Composer will create a
//    vendor/autoload.php. If this file exists it will be
//    automatically used by AN602. This is the default mode that AN602
//    will use when shipped.
// 2. To disable composer autoloading, AN602_NO_COMPOSER_AUTOLOAD can be specified.
// 	  Additionally specify AN602_AUTOLOAD=/path/to/autoload.php in the
//    environment. This is useful for running CLI scripts and tests.
//    /path/to/autoload.php should define and register class loaders
//    for all of AN602's dependencies.
// 3. You can also set AN602_NO_COMPOSER_AUTOLOAD without setting AN602_AUTOLOAD.
//    In this case autoloading needs to be defined before running any AN602
//    script. This might be useful in cases when AN602 is integrated into a
//    larger program.
if (getenv('AN602_NO_COMPOSER_AUTOLOAD'))
{
	if (getenv('AN602_AUTOLOAD'))
	{
		require(getenv('AN602_AUTOLOAD'));
	}
}
else
{
	if (!file_exists($an602_root_path . 'vendor/autoload.php'))
	{
		trigger_error(
			'Composer dependencies have not been set up yet, run ' .
			"'php ../composer.phar install' from the AN602 directory to do so.",
			E_USER_ERROR
		);
	}
	require($an602_root_path . 'vendor/autoload.php');
}

$starttime = microtime(true);
