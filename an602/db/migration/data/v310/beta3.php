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

class beta3 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.1.0-b3', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\beta2',
			'\an602\db\migration\data\v310\auth_provider_oauth2',
			'\an602\db\migration\data\v310\board_contact_name',
			'\an602\db\migration\data\v310\jquery_update2',
			'\an602\db\migration\data\v310\live_searches_config',
			'\an602\db\migration\data\v310\prune_shadow_topics',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.1.0-b3')),
		);
	}
}
