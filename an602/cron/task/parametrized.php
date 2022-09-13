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

namespace an602\cron\task;

/**
* Parametrized cron task interface.
*
* Parametrized cron tasks are somewhat of a cross between regular cron tasks and
* delayed jobs. Whereas regular cron tasks perform some action globally,
* parametrized cron tasks perform actions on a particular object (or objects).
* Parametrized cron tasks do not make sense and are not usable without
* specifying these objects.
*/
interface parametrized extends \an602\cron\task\task
{
	/**
	* Returns parameters of this cron task as an array.
	*
	* The array must map string keys to string values.
	*
	* @return array
	*/
	public function get_parameters();

	/**
	* Parses parameters found in $request, which is an instance of
	* \an602\request\request_interface.
	*
	* $request contains user input and must not be trusted.
	* Cron task must validate all data before using it.
	*
	* @param \an602\request\request_interface $request Request object.
	*
	* @return null
	*/
	public function parse_parameters(\an602\request\request_interface $request);
}
