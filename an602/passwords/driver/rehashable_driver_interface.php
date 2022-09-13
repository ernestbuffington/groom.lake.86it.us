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

namespace an602\passwords\driver;

interface rehashable_driver_interface extends driver_interface
{
	/**
	 * Check if password needs to be rehashed
	 *
	 * @param string $hash Hash to check for rehash
	 * @return bool True if password needs to be rehashed, false if not
	 */
	public function needs_rehash($hash);
}
