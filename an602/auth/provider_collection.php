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

namespace an602\auth;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
* Collection of auth providers to be configured at container compile time.
*/
class provider_collection extends \an602\di\service_collection
{
	/** @var \an602\config\config AN602 Config */
	protected $config;

	/**
	* Constructor
	*
	* @param ContainerInterface $container Container object
	* @param \an602\config\config $config AN602 config
	*/
	public function __construct(ContainerInterface $container, \an602\config\config $config)
	{
		$this->container = $container;
		$this->config = $config;
	}

	/**
	* Get an auth provider.
	*
	* @param string $provider_name The name of the auth provider
	* @return object	Default auth provider selected in config if it
	*			does exist. Otherwise the standard db auth
	*			provider.
	* @throws \RuntimeException If neither the auth provider that
	*			is specified by the AN602 config nor the db
	*			auth provider exist. The db auth provider
	*			should always exist in a AN602 installation.
	*/
	public function get_provider($provider_name = '')
	{
		$provider_name = ($provider_name !== '') ? $provider_name : basename(trim($this->config['auth_method']));
		if ($this->offsetExists('auth.provider.' . $provider_name))
		{
			return $this->offsetGet('auth.provider.' . $provider_name);
		}
		// Revert to db auth provider if selected method does not exist
		else if ($this->offsetExists('auth.provider.db'))
		{
			return $this->offsetGet('auth.provider.db');
		}
		else
		{
			throw new \RuntimeException(sprintf('The authentication provider for the authentication method "%1$s" does not exist. It was not possible to recover from this by reverting to the database authentication provider.', $this->config['auth_method']));
		}
	}
}
