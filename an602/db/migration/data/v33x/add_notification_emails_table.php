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

namespace an602\db\migration\data\v33x;

class add_notification_emails_table extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v330\v330',
		];
	}

	public function effectively_installed()
	{
		return $this->db_tools->sql_table_exists($this->table_prefix . 'notification_emails');
	}

	public function update_schema()
	{
		return [
			'add_tables'	=> [
				$this->table_prefix . 'notification_emails' => [
					'COLUMNS'	=> [
						'notification_type_id'	=> ['USINT', 0],
						'item_id'				=> ['ULINT', 0],
						'item_parent_id'		=> ['ULINT', 0],
						'user_id'				=> ['ULINT', 0],
					],
					'PRIMARY_KEY' => ['notification_type_id', 'item_id', 'item_parent_id', 'user_id'],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_tables' => [$this->table_prefix . 'notification_emails'],
		];
	}
}
