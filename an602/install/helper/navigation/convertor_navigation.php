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

namespace an602\install\helper\navigation;

use an602\install\helper\install_helper;

class convertor_navigation implements navigation_interface
{
	/**
	 * @var install_helper
	 */
	private $install_helper;

	/**
	 * Constructor
	 *
	 * @param install_helper	$install_helper
	 */
	public function __construct(install_helper $install_helper)
	{
		$this->install_helper = $install_helper;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get()
	{
		if (!$this->install_helper->is_an602_installed())
		{
			return array();
		}

		return array(
			'convert'	=> array(
				'label'	=> 'CONVERT',
				'route'	=> 'an602_convert_intro',
				'order'	=> 3,
				array(
					'intro'	=> array(
						'label'	=> 'SUB_INTRO',
						'stage'	=> true,
						'order'	=> 0,
					),
					'settings'	=> array(
						'label'	=> 'STAGE_SETTINGS',
						'stage'	=> true,
						'route'	=> 'an602_convert_settings',
						'order'	=> 1,
					),
					'convert'	=> array(
						'label'	=> 'STAGE_IN_PROGRESS',
						'stage'	=> true,
						'route'	=> 'an602_convert_convert',
						'order'	=> 2,
					),
					'finish'	=> array(
						'label'	=> 'CONVERT_COMPLETE',
						'stage'	=> true,
						'route'	=> 'an602_convert_finish',
						'order'	=> 3,
					),
				),
			),
		);
	}
}
