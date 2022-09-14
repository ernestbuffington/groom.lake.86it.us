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

namespace an602\passwords\driver;

abstract class base implements rehashable_driver_interface
{
	/** @var \an602\config\config */
	protected $config;

	/** @var \an602\passwords\driver\helper */
	protected $helper;

	/** @var string Driver name */
	protected $name;

	/**
	* Constructor of passwords driver object
	*
	* @param \an602\config\config $config AN602 config
	* @param \an602\passwords\driver\helper $helper Password driver helper
	*/
	public function __construct(\an602\config\config $config, helper $helper)
	{
		$this->config = $config;
		$this->helper = $helper;
	}

	/**
	* {@inheritdoc}
	*/
	public function is_supported()
	{
		return true;
	}

	/**
	* {@inheritdoc}
	*/
	public function is_legacy()
	{
		return false;
	}

	/**
	 * {@inheritdoc}
	 */
	public function needs_rehash($hash)
	{
		return false;
	}

	/**
	* {@inheritdoc}
	*/
	public function get_settings_only($hash, $full = false)
	{
		return false;
	}
}
