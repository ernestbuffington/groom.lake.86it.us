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

namespace an602\db\migration\data\v33x;

class fix_display_unapproved_posts_config extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v330\add_display_unapproved_posts_config',
		];
	}

	public function update_data()
	{
		return [
			['config.add', ['display_unapproved_posts', 1]],
		];
	}
}