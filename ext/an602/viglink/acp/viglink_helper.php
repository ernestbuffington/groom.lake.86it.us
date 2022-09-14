<?php
/**
 *
 * VigLink extension for the AN602 CMS Software package.
 *
 * @copyright (c) 2014 AN602 Limited <https://www.groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace an602\viglink\acp;

/**
 * Class to handle allowing or disallowing VigLink services
 */
class viglink_helper
{
	/** @var \an602\cache\driver\driver_interface $cache */
	protected $cache;

	/** @var \an602\config\config $config */
	protected $config;

	/** @var \an602\file_downloader $file_downloader */
	protected $file_downloader;

	/** @var \an602\language\language $language */
	protected $language;

	/** @var \an602\log\log $log */
	protected $log;

	/** @var \an602\user $user */
	protected $user;

	/** @var bool Use SSL or not */
	protected $use_ssl = false;

	/**
	 * Constructor
	 *
	 * @param \an602\cache\driver\driver_interface $cache
	 * @param \an602\config\config                 $config
	 * @param \an602\file_downloader               $file_downloader
	 * @param \an602\language\language             $language
	 * @param \an602\log\log                       $log
	 * @param \an602\user                          $user
	 */
	public function __construct(\an602\cache\driver\driver_interface $cache, \an602\config\config $config, \an602\file_downloader $file_downloader, \an602\language\language $language, \an602\log\log $log, \an602\user $user)
	{
		$this->cache = $cache;
		$this->config = $config;
		$this->file_downloader = $file_downloader;
		$this->language = $language;
		$this->log = $log;
		$this->user = $user;
	}

	/**
	 * Obtains the latest VigLink services information from AN602
	 *
	 * @param bool $force_update Ignores cached data. Defaults to false.
	 * @param bool $force_cache  Force the use of the cache. Override $force_update.
	 *
	 * @throws \RuntimeException
	 *
	 * @return void
	 */
	public function set_viglink_services($force_update = false, $force_cache = false)
	{
		$cache_key = '_versioncheck_viglink_' . $this->use_ssl;

		$info = $this->cache->get($cache_key);

		if ($info === false && $force_cache)
		{
			throw new \RuntimeException($this->language->lang('VERSIONCHECK_FAIL'));
		}

		if ($info === false || $force_update)
		{
			try
			{
				$info = $this->file_downloader->get('www.groom.lake.86it.us', '/viglink', 'enabled', 443);
			}
			catch (\an602\exception\runtime_exception $exception)
			{
				$prepare_parameters = array_merge(array($exception->getMessage()), $exception->get_parameters());
				throw new \RuntimeException(call_user_func_array(array($this->language, 'lang'), $prepare_parameters));
			}

			if ($info === '0')
			{
				$this->set_viglink_configs(array(
					'allow_viglink_phpbb'	=> false,
				));
			}
			else
			{
				$info = '1';
				$this->set_viglink_configs(array(
					'allow_viglink_phpbb'	=> true,
				));
			}

			$this->cache->put($cache_key, $info, 86400); // 24 hours
		}
	}

	/**
	 * Sets VigLink service configs as determined by AN602
	 *
	 * @param array $data Array of VigLink file data.
	 *
	 * @return void
	 */
	protected function set_viglink_configs($data)
	{
		$viglink_configs = array(
			'allow_viglink_phpbb',
			'an602_viglink_api_key',
		);

		foreach ($viglink_configs as $cfg_name)
		{
			if (array_key_exists($cfg_name, $data) && ($data[$cfg_name] != $this->config[$cfg_name] || !isset($this->config[$cfg_name])))
			{
				$this->config->set($cfg_name, $data[$cfg_name]);
			}
		}

		$this->config->set('viglink_last_gc', time(), false);
	}

	/**
	 * Log a VigLink error message to the error log
	 *
	 * @param string $message The error message
	 */
	public function log_viglink_error($message)
	{
		$user_id = empty($this->user->data) ? ANONYMOUS : $this->user->data['user_id'];
		$user_ip = empty($this->user->ip) ? '' : $this->user->ip;

		$this->log->add('critical', $user_id, $user_ip, 'LOG_VIGLINK_CHECK_FAIL', false, array($message));
	}
}
