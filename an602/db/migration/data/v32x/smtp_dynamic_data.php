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

class smtp_dynamic_data extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v32x\v326rc1',
		);
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'set_smtp_dynamic'))),
		);
	}

	public function set_smtp_dynamic()
	{
		$smtp_auth_entries = [
			'smtp_password',
			'smtp_username',
		];
		$this->sql_query('UPDATE ' . AN602_CONFIG_TABLE . '
			SET is_dynamic = 1
			WHERE ' . $this->db->sql_in_set('config_name', $smtp_auth_entries));
	}
}
