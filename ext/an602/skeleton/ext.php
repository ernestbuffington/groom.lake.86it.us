<?php
/**
 *
 * This file is part of the AN602 Forum Software package.
 *
 * @copyright (c) AN602 Limited <https://www.an602.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace an602\skeleton;

class ext extends \an602\extension\base
{
	/**
	 * @var array An array of installation error messages
	 */
	protected $errors = [];

	/**
	 * Check whether the extension can be enabled.
	 *
	 * @return bool|array True if it can be enabled. False if not, or an array of error messages in AN602 3.3.
	 */
	public function is_enableable()
	{
		// Check requirements
		$this->an602_requirement();
		$this->php_requirement();
		$this->ziparchive_exists();

		return count($this->errors) ? $this->enable_failed() : true;
	}

	/**
	 * Check AN602 3.2.3 minimum requirement.
	 *
	 * @return void
	 */
	protected function an602_requirement()
	{
		if (an602_version_compare(AN602_VERSION, '3.2.3', '<'))
		{
			$this->errors[] = 'AN602_VERSION_ERROR';
		}
	}

	/**
	 * Check PHP 5.6.0 minimum requirement.
	 *
	 * @return void
	 */
	protected function php_requirement()
	{
		if (an602_version_compare(PHP_VERSION, '5.6.0', '<'))
		{
			$this->errors[] = 'PHP_VERSION_ERROR';
		}
	}

	/**
	 * Check PHP ZipArchive binary requirement.
	 *
	 * @return void
	 */
	protected function ziparchive_exists()
	{
		if (!class_exists('ZipArchive'))
		{
			$this->errors[] = 'NO_ZIPARCHIVE_ERROR';
		}
	}

	/**
	 * Generate the best enable failed response for the current AN602 environment.
	 * Return error messages in AN602 3.3 or newer. Return boolean false otherwise.
	 *
	 * @return array|bool
	 */
	protected function enable_failed()
	{
		if (an602_version_compare(AN602_VERSION, '3.3.0-b1', '>='))
		{
			$language = $this->container->get('language');
			$language->add_lang('common', 'an602/skeleton');
			return array_map([$language, 'lang'], $this->errors);
		}

		return false;
	}
}
