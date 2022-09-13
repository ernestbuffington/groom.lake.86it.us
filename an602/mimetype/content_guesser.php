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

namespace an602\mimetype;

class content_guesser extends guesser_base
{
	/**
	* {@inheritdoc}
	*/
	public function is_supported()
	{
		return function_exists('mime_content_type') && is_callable('mime_content_type');
	}

	/**
	* {@inheritdoc}
	*/
	public function guess($file, $file_name = '')
	{
		return mime_content_type($file);
	}
}
