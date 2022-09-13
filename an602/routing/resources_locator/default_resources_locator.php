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

use an602\extension\manager;

/**
 * Locates the yaml routing resources located in the default locations
 */
class default_resources_locator implements resources_locator_interface
{
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
	 * Extension manager
	 *
	 * @var manager
	 */
	protected $extension_manager;

	/**
	 * Construct method
	 *
	 * @param string	$an602_root_path	AN602 root path
	 * @param string	$environment		Name of the current environment
	 * @param manager	$extension_manager	Extension manager
	 */
	public function __construct($an602_root_path, $environment, manager $extension_manager = null)
	{
		$this->an602_root_path		= $an602_root_path;
		$this->environment			= $environment;
		$this->extension_manager	= $extension_manager;
	}

	/**
	 * {@inheritdoc}
	 */
	public function locate_resources()
	{
		$resources = [['config/' . $this->environment . '/routing/environment.yml', 'yaml']];

		$resources = $this->append_ext_resources($resources);

		return $resources;
	}

	/**
	 * Append extension resources to an array of resouces
	 *
	 * @see resources_locator_interface::locate_resources()
	 *
	 * @param mixed[] $resources List of resources
	 *
	 * @return mixed[] List of resources
	 */
	protected function append_ext_resources(array $resources)
	{
		if ($this->extension_manager !== null)
		{
			foreach ($this->extension_manager->all_enabled(false) as $path)
			{
				if (file_exists($this->an602_root_path . $path . 'config/' . $this->environment . '/routing/environment.yml'))
				{
					$resources[] = [$path . 'config/' . $this->environment . '/routing/environment.yml', 'yaml'];
				}
				else if (!is_dir($this->an602_root_path . $path . 'config/' . $this->environment))
				{
					if (file_exists($this->an602_root_path . $path . 'config/default/routing/environment.yml'))
					{
						$resources[] = [$path . 'config/default/routing/environment.yml', 'yaml'];
					}
					else if (!is_dir($this->an602_root_path . $path . 'config/default/routing') && file_exists($this->an602_root_path . $path . 'config/routing.yml'))
					{
						$resources[] = [$path . 'config/routing.yml', 'yaml'];
					}
				}
			}
		}

		return $resources;
	}
}
