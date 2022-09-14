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

namespace an602\cron\task\core;

/**
* Cron task for cleaning plupload's temporary upload directory.
*/
class tidy_plupload extends \an602\cron\task\base
{
	/**
	* How old a file must be (in seconds) before it is deleted.
	* @var int
	*/
	protected $max_file_age = 86400;

	/**
	* How often we run the cron (in seconds).
	* @var int
	*/
	protected $cron_frequency = 86400;

	/**
	* AN602 root path
	* @var string
	*/
	protected $an602_root_path;

	/**
	* Config object
	* @var \an602\config\config
	*/
	protected $config;

	/** @var \an602\log\log_interface */
	protected $log;

	/** @var \an602\user */
	protected $user;

	/**
	* Directory where plupload stores temporary files.
	* @var string
	*/
	protected $plupload_upload_path;

	/**
	* Constructor.
	*
	* @param string $an602_root_path The root path
	* @param \an602\config\config $config The config
	* @param \an602\log\log_interface $log Log
	* @param \an602\user $user User object
	*/
	public function __construct($an602_root_path, \an602\config\config $config, \an602\log\log_interface $log, \an602\user $user)
	{
		$this->an602_root_path = $an602_root_path;
		$this->config = $config;
		$this->log = $log;
		$this->user = $user;

		$this->plupload_upload_path = $this->an602_root_path . $this->config['upload_path'] . '/plupload';
	}

	/**
	* {@inheritDoc}
	*/
	public function run()
	{
		// Remove old temporary file (perhaps failed uploads?)
		$last_valid_timestamp = time() - $this->max_file_age;
		try
		{
			$iterator = new \DirectoryIterator($this->plupload_upload_path);
			foreach ($iterator as $file)
			{
				if (strpos($file->getBasename(), $this->config['plupload_salt']) !== 0)
				{
					// Skip over any non-plupload files.
					continue;
				}

				if ($file->getMTime() < $last_valid_timestamp)
				{
					@unlink($file->getPathname());
				}
			}
		}
		catch (\UnexpectedValueException $e)
		{
			$this->log->add('critical', $this->user->data['user_id'], $this->user->ip, 'LOG_PLUPLOAD_TIDY_FAILED', false, array(
				$this->plupload_upload_path,
				$e->getMessage(),
				$e->getTraceAsString()
			));
		}

		$this->config->set('plupload_last_gc', time(), true);
	}

	/**
	* {@inheritDoc}
	*/
	public function is_runnable()
	{
		return !empty($this->config['plupload_salt']) && is_dir($this->plupload_upload_path);
	}

	/**
	* {@inheritDoc}
	*/
	public function should_run()
	{
		return $this->config['plupload_last_gc'] < time() - $this->cron_frequency;
	}
}
