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

namespace an602\install\module\requirements\task;

/**
 * Checks filesystem requirements
 */
class check_filesystem extends \an602\install\task_base
{
	/**
	 * @var \an602\filesystem\filesystem_interface
	 */
	protected $filesystem;

	/**
	 * @var array
	 */
	protected $files_to_check;

	/**
	 * @var bool
	 */
	protected $tests_passed;

	/**
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * @var \an602\install\helper\iohandler\iohandler_interface
	 */
	protected $response;

	/**
	 * Constructor
	 *
	 * @param \an602\filesystem\filesystem_interface				$filesystem			filesystem handler
	 * @param \an602\install\helper\iohandler\iohandler_interface	$response			response helper
	 * @param string												$an602_root_path	relative path to AN602's root
	 * @param string												$php_ext			extension of php files
	 * @param bool													$check_config_php	Whether or not to check if config.php is writable
	 */
	public function __construct(\an602\filesystem\filesystem_interface $filesystem, \an602\install\helper\iohandler\iohandler_interface $response, $an602_root_path, $php_ext, $check_config_php = true)
	{
		parent::__construct(true);

		$this->filesystem		= $filesystem;
		$this->response			= $response;
		$this->an602_root_path	= $an602_root_path;

		$this->tests_passed = false;

		// Files/Directories to check
		// All file/directory names must be relative to AN602's root path
		$this->files_to_check = array(
			array(
				'path' => 'cache/',
				'failable' => false,
				'is_file' => false,
			),
			array(
				'path' => 'store/',
				'failable' => false,
				'is_file' => false,
			),
			array(
				'path' => 'files/',
				'failable' => false,
				'is_file' => false,
			),
			array(
				'path' => 'images/avatars/upload/',
				'failable' => true,
				'is_file' => false,
			),
		);

		if ($check_config_php)
		{
			$this->files_to_check[] = array(
				'path' => "config.$php_ext",
				'failable' => false,
				'is_file' => true,
			);
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		$this->tests_passed = true;

		// Check files/directories to be writable
		foreach ($this->files_to_check as $file)
		{
			if ($file['is_file'])
			{
				$this->check_file($file['path'], $file['failable']);
			}
			else
			{
				$this->check_dir($file['path'], $file['failable']);
			}
		}

		return $this->tests_passed;
	}

	/**
	 * Sets $this->tests_passed
	 *
	 * @param	bool	$is_passed
	 */
	protected function set_test_passed($is_passed)
	{
		// If one test failed, tests_passed should be false
		$this->tests_passed = (!$this->tests_passed) ? false : $is_passed;
	}

	/**
	 * Check if a file is readable and writable
	 *
	 * @param string	$file		Filename
	 * @param bool		$failable	Whether failing test should interrupt installation process
	 */
	protected function check_file($file, $failable = false)
	{
		$path = $this->an602_root_path . $file;
		$exists = $writable = true;

		// Try to create file if it does not exists
		if (!file_exists($path))
		{
			$fp = @fopen($path, 'w');
			@fclose($fp);
			try
			{
				$this->filesystem->an602_chmod($path,
					\an602\filesystem\filesystem_interface::CHMOD_READ | \an602\filesystem\filesystem_interface::CHMOD_WRITE
				);
				$exists = true;
			}
			catch (\an602\filesystem\exception\filesystem_exception $e)
			{
				// Do nothing
			}
		}

		if (file_exists($path))
		{
			if (!$this->filesystem->is_writable($path))
			{
				$writable = false;
			}
		}
		else
		{
			$exists = $writable = false;
		}

		$this->set_test_passed(($exists && $writable) || $failable);

		if (!($exists && $writable))
		{
			$title = ($exists) ? 'FILE_NOT_WRITABLE' : 'FILE_NOT_EXISTS';
			$lang_suffix = '_EXPLAIN';
			$lang_suffix .= ($failable) ? '_OPTIONAL' : '';
			$description = array($title . $lang_suffix, $file);

			if ($failable)
			{
				$this->response->add_warning_message($title, $description);
			}
			else
			{
				$this->response->add_error_message($title, $description);
			}
		}
	}

	/**
	 * Check if a directory is readable and writable
	 *
	 * @param string	$dir		Filename
	 * @param bool		$failable	Whether failing test should abort the installation process
	 */
	protected function check_dir($dir, $failable = false)
	{
		$path = $this->an602_root_path . $dir;
		$exists = $writable = false;

		// Try to create the directory if it does not exist
		if (!file_exists($path))
		{
			try
			{
				$this->filesystem->mkdir($path, 0777);
				$this->filesystem->an602_chmod($path,
					\an602\filesystem\filesystem_interface::CHMOD_READ | \an602\filesystem\filesystem_interface::CHMOD_WRITE
				);
				$exists = true;
			}
			catch (\an602\filesystem\exception\filesystem_exception $e)
			{
				// Do nothing
			}
		}

		// Now really check
		if (file_exists($path) && is_dir($path))
		{
			try
			{
				$exists = true;
				$this->filesystem->an602_chmod($path,
					\an602\filesystem\filesystem_interface::CHMOD_READ | \an602\filesystem\filesystem_interface::CHMOD_WRITE
				);
			}
			catch (\an602\filesystem\exception\filesystem_exception $e)
			{
				// Do nothing
			}
		}

		if ($this->filesystem->is_writable($path))
		{
			$writable = true;
		}

		$this->set_test_passed(($exists && $writable) || $failable);

		if (!($exists && $writable))
		{
			$title = ($exists) ? 'DIRECTORY_NOT_WRITABLE' : 'DIRECTORY_NOT_EXISTS';
			$lang_suffix = '_EXPLAIN';
			$lang_suffix .= ($failable) ? '_OPTIONAL' : '';
			$description = array($title . $lang_suffix, $dir);

			if ($failable)
			{
				$this->response->add_warning_message($title, $description);
			}
			else
			{
				$this->response->add_error_message($title, $description);
			}
		}
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
