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

namespace an602\install\controller;

class installer_index
{
	/**
	 * @var helper
	 */
	protected $helper;

	/**
	 * @var \an602\language\language
	 */
	protected $language;

	/**
	 * @var \an602\template\template
	 */
	protected $template;

	/**
	 * @var string
	 */
	protected $an602_root_path;

	/**
	 * Constructor
	 *
	 * @param helper 					$helper
	 * @param \an602\language\language	$language
	 * @param \an602\template\template	$template
	 * @param string					$an602_root_path
	 */
	public function __construct(helper $helper, \an602\language\language $language, \an602\template\template $template, $an602_root_path)
	{
		$this->helper = $helper;
		$this->language = $language;
		$this->template = $template;
		$this->an602_root_path = $an602_root_path;
	}

	public function handle($mode)
	{
		$this->helper->handle_language_select();

		switch ($mode)
		{
			case "intro":
				$title = $this->language->lang('INTRODUCTION_TITLE');
				$body = $this->language->lang('INTRODUCTION_BODY');
			break;
			case "support":
				$title = $this->language->lang('SUPPORT_TITLE');
				$body = $this->language->lang('SUPPORT_BODY');
			break;
			case "license":
				$title = $this->language->lang('LICENSE_TITLE');
				$body = implode("<br/>\n", file($this->an602_root_path . 'docs/LICENSE.txt'));
			break;
		}

		$this->template->assign_vars(array(
			'TITLE'	=> $title,
			'BODY'	=> $body,
		));

		return $this->helper->render('installer_main.html', $title, true);
	}
}
