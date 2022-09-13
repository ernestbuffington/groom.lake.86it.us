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

namespace an602\tree;

class nestedset_forum extends \an602\tree\nestedset
{
	/**
	* Construct
	*
	* @param \an602\db\driver\driver_interface	$db		Database connection
	* @param \an602\lock\db		$lock	Lock class used to lock the table when moving forums around
	* @param string				$table_name		Table name
	*/
	public function __construct(\an602\db\driver\driver_interface $db, \an602\lock\db $lock, $table_name)
	{
		parent::__construct(
			$db,
			$lock,
			$table_name,
			'FORUM_NESTEDSET_',
			'',
			array(
				'forum_id',
				'forum_name',
				'forum_type',
			),
			array(
				'item_id'		=> 'forum_id',
				'item_parents'	=> 'forum_parents',
			)
		);
	}
}
