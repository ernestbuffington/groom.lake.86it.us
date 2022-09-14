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

namespace an602\textformatter;

/**
* Currently only used to signal that something that could effect the rendering has changed.
* BBCodes, smilies, censored words, templates, etc...
*/
interface cache_interface
{
	/**
	* Invalidate and/or regenerate this text formatter's cache(s)
	*/
	public function invalidate();

	/**
	* Tidy/prune this text formatter's cache(s)
	*/
	public function tidy();
}
