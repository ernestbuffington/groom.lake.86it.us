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

namespace an602\db\migration\data\v32x;

class update_prosilver_bitfield extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v32x\v321',
		);
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'update_bbcode_bitfield'))),
		);
	}

	public function update_bbcode_bitfield()
	{
		$sql = 'UPDATE ' . AN602_STYLES_TABLE . "
			SET bbcode_bitfield = '//g='
			WHERE style_path = 'prosilver'";
		$this->sql_query($sql);
	}
}
