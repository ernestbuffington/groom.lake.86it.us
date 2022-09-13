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

use bantu\IniGetWrapper\IniGetWrapper;
use an602\files\factory;
use an602\files\filespec;
use an602\language\language;
use an602\plupload\plupload;
use an602\request\request_interface;

class form extends base
{
	/** @var factory Files factory */
	protected $factory;

	/** @var language */
	protected $language;

	/** @var IniGetWrapper */
	protected $php_ini;

	/** @var plupload */
	protected $plupload;

	/** @var request_interface */
	protected $request;

	/** @var \an602\files\upload */
	protected $upload;

	/**
	 * Construct a form upload type
	 *
	 * @param factory			$factory	Files factory
	 * @param language			$language	Language class
	 * @param IniGetWrapper		$php_ini	ini_get() wrapper
	 * @param plupload			$plupload	Plupload
	 * @param request_interface	$request	Request object
	 */
	public function __construct(factory $factory, language $language, IniGetWrapper $php_ini, plupload $plupload, request_interface $request)
	{
		$this->factory = $factory;
		$this->language = $language;
		$this->php_ini = $php_ini;
		$this->plupload = $plupload;
		$this->request = $request;
	}

	/**
	 * {@inheritdoc}
	 */
	public function upload()
	{
		$args = func_get_args();
		return $this->form_upload($args[0]);
	}

	/**
	 * Form upload method
	 * Upload file from users harddisk
	 *
	 * @param string $form_name Form name assigned to the file input field (if it is an array, the key has to be specified)
	 *
	 * @return filespec $file Object "filespec" is returned, all further operations can be done with this object
	 * @access public
	 */
	protected function form_upload($form_name)
	{
		$upload = $this->request->file($form_name);
		unset($upload['local_mode']);

		$result = $this->plupload->handle_upload($form_name);
		if (is_array($result))
		{
			$upload = array_merge($upload, $result);
		}

		/** @var filespec $file */
		$file = $this->factory->get('filespec')
			->set_upload_ary($upload)
			->set_upload_namespace($this->upload);

		if ($file->init_error())
		{
			$file->error[] = '';
			return $file;
		}

		// Error array filled?
		if (isset($upload['error']))
		{
			$error = $this->upload->assign_internal_error($upload['error']);

			if ($error !== false)
			{
				$file->error[] = $error;
				return $file;
			}
		}

		// Check if empty file got uploaded (not catched by is_uploaded_file)
		if (isset($upload['size']) && $upload['size'] == 0)
		{
			$file->error[] = $this->language->lang($this->upload->error_prefix . 'EMPTY_FILEUPLOAD');
			return $file;
		}

		// PHP Upload file size check
		$file = $this->check_upload_size($file);
		if (count($file->error))
		{
			return $file;
		}

		// Not correctly uploaded
		if (!$file->is_uploaded())
		{
			$file->error[] = $this->language->lang($this->upload->error_prefix . 'NOT_UPLOADED');
			return $file;
		}

		$this->upload->common_checks($file);

		return $file;
	}
}
