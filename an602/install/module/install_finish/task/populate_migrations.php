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

namespace an602\install\module\install_finish\task;

use an602\install\exception\resource_limit_reached_exception;
use an602\install\helper\config;
use an602\install\helper\container_factory;

/**
 * Populates migrations
 */
class populate_migrations extends \an602\install\task_base
{
	/**
	 * @var config
	 */
	protected $config;

	/**
	 * @var \an602\extension\manager
	 */
	protected $extension_manager;

	/**
	 * @var \an602\db\migrator
	 */
	protected $migrator;

	/**
	 * Constructor
	 *
	 * @param config			$config		Installer's config
	 * @param container_factory	$container	AN602's DI contianer
	 */
	public function __construct(config $config, container_factory $container)
	{
		$this->config				= $config;
		$this->extension_manager	= $container->get('ext.manager');
		$this->migrator				= $container->get('migrator');

		parent::__construct(true);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		if (!$this->config->get('populate_migration_refresh_before', false))
		{
			if ($this->config->get_time_remaining() < 1)
			{
				$this->config->set('populate_migration_refresh_before', true);
				throw new resource_limit_reached_exception();
			}
		}

		$finder = $this->extension_manager->get_finder();

		$migrations = $finder
			->core_path('an602/db/migration/data/')
			->set_extensions(array())
			->get_classes();
		$this->migrator->populate_migrations($migrations);
	}

	/**
	 * {@inheritdoc}
	 */
	static public function get_step_count()
	{
		return 1;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_task_lang_name()
	{
		return 'TASK_POPULATE_MIGRATIONS';
	}
}
