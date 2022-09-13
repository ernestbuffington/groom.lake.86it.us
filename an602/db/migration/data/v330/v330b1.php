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

class v330b1 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['version'], '3.3.0-b1', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v330\jquery_update',
			'\an602\db\migration\data\v330\reset_password',
			'\an602\db\migration\data\v330\remove_attachment_flash',
			'\an602\db\migration\data\v330\remove_max_pass_chars',
			'\an602\db\migration\data\v32x\v328',
			'\an602\db\migration\data\v330\dev',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.3.0-b1')),
		);
	}
}
