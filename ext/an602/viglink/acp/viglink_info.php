<?php
/**
 *
 * VigLink extension for the AN602 CMS Software package.
 *
 * @copyright (c) 2014 AN602 Limited <https://www.groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace an602\viglink\acp;

/**
 * VigLink ACP module info
 */
class viglink_info
{
	public function module()
	{
		return array(
			'filename'	=> '\an602\viglink\acp\viglink_module',
			'title'		=> 'ACP_VIGLINK_SETTINGS',
			'modes'		=> array(
				'settings'	=> array(
					'title' => 'ACP_VIGLINK_SETTINGS',
					'auth' => 'ext_an602/viglink && acl_a_board',
					'cat' => array('ACP_BOARD_CONFIGURATION')
				),
			),
		);
	}
}
