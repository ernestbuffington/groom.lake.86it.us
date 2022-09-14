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

namespace an602\install\helper;

/**
 * General helper functionality for the installer
 */
class install_helper
{
	/**
	 * @var string
	 */
	protected $php_ext;

	/**
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * Constructor
	 *
	 * @param string	$an602_root_path	path to AN602's root
	 * @param string	$php_ext			Extension of PHP files
	 */
	public function __construct($an602_root_path, $php_ext)
	{
		$this->an602_root_path	= $an602_root_path;
		$this->php_ext			= $php_ext;
	}

	/**
	 * Check whether AN602 is installed.
	 *
	 * @return bool
	 */
	public function is_an602_installed()
	{
		$config_path = $this->an602_root_path . 'config.' . $this->php_ext;
		$install_lock_path = $this->an602_root_path . 'cache/install_lock';

		if (file_exists($config_path) && !file_exists($install_lock_path) && filesize($config_path))
		{
			return true;
		}

		return false;
	}
}
