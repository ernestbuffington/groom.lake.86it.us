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

namespace an602\template\twig\node;

class includejs extends \an602\template\twig\node\includeasset
{
	/**
	* {@inheritdoc}
	*/
	public function get_setters_name()
	{
		return 'script';
	}
}
