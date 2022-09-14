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

namespace an602\db\migration\data\v330;

class reset_password extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v330\dev',
		];
	}

	public function update_schema()
	{
		return [
			'add_columns' => [
				$this->table_prefix . 'users' => [
					'reset_token'				=> ['VCHAR:64', '', 'after' => 'user_actkey'],
					'reset_token_expiration'	=> ['TIMESTAMP', 0, 'after' => 'reset_token'],
				],
			],
		];
	}

	public function revert_schema()
	{
		return [
			'drop_columns' => [
				$this->table_prefix . 'users' => [
					'reset_token',
					'reset_token_expiration',
				],
			],
		];
	}
}
