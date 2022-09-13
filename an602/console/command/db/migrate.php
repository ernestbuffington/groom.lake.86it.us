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
namespace an602\console\command\db;

use an602\db\output_handler\log_wrapper_migrator_output_handler;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class migrate extends \an602\console\command\db\migration_command
{
	/** @var \an602\log\log */
	protected $log;

	/** @var string AN602 root path */
	protected $an602_root_path;

	/** @var  \an602\filesystem\filesystem_interface */
	protected $filesystem;

	/** @var \an602\language\language */
	protected $language;

	public function __construct(\an602\user $user, \an602\language\language $language, \an602\db\migrator $migrator, \an602\extension\manager $extension_manager, \an602\config\config $config, \an602\cache\service $cache, \an602\log\log $log, \an602\filesystem\filesystem_interface $filesystem, $an602_root_path)
	{
		$this->language = $language;
		$this->log = $log;
		$this->filesystem = $filesystem;
		$this->an602_root_path = $an602_root_path;
		parent::__construct($user, $migrator, $extension_manager, $config, $cache);
		$this->language->add_lang(array('common', 'install', 'migrator'));
	}

	protected function configure()
	{
		$this
			->setName('db:migrate')
			->setDescription($this->language->lang('CLI_DESCRIPTION_DB_MIGRATE'))
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$io = new SymfonyStyle($input, $output);

		$this->migrator->set_output_handler(new log_wrapper_migrator_output_handler($this->language, new console_migrator_output_handler($this->user, $output), $this->an602_root_path . 'store/migrations_' . time() . '.log', $this->filesystem));

		$this->migrator->create_migrations_table();

		$this->cache->purge();
		if ($this->config instanceof \an602\config\db)
		{
			$this->config->initialise($this->cache->get_driver());
		}

		$this->load_migrations();
		$orig_version = $this->config['version'];
		while (!$this->migrator->finished())
		{
			try
			{
				$this->migrator->update();
			}
			catch (\an602\db\migration\exception $e)
			{
				$io->error($e->getLocalisedMessage($this->user));
				$this->finalise_update();
				return 1;
			}
		}

		if ($orig_version != $this->config['version'])
		{
			$this->log->add('admin', ANONYMOUS, '', 'LOG_UPDATE_DATABASE', time(), array($orig_version, $this->config['version']));
		}

		$this->finalise_update();
		$io->success($this->language->lang('INLINE_UPDATE_SUCCESSFUL'));
	}
}
