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

namespace an602\textreparser\plugins;

class forum_description extends \an602\textreparser\row_based_plugin
{
	/**
	* {@inheritdoc}
	*/
	public function get_columns()
	{
		return array(
			'id'         => 'forum_id',
			'text'       => 'forum_desc',
			'bbcode_uid' => 'forum_desc_uid',
			'options'    => 'forum_desc_options',
		);
	}
}