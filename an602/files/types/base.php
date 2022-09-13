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

namespace an602\files\types;

abstract class base implements type_interface
{
	/** @var \an602\language\language */
	protected $language;

	/** @var \bantu\IniGetWrapper\IniGetWrapper */
	protected $php_ini;

	/** @var \an602\files\upload */
	protected $upload;

	/**
	 * Check if upload exceeds maximum file size
	 *
	 * @param \an602\files\filespec $file Filespec object
	 *
	 * @return \an602\files\filespec Returns same filespec instance
	 */
	public function check_upload_size($file)
	{
		// PHP Upload filesize exceeded
		if ($file->get('filename') == 'none')
		{
			$max_filesize = $this->php_ini->getString('upload_max_filesize');
			$unit = 'MB';

			if (!empty($max_filesize))
			{
				$unit = strtolower(substr($max_filesize, -1, 1));
				$max_filesize = (int) $max_filesize;

				$unit = ($unit == 'k') ? 'KB' : (($unit == 'g') ? 'GB' : 'MB');
			}

			$file->error[] = (empty($max_filesize)) ? $this->language->lang($this->upload->error_prefix . 'PHP_SIZE_NA') : $this->language->lang($this->upload->error_prefix . 'PHP_SIZE_OVERRUN', $max_filesize, $this->language->lang($unit));
		}

		return $file;
	}

	/**
	 * {@inheritdoc}
	 */
	public function set_upload(\an602\files\upload $upload)
	{
		$this->upload = $upload;

		return $this;
	}
}
