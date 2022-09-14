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

namespace an602\template\twig\extension;

use Symfony\Bridge\Twig\Extension\RoutingExtension;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class routing extends RoutingExtension
{
	/** @var \an602\controller\helper */
	protected $helper;

	/**
	* Constructor
	*
	* @param \an602\routing\helper $helper
	*/
	public function __construct(\an602\routing\helper $helper)
	{
		$this->helper = $helper;
	}

	public function getPath($name, $parameters = array(), $relative = false)
	{
		return $this->helper->route($name, $parameters, true, false, $relative ? UrlGeneratorInterface::RELATIVE_PATH : UrlGeneratorInterface::ABSOLUTE_PATH);
	}

	public function getUrl($name, $parameters = array(), $schemeRelative = false)
	{
		return $this->helper->route($name, $parameters, true, false, $schemeRelative ? UrlGeneratorInterface::NETWORK_PATH : UrlGeneratorInterface::ABSOLUTE_URL);
	}
}
