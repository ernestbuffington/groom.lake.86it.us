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

class main_navigation implements navigation_interface
{
	/**
	 * {@inheritdoc}
	 */
	public function get()
	{
		return array(
			'overview'	=> array(
				'label'	=> 'MENU_OVERVIEW',
				'route'	=> 'an602_installer_index',
				'order'	=> 0,
				array(
					'introduction'	=> array(
						'label'	=> 'MENU_INTRO',
						'route'	=> 'an602_installer_index',
						'order'	=> 0,
					),
					'support'	=> array(
						'label'	=> 'MENU_SUPPORT',
						'route'	=> 'an602_installer_support',
						'order'	=> 1,
					),
					'license'	=> array(
						'label'	=> 'MENU_LICENSE',
						'route'	=> 'an602_installer_license',
						'order'	=> 2,
					),
				),
			),
		);
	}
}
