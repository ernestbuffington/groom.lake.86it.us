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

namespace an602\db\migration\data\v32x;

class cookie_notice_p2 extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v320\v320',
		);
	}

	public function effectively_installed()
	{
		return isset($this->config['cookie_notice']);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('cookie_notice', '0')),
		);
	}
}
