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

namespace an602\db\migration\data\v31x;

class increase_size_of_emotion  extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v31x\v3110',
		);
	}

	public function update_schema()
	{
		return array(
			'change_columns' => array(
				$this->table_prefix . 'smilies' => array(
					'emotion'	=> array('VCHAR_UNI', ''),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'change_columns' => array(
				$this->table_prefix . 'smilies' => array(
					'emotion'	=> array('VCHAR_UNI:50', ''),
				),
			),
		);
	}
}