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

namespace an602;

/**
* Class recursive_dot_prefix_filter_iterator
*
* This filter ignores directories starting with a dot.
* When searching for php classes and template files of extensions
* we don't need to look inside these directories.
*/
class recursive_dot_prefix_filter_iterator extends \RecursiveFilterIterator
{
	public function accept()
	{
		$filename = $this->current()->getFilename();
		return $filename[0] !== '.' || !$this->current()->isDir();
	}
}
