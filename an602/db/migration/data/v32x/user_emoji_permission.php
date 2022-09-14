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

class user_emoji_permission extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		$sql = 'SELECT auth_option_id
			FROM ' . ACL_OPTIONS_TABLE . "
			WHERE auth_option = 'u_emoji'";
		$result = $this->db->sql_query($sql);
		$auth_option_id = $this->db->sql_fetchfield('auth_option_id');
		$this->db->sql_freeresult($result);

		return $auth_option_id !== false;
	}

	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v32x\v329rc1',
		];
	}

	public function update_data()
	{
		return [
			['permission.add', ['u_emoji']],
			['permission.permission_set', ['REGISTERED', 'u_emoji', 'group']],
		];
	}
}
