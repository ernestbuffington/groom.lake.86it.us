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

class user_notifications_table_unique_index extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v32x\user_notifications_table_remove_duplicates',
		);
	}

	public function update_schema()
	{
		return array(
			'drop_keys'			=> array(
				$this->table_prefix . 'user_notifications' => array(
					'itm_usr_mthd',
				),
			),
			'add_unique_index'  => array(
				$this->table_prefix . 'user_notifications' => array(
					'itm_usr_mthd'	=> array('item_type', 'item_id', 'user_id', 'method'),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_keys' => array(
				$this->table_prefix . 'user_notifications' => array(
					'itm_usr_mthd',
				),
			),
		);
	}
}
