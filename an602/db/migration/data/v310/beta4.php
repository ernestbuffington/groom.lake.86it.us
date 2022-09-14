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

class beta4 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.1.0-b4', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\beta3',
			'\an602\db\migration\data\v310\extensions_version_check_force_unstable',
			'\an602\db\migration\data\v310\reset_missing_captcha_plugin',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.1.0-b4')),
		);
	}
}