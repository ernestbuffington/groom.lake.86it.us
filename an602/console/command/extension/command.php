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
namespace an602\console\command\extension;

use Symfony\Component\Console\Style\SymfonyStyle;

abstract class command extends \an602\console\command\command
{
	/** @var \an602\extension\manager */
	protected $manager;

	/** @var \an602\log\log */
	protected $log;

	/** @var string Cache driver class */
	protected $cache_driver_class;

	/**
	 * Constructor.
	 *
	 * @param \an602\user				$user				User object
	 * @param \an602\extension\manager	$manager			Extension manager object
	 * @param \an602\log\log			$log				Log object
	 * @param string					$cache_driver_class	Cache driver class
	 */
	public function __construct(\an602\user $user, \an602\extension\manager $manager, \an602\log\log $log, $cache_driver_class)
	{
		$this->manager = $manager;
		$this->log = $log;
		$this->cache_driver_class = $cache_driver_class;

		parent::__construct($user);
	}

	/**
	 * Check if APCu cache driver is used and enabled for CLI, otherwise display a notice.
	 *
	 * @param SymfonyStyle $io
	 * @return void
	 */
	protected function check_apcu_cache(SymfonyStyle $io)
	{
		if ($this->cache_driver_class === 'an602\\cache\\driver\\apcu' && !@ini_get('apc.enable_cli'))
		{
			$io->note($this->user->lang('CLI_APCU_CACHE_NOTICE'));
		}
	}
}
