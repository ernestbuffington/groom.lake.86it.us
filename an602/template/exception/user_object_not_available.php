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

namespace an602\template\exception;

/**
 * This exception is thrown when the user object was not set but it is required by the called method
 */
class user_object_not_available extends \an602\exception\runtime_exception
{

}
