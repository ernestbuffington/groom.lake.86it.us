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

namespace an602\db\migration\data\v33x;

class v333 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['version'], '3.3.3', '>=');
	}

	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v33x\v333rc1',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['version', '3.3.3']],
		];
	}
}
