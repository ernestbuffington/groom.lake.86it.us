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

namespace an602\exception;

/**
 * Interface exception_interface
 *
 * Define an exception which support a language var as message.
 */
interface exception_interface extends \Throwable
{
	/**
	 * Return the arguments associated with the message if it's a language var.
	 *
	 * @return array
	 */
	public function get_parameters();
}
