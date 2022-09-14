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

namespace an602\language;

use Symfony\Component\Finder\Finder;

/**
 * Helper class for language file related functions
 */
class language_file_helper
{
	/**
	 * @var string	Path to AN602's root
	 */
	protected $an602_root_path;

	/**
	 * Constructor
	 *
	 * @param string	$an602_root_path	Path to AN602's root
	 */
	public function __construct($an602_root_path)
	{
		$this->an602_root_path = $an602_root_path;
	}

	/**
	 * Returns available languages
	 *
	 * @return array
	 */
	public function get_available_languages()
	{
		// Find available language packages
		$finder = new Finder();
		$finder->files()
			->name('iso.txt')
			->depth('== 1')
			->followLinks()
			->in($this->an602_root_path . 'language');

		$available_languages = array();
		foreach ($finder as $file)
		{
			$path = $file->getRelativePath();
			$info = explode("\n", $file->getContents());

			$available_languages[] = array(
				// Get the name of the directory containing iso.txt
				'iso' => $path,

				// Recover data from file
				'name' => trim($info[0]),
				'local_name' => trim($info[1]),
				'author' => trim($info[2])
			);
		}

		return $available_languages;
	}
}
