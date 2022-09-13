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
namespace an602\console\command\cache;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class purge extends \an602\console\command\command
{
	/** @var \an602\cache\driver\driver_interface */
	protected $cache;

	/** @var \an602\db\driver\driver_interface */
	protected $db;

	/** @var \an602\auth\auth */
	protected $auth;

	/** @var \an602\log\log_interface */
	protected $log;

	/** @var \an602\config\config */
	protected $config;

	/**
	* Constructor
	*
	* @param \an602\user							$user	User instance
	* @param \an602\cache\driver\driver_interface	$cache	Cache instance
	* @param \an602\db\driver\driver_interface		$db		Database connection
	* @param \an602\auth\auth						$auth	Auth instance
	* @param \an602\log\log_interface				$log	Logger instance
	* @param \an602\config\config					$config	Config instance
	*/
	public function __construct(\an602\user $user, \an602\cache\driver\driver_interface $cache, \an602\db\driver\driver_interface $db, \an602\auth\auth $auth, \an602\log\log_interface $log, \an602\config\config $config)
	{
		$this->cache = $cache;
		$this->db = $db;
		$this->auth = $auth;
		$this->log = $log;
		$this->config = $config;
		parent::__construct($user);
	}

	/**
	* {@inheritdoc}
	*/
	protected function configure()
	{
		$this
			->setName('cache:purge')
			->setDescription($this->user->lang('PURGE_CACHE'))
		;
	}

	/**
	* Executes the command cache:purge.
	*
	* Purge the cache (including permissions) and increment the asset_version number
	*
	* @param InputInterface  $input  An InputInterface instance
	* @param OutputInterface $output An OutputInterface instance
	*
	* @return void
	*/
	protected function execute(InputInterface $input, OutputInterface $output)
	{
		$this->config->increment('assets_version', 1);
		$this->cache->purge();

		// Clear permissions
		$this->auth->acl_clear_prefetch();
		an602_cache_moderators($this->db, $this->cache, $this->auth);

		$this->log->add('admin', ANONYMOUS, '', 'LOG_PURGE_CACHE', time(), array());

		$io = new SymfonyStyle($input, $output);
		$io->success($this->user->lang('PURGE_CACHE_SUCCESS'));
	}
}
