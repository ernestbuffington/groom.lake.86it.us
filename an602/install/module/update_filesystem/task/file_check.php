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

namespace an602\install\module\update_filesystem\task;

use an602\filesystem\filesystem;
use an602\install\exception\resource_limit_reached_exception;
use an602\install\helper\config;
use an602\install\helper\iohandler\iohandler_interface;
use an602\install\helper\update_helper;
use an602\install\task_base;

/**
 * Updater task performing file checking
 */
class file_check extends task_base
{
	/**
	 * @var filesystem
	 */
	protected $filesystem;

	/**
	 * @var config
	 */
	protected $installer_config;

	/**
	 * @var iohandler_interface
	 */
	protected $iohandler;

	/**
	 * @var update_helper
	 */
	protected $update_helper;

	/**
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * Construct
	 *
	 * @param filesystem			$filesystem
	 * @param config				$config
	 * @param iohandler_interface	$iohandler
	 * @param update_helper			$update_helper
	 * @param string				$an602_root_path
	 */
	public function __construct(filesystem $filesystem, config $config, iohandler_interface $iohandler, update_helper $update_helper, $an602_root_path)
	{
		$this->filesystem		= $filesystem;
		$this->installer_config	= $config;
		$this->iohandler		= $iohandler;
		$this->update_helper	= $update_helper;
		$this->an602_root_path	= $an602_root_path;

		parent::__construct(false);
	}

	/**
	 * {@inheritdoc}
	 */
	public function check_requirements()
	{
		return $this->installer_config->get('do_update_files', false);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		if (!$this->installer_config->has_restart_point('check_update_files'))
		{
			$this->installer_config->create_progress_restart_point('check_update_files');
		}

		$old_path = $this->update_helper->get_path_to_old_update_files();
		$new_path = $this->update_helper->get_path_to_new_update_files();

		$update_info = $this->installer_config->get('update_info', array());
		$file_update_info = $this->installer_config->get('update_files', array());

		if (empty($update_info))
		{
			$root_path = $this->an602_root_path;

			$update_info = $this->installer_config->get('update_info_unprocessed', array());

			$file_update_info = array();
			$file_update_info['update_without_diff'] = array_diff($update_info['binary'], $update_info['deleted']);

			foreach ($file_update_info['update_without_diff'] as $key => $binary_file)
			{
				$new_file = $new_path . $binary_file;
				$file = $this->an602_root_path . $binary_file;

				if (!$this->filesystem->exists($file))
				{
					continue;
				}

				if (md5_file($file) === md5_file($new_file))
				{
					// File already up to date
					unset($file_update_info['update_without_diff'][$key]);
				}
			}

			// Remove update without diff info if empty
			if (count($file_update_info['update_without_diff']) < 1)
			{
				unset($file_update_info['update_without_diff']);
			}

			// Filter out files that are already deleted
			$file_update_info['delete'] = array_filter(
				$update_info['deleted'],
				function ($filename) use ($root_path)
				{
					return file_exists($root_path . $filename);
				}
			);

			// Remove files to delete list if empty
			if (count($file_update_info['delete']) < 1)
			{
				unset($file_update_info['delete']);
			}
		}

		$progress_count = $this->installer_config->get('file_check_progress_count', 0);
		$task_count = count($update_info['files']);
		$this->iohandler->set_task_count($task_count);
		$this->iohandler->set_progress('UPDATE_CHECK_FILES', 0);

		// Create list of default extensions that should have been added prior
		// to this update
		$default_update_extensions = [];
		foreach (\an602\install\module\update_database\task\update_extensions::$default_extensions_update as $version => $extensions)
		{
			if ($this->update_helper->an602_version_compare($update_info['version']['from'], $version, '>='))
			{
				$default_update_extensions = array_merge($default_update_extensions, $extensions);
			}
		}

		foreach ($update_info['files'] as $key => $filename)
		{
			$old_file = $old_path . $filename;
			$new_file = $new_path . $filename;
			$file = $this->an602_root_path . $filename;

			if ($this->installer_config->get_time_remaining() <= 0 || $this->installer_config->get_memory_remaining() <= 0)
			{
				// Save progress
				$this->installer_config->set('update_info', $update_info);
				$this->installer_config->set('file_check_progress_count', $progress_count);
				$this->installer_config->set('update_files', $file_update_info);

				// Request refresh
				throw new resource_limit_reached_exception();
			}

			$progress_count++;
			$this->iohandler->set_progress('UPDATE_CHECK_FILES', $progress_count);

			// Do not copy default extension again if the previous version was
			// packaged with it but it does not exist (e.g. deleted by admin)
			if (strpos($file, $this->an602_root_path . 'ext/') !== false)
			{
				$skip_file = false;
				foreach ($default_update_extensions as $ext_name)
				{
					if (strpos($file, $this->an602_root_path . 'ext/' . $ext_name) !== false &&
						!$this->filesystem->exists($this->an602_root_path . 'ext/' . $ext_name . '/composer.json'))
					{
						$skip_file = true;
						break;
					}
				}

				if ($skip_file)
				{
					continue;
				}
			}

			if (!$this->filesystem->exists($file))
			{
				$file_update_info['new'][] = $filename;
			}
			else
			{
				$file_checksum = md5_file($file);

				if ($file_checksum === md5_file($new_file))
				{
					// File already up to date
					continue;
				}
				else if ($this->filesystem->exists($old_file) && $file_checksum === md5_file($old_file))
				{
					// No need to diff the file
					$file_update_info['update_without_diff'][] = $filename;
				}
				else
				{
					$file_update_info['update_with_diff'][] = $filename;
				}
			}

			unset($update_info['files'][$key]);
		}

		$this->installer_config->set('update_files', $file_update_info);
		$this->installer_config->set('update_info', array());
	}

	/**
	 * {@inheritdoc}
	 */
	static public function get_step_count()
	{
		return 0;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_task_lang_name()
	{
		return '';
	}
}
