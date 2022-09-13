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

class font_awesome_update_cdn_fix_depends_on extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v32x\font_awesome_update_cdn',
			'\an602\db\migration\data\v32x\add_missing_config',
		];
	}

	public function update_data()
	{
		return [
			['custom', [[$this, 'fix_depends_on']]],
		];
	}

	public function fix_depends_on()
	{
		$migration_class = '\an602\db\migration\data\v32x\font_awesome_update_cdn';
		$migration_depends_on = $migration_class::depends_on();

		$sql = 'UPDATE ' . $this->table_prefix . "migrations
			SET migration_depends_on = '" . $this->db->sql_escape(serialize($migration_depends_on)) . "'
			WHERE migration_name = ' . $migration_class . '";

		$this->db->sql_query($sql);
	}
}
