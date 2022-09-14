<?php
/**
 *
 * This file is part of the AN602 CMS Software package.
 *
 * @copyright (c) AN602 Limited <https://www.groom.lake.86it.us>
 * @license       GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace an602\routing\resources_locator;

use an602\filesystem\filesystem_interface;

/**
 * Locates the yaml routing resources taking update directories into consideration
 */
class installer_resources_locator implements resources_locator_interface
{
	/**
	 * AN602's filesystem handler
	 *
	 * @var filesystem_interface
	 */
	protected $filesystem;

	/**
	 * AN602 root path
	 *
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * Name of the current environment
	 *
	 * @var string
	 */
	protected $environment;

	/**
	 * Construct method
	 *
	 * @param filesystem_interface	$filesystem			AN602's filesystem handler
	 * @param string				$an602_root_path	AN602 root path
	 * @param string				$environment		Name of the current environment
	 */
	public function __construct(filesystem_interface $filesystem, $an602_root_path, $environment)
	{
		$this->filesystem			= $filesystem;
		$this->an602_root_path		= $an602_root_path;
		$this->environment			= $environment;
	}

	/**
	 * {@inheritdoc}
	 */
	public function locate_resources()
	{
		if ($this->filesystem->exists($this->an602_root_path . 'install/update/new/config'))
		{
			$resources = array(
				array('install/update/new/config/' . $this->environment . '/routing/environment.yml', 'yaml')
			);
		}
		else
		{
			$resources = array(
				array('config/' . $this->environment . '/routing/environment.yml', 'yaml')
			);
		}

		return $resources;
	}
}
