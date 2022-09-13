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

namespace an602\install\helper;

/**
 * General helper functionality for the updater
 */
class update_helper
{
	/**
	 * @var string
	 */
	protected $path_to_new_files;

	/**
	 * @var string
	 */
	protected $path_to_old_files;

	/**
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * Constructor
	 *
	 * @param string	$an602_root_path
	 */
	public function __construct($an602_root_path)
	{
		$this->an602_root_path		= $an602_root_path;
		$this->path_to_new_files	= $an602_root_path . 'install/update/new/';
		$this->path_to_old_files	= $an602_root_path . 'install/update/old/';
	}

	/**
	 * Returns path to new update files
	 *
	 * @return string
	 */
	public function get_path_to_new_update_files()
	{
		return $this->path_to_new_files;
	}

	/**
	 * Returns path to new update files
	 *
	 * @return string
	 */
	public function get_path_to_old_update_files()
	{
		return $this->path_to_old_files;
	}

	/**
	 * Includes the updated file if available
	 *
	 * @param string	$filename	Path to the file relative to AN602 root path
	 */
	public function include_file($filename)
	{
		if (is_file($this->path_to_new_files . $filename))
		{
			include_once($this->path_to_new_files . $filename);
		}
		else if (is_file($this->an602_root_path . $filename))
		{
			include_once($this->an602_root_path . $filename);
		}
	}

	/**
	 * Customized version_compare()
	 *
	 * @param string		$version_number1
	 * @param string		$version_number2
	 * @param string|null	$operator
	 * @return int|bool	The returned value is identical to the PHP build-in function version_compare()
	 */
	public function an602_version_compare($version_number1, $version_number2, $operator = null)
	{
		if ($operator === null)
		{
			$result = version_compare(
				str_replace('rc', 'RC', strtolower($version_number1)),
				str_replace('rc', 'RC', strtolower($version_number2))
			);
		}
		else
		{
			$result = version_compare(
				str_replace('rc', 'RC', strtolower($version_number1)),
				str_replace('rc', 'RC', strtolower($version_number2)),
				$operator
			);
		}

		return $result;
	}
}
