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

namespace an602\db\output_handler;

class log_wrapper_migrator_output_handler implements migrator_output_handler_interface
{
	/**
	 * Language object.
	 *
	 * @var \an602\language\language
	 */
	protected $language;

	/**
	 * A migrator output handler
	 *
	 * @var migrator_output_handler_interface
	 */
	protected $migrator;

	/**
	 * Log file handle
	 * @var resource
	 */
	protected $file_handle = false;

	/**
	 * @var \an602\filesystem\filesystem_interface
	 */
	protected $filesystem;

	/**
	 * Constructor
	 *
	 * @param \an602\language\language					$language	Language object
	 * @param migrator_output_handler_interface			$migrator	Migrator output handler
	 * @param string									$log_file	File to log to
	 * @param \an602\filesystem\filesystem_interface	$filesystem	AN602 filesystem object
	 */
	public function __construct(\an602\language\language $language, migrator_output_handler_interface $migrator, $log_file, \an602\filesystem\filesystem_interface $filesystem)
	{
		$this->language = $language;
		$this->migrator = $migrator;
		$this->filesystem = $filesystem;
		$this->file_open($log_file);
	}

	/**
	 * Open file for logging
	 *
	 * @param string $file File to open
	 */
	protected function file_open($file)
	{
		if ($this->filesystem->is_writable(dirname($file)))
		{
			$this->file_handle = fopen($file, 'w');
		}
		else
		{
			throw new \RuntimeException('Unable to write to migrator log file');
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function write($message, $verbosity)
	{
		$this->migrator->write($message, $verbosity);

		if ($this->file_handle !== false)
		{

			$translated_message = $this->language->lang_array(array_shift($message), $message);

			if ($verbosity <= migrator_output_handler_interface::VERBOSITY_NORMAL)
			{
				$translated_message = '[INFO] ' . $translated_message;
			}
			else
			{
				$translated_message = '[DEBUG] ' . $translated_message;
			}

			fwrite($this->file_handle, $translated_message . "\n");
			fflush($this->file_handle);
		}
	}
}
