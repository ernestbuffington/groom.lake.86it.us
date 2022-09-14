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

namespace an602\db\migration\data\v320;

class oauth_states extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array('\an602\db\migration\data\v310\auth_provider_oauth');
	}

	public function effectively_installed()
	{
		return $this->db_tools->sql_table_exists($this->table_prefix . 'oauth_states');
	}

	public function update_schema()
	{
		return array(
			'add_tables'	=> array(
				$this->table_prefix . 'oauth_states'	=> array(
					'COLUMNS' => array(
						'user_id'			=> array('UINT', 0),
						'session_id'		=> array('CHAR:32', ''),
						'provider'			=> array('VCHAR', ''),
						'oauth_state'		=> array('VCHAR', ''),
					),
					'KEYS' => array(
						'user_id'			=> array('INDEX', 'user_id'),
						'provider'			=> array('INDEX', 'provider'),
					),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'oauth_states',
			),
		);
	}
}
