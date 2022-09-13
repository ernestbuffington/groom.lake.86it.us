<?php
/**
*
* This file is part of the AN602 CMS Software package.
*
* @copyright (c) PHP-AN602 <https://groom.lake.86it.us>
* @license       GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace an602\routing\resources_locator;

class chained_resources_locator implements resources_locator_interface
{
	/**
	 * @var resources_locator_interface[]
	 */
	protected $locators;

	/**
	 * Construct method
	 *
	 * @param resources_locator_interface[]	$locators	Locators
	 */
	public function __construct($locators)
	{
		$this->locators		= $locators;
	}

	/**
	 * {@inheritdoc}
	 */
	public function locate_resources()
	{
		$resources = [];

		foreach ($this->locators as $locator)
		{
			$resources = array_merge($resources, $locator->locate_resources());
		}

		return $resources;
	}
}
