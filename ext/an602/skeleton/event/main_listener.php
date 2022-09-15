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

namespace an602\skeleton\event;

/**
 * @ignore
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class main_listener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'	=> 'load_language_on_setup',
			'core.page_header'	=> 'add_page_header_link',
		];
	}

	/* @var \an602\controller\helper */
	protected $helper;

	/* @var \an602\template\template */
	protected $template;

	/**
	 * Constructor
	 *
	 * @param \an602\controller\helper $helper   Controller helper object
	 * @param \an602\template\template $template Template object
	 */
	public function __construct(\an602\controller\helper $helper, \an602\template\template $template)
	{
		$this->helper = $helper;
		$this->template = $template;
	}

	/**
	 * Load language files
	 *
	 * @param \an602\event\data $event
	 */
	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = [
			'ext_name' => 'an602/skeleton',
			'lang_set' => 'common',
		];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	/**
	 * Add the page header link
	 */
	public function add_page_header_link()
	{
		$this->template->assign_var('U_AN602_SKELETON_EXT', $this->helper->route('an602_skeleton_controller'));
	}
}
