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

namespace an602\help\controller;

/**
 * BBCode help page
 */
abstract class controller
{
	/** @var \an602\controller\helper */
	protected $helper;

	/** @var \an602\help\manager */
	protected $manager;

	/** @var \an602\template\template */
	protected $template;

	/** @var \an602\language\language */
	protected $language;

	/** @var string */
	protected $root_path;

	/** @var string */
	protected $php_ext;

	/**
	 * Constructor
	 *
	 * @param \an602\controller\helper	$helper
	 * @param \an602\help\manager		$manager
	 * @param \an602\template\template	$template
	 * @param \an602\language\language	$language
	 * @param string					$root_path
	 * @param string					$php_ext
	 */
	public function __construct(\an602\controller\helper $helper, \an602\help\manager $manager, \an602\template\template $template, \an602\language\language $language, $root_path, $php_ext)
	{
		$this->helper = $helper;
		$this->manager = $manager;
		$this->template = $template;
		$this->language = $language;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;
	}

	/**
	 * @return string
	 */
	abstract protected function display();

	public function handle()
	{
		$title = $this->display();

		$this->template->assign_vars(array(
			'L_FAQ_TITLE'	=> $title,
			'S_IN_FAQ'		=> true,
		));

		make_jumpbox(append_sid("{$this->root_path}viewforum.{$this->php_ext}"));
		return $this->helper->render('faq_body.html', $title);
	}
}
