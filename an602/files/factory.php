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

namespace an602\files;

class factory
{
	/**
	 * @var \Symfony\Component\DependencyInjection\ContainerInterface
	 */
	private $container;

	/**
	 * Constructor
	 *
	 * @param \Symfony\Component\DependencyInjection\ContainerInterface $container
	 */
	public function __construct(\Symfony\Component\DependencyInjection\ContainerInterface $container)
	{
		$this->container = $container;
	}

	/**
	 * Get files service
	 *
	 * @param string $name Service name
	 *
	 * @return object|bool Requested service or false if service could not be
	 *				found by the container
	 */
	public function get($name)
	{
		$service = false;

		$name = (strpos($name, '.') === false) ? 'files.' . $name : $name;

		try
		{
			$service = $this->container->get($name);
		}
		catch (\Exception $e)
		{
			// do nothing
		}

		return $service;
	}
}
