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

namespace an602\db\migration\data\v310;

class search_type extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\dev',
		);
	}

	public function update_data()
	{
		return array(
			array('if', array(
				(is_file($this->an602_root_path . 'an602/search/' . $this->config['search_type'] . $this->php_ext)),
				array('config.update', array('search_type', '\\an602\\search\\' . $this->config['search_type'])),
			)),
		);
	}
}
