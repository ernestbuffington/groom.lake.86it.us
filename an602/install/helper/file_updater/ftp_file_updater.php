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

namespace an602\install\helper\file_updater;

use an602\install\helper\update_helper;

/**
 * File updater for FTP updates
 */
class ftp_file_updater implements file_updater_interface
{
	/**
	 * @var \transfer
	 */
	protected $transfer;

	/**
	 * @var update_helper
	 */
	protected $update_helper;

	/**
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * @var string
	 */
	protected $php_ext;

	/**
	 * Constructor
	 *
	 * @param update_helper	$update_helper
	 * @param string		$an602_root_path
	 * @param string		$php_ext
	 */
	public function __construct(update_helper $update_helper, $an602_root_path, $php_ext)
	{
		$this->transfer			= null;
		$this->update_helper	= $update_helper;
		$this->an602_root_path	= $an602_root_path;
		$this->php_ext			= $php_ext;
	}

	/**
	 * Initialize FTP connection
	 *
	 * @param string	$method
	 * @param string	$host
	 * @param string	$user
	 * @param string	$pass
	 * @param string	$path
	 * @param int		$port
	 * @param int		$timeout
	 */
	public function init($method, $host, $user, $pass, $path, $port, $timeout)
	{
		$this->update_helper->include_file('includes/an602_functions_transfer.' . $this->php_ext);
		$this->transfer = new $method($host, $user, $pass, $path, $port, $timeout);
		$this->transfer->open_session();
	}

	/**
	 * Close FTP session
	 */
	public function close()
	{
		$this->transfer->close_session();
	}

	/**
	 * {@inheritdoc}
	 */
	public function delete_file($path_to_file)
	{
		$this->transfer->delete_file($path_to_file);
	}

	/**
	 * {@inheritdoc}
	 */
	public function create_new_file($path_to_file_to_create, $source, $create_from_content = false)
	{
		$dirname = dirname($path_to_file_to_create);

		if ($dirname && !file_exists($this->an602_root_path . $dirname))
		{
			$this->transfer->make_dir($dirname);
		}

		if ($create_from_content)
		{
			$this->transfer->write_file($path_to_file_to_create, $source);
		}
		else
		{
			$this->transfer->copy_file($path_to_file_to_create, $source);
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function update_file($path_to_file_to_update, $source, $create_from_content = false)
	{
		if ($create_from_content)
		{
			$this->transfer->write_file($path_to_file_to_update, $source);
		}
		else
		{
			$this->transfer->copy_file($path_to_file_to_update, $source);
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_method_name()
	{
		return 'ftp';
	}
}
