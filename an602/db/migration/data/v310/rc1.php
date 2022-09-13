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

class rc1 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.1.0-RC1', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\beta4',
			'\an602\db\migration\data\v310\contact_admin_acp_module',
			'\an602\db\migration\data\v310\contact_admin_form',
			'\an602\db\migration\data\v310\passwords_convert_p2',
			'\an602\db\migration\data\v310\profilefield_facebook',
			'\an602\db\migration\data\v310\profilefield_googleplus',
			'\an602\db\migration\data\v310\profilefield_skype',
			'\an602\db\migration\data\v310\profilefield_twitter',
			'\an602\db\migration\data\v310\profilefield_youtube',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.1.0-RC1')),
		);
	}
}
