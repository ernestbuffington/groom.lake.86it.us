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
namespace an602\console\command\db;

abstract class migration_command extends \an602\console\command\command
{
	/** @var \an602\db\migrator */
	protected $migrator;

	/** @var \an602\extension\manager */
	protected $extension_manager;

	/** @var \an602\config\config */
	protected $config;

	/** @var \an602\cache\service */
	protected $cache;

	public function __construct(\an602\user $user, \an602\db\migrator $migrator, \an602\extension\manager $extension_manager, \an602\config\config $config, \an602\cache\service $cache)
	{
		$this->migrator = $migrator;
		$this->extension_manager = $extension_manager;
		$this->config = $config;
		$this->cache = $cache;
		parent::__construct($user);
	}

	protected function load_migrations()
	{
		$migrations = $this->extension_manager
			->get_finder()
			->core_path('an602/db/migration/data/')
			->extension_directory('/migrations')
			->get_classes();

		$this->migrator->set_migrations($migrations);

		return $this->migrator->get_migrations();
	}

	protected function finalise_update()
	{
		$this->cache->purge();
		$this->config->increment('assets_version', 1);
	}
}
