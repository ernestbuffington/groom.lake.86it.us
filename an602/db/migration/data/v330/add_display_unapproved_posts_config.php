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

namespace an602\db\migration\data\v330;

class add_display_unapproved_posts_config extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->config->offsetExists('display_unapproved_posts');
	}

	static public function depends_on()
	{
		return ['\an602\db\migration\data\v330\dev',];
	}

	public function update_data()
	{
		return [
			['config.add', ['display_unapproved_posts', 1]],
		];
	}
}
