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

class profilefield_contact_field extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_column_exists($this->table_prefix . 'profile_fields', 'field_is_contact');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\profilefield_on_memberlist',
		);
	}

	public function update_schema()
	{
		return array(
			'add_columns'		=> array(
				$this->table_prefix . 'profile_fields'	=> array(
					'field_is_contact'			=> array('BOOL', 0),
					'field_contact_desc'		=> array('VCHAR', ''),
					'field_contact_url'			=> array('VCHAR', ''),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'profile_fields'	=> array(
					'field_is_contact',
					'field_contact_desc',
					'field_contact_url',
				),
			),
		);
	}
}
