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

class v320a1 extends \an602\db\migration\container_aware_migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.2.0-a1', '>=');
	}

	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v320\dev',
			'\an602\db\migration\data\v320\allowed_schemes_links',
			'\an602\db\migration\data\v320\announce_global_permission',
			'\an602\db\migration\data\v320\remove_profilefield_wlm',
			'\an602\db\migration\data\v320\font_awesome_update',
			'\an602\db\migration\data\v320\icons_alt',
			'\an602\db\migration\data\v320\log_post_id',
			'\an602\db\migration\data\v320\remove_outdated_media',
			'\an602\db\migration\data\v320\notifications_board',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['version', '3.2.0-a1']],
		];
	}
}
