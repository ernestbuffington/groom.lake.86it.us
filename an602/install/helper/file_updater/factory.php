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

namespace an602\install\helper\file_updater;

use an602\di\service_collection;
use an602\install\exception\file_updater_failure_exception;

/**
 * File updater factory
 */
class factory
{
	/**
	 * @var array
	 */
	protected $file_updaters;

	/**
	 * Constructor
	 *
	 * @param service_collection $collection	File updater service collection
	 */
	public function __construct(service_collection $collection)
	{
		foreach ($collection as $service)
		{
			$this->register($service);
		}
	}

	/**
	 * Register updater object
	 *
	 * @param file_updater_interface $updater	Updater object
	 */
	public function register(file_updater_interface $updater)
	{
		$name = $updater->get_method_name();
		$this->file_updaters[$name] = $updater;
	}

	/**
	 * Returns file updater object
	 *
	 * @param string $name	Name of the updater method
	 *
	 * @throws file_updater_failure_exception	When the specified file updater does not exist
	 */
	public function get($name)
	{
		if (!isset($this->file_updaters[$name]))
		{
			throw new file_updater_failure_exception();
		}

		return $this->file_updaters[$name];
	}
}