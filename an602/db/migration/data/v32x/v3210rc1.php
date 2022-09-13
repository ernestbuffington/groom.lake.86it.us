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

class v3210rc1 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.2.10-RC1', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v32x\v329',
			'\an602\db\migration\data\v32x\add_plupload_config',
			'\an602\db\migration\data\v32x\font_awesome_update_cdn',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.2.10-RC1')),
		);
	}
}
