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

namespace an602\db\migration\data\v310;

class rename_too_long_indexes extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array('\an602\db\migration\data\v30x\release_3_0_0');
	}

	public function update_schema()
	{
		return array(
			'drop_keys' => array(
				$this->table_prefix . 'search_wordmatch' => array(
					'unq_mtch',
				),
			),
			'add_unique_index' => array(
				$this->table_prefix . 'search_wordmatch' => array(
					'un_mtch'	=> array('word_id', 'post_id', 'title_match'),
				),
			),
		);
	}
}
