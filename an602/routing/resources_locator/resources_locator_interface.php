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

namespace an602\routing\resources_locator;

interface resources_locator_interface
{
	/**
	 * Locates a list of resources used to load the routes
	 *
	 * Each entry of the list can be either the resource or an array composed of 2 elements:
	 * the resource and its type.
	 *
	 * @return mixed[] List of resources
	 */
	public function locate_resources();
}
