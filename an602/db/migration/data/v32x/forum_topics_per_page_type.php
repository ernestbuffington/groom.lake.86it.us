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

class forum_topics_per_page_type extends \an602\db\migration\migration
{

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v32x\v323',
		);
	}

	public function update_schema()
	{
		return array(
			'change_columns' => array(
				$this->table_prefix . 'forums' => array(
					'forum_topics_per_page' => array('USINT', 0),
				),
			),
		);
	}

}
