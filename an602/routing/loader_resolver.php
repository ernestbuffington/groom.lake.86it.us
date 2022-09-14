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

namespace an602\routing;

use Symfony\Component\Config\Loader\LoaderResolverInterface;

/**
 * @see Symfony\Component\Config\Loader\LoaderResolver
 */
class loader_resolver implements LoaderResolverInterface
{
	/**
	 * @var \Symfony\Component\Config\Loader\LoaderInterface[] An array of LoaderInterface objects
	 */
	protected $loaders = [];

	public function __construct($loaders = [])
	{
		$this->loaders = $loaders;
	}

	/**
	 * {@inheritdoc}
	 */
	public function resolve($resource, $type = null)
	{
		/** @var \Symfony\Component\Config\Loader\LoaderInterface $loader */
		foreach ($this->loaders as $loader)
		{
			if ($loader->supports($resource, $type))
			{
				$loader->setResolver($this);
				return $loader;
			}
		}

		return false;
	}
}