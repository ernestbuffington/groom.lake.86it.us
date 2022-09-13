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

namespace an602\db\output_handler;

class html_migrator_output_handler implements migrator_output_handler_interface
{
	/**
	 * Language object.
	 *
	 * @var \an602\language\language
	 */
	private $language;

	/**
	 * Constructor
	 *
	 * @param \an602\language\language	$language	Language object
	 */
	public function __construct(\an602\language\language $language)
	{
		$this->language = $language;
	}

	/**
	 * {@inheritdoc}
	 */
	public function write($message, $verbosity)
	{
		if ($verbosity <= migrator_output_handler_interface::VERBOSITY_VERBOSE)
		{
			$final_message = $this->language->lang_array(array_shift($message), $message);
			echo $final_message . "<br />\n";
		}
	}
}
