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

class rc5 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.1.0-RC5', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\rc4',
			'\an602\db\migration\data\v310\profilefield_field_validation_length',
			'\an602\db\migration\data\v310\remove_acp_styles_cache',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.1.0-RC5')),
		);
	}
}
