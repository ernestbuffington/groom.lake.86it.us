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
namespace an602\console\command\config;

abstract class command extends \an602\console\command\command
{
	/** @var \an602\config\config */
	protected $config;

	public function __construct(\an602\user $user, \an602\config\config $config)
	{
		$this->config = $config;

		parent::__construct($user);
	}
}
