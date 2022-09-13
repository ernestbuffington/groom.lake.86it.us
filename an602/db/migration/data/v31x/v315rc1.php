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

namespace an602\db\migration\data\v31x;

class v315rc1 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.1.5-RC1', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v31x\v314',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.1.5-RC1')),
		);
	}
}
