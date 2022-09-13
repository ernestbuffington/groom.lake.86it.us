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

namespace an602\template\twig\extension;

class config extends \Twig_Extension
{
	/** @var \an602\config\config */
	protected $config;

	/**
	 * Constructor.
	 *
	 * @param \an602\config\config	$config		Configuration object
	 */
	public function __construct(\an602\config\config $config)
	{
		$this->config = $config;
	}

	/**
	 * Get the name of this extension
	 *
	 * @return string
	 */
	public function getName()
	{
		return 'config';
	}

	/**
	 * Returns a list of global functions to add to the existing list.
	 *
	 * @return array An array of global functions
	 */
	public function getFunctions()
	{
		return array(
			new \Twig\TwigFunction('config', array($this, 'get_config')),
		);
	}

	/**
	 * Retrieves a configuration value for use in templates.
	 *
	 * @return string	The configuration value
	 */
	public function get_config()
	{
		$args = func_get_args();

		return $this->config->offsetGet($args[0]);
	}
}
