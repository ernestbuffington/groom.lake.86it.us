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

namespace an602\db\migration\data\v33x;

class v331 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['version'], '3.3.1', '>=');
	}

	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v33x\font_awesome_5_rollback',
			'\an602\db\migration\data\v33x\jquery_update',
			'\an602\db\migration\data\v32x\v3210',
			'\an602\db\migration\data\v33x\v331rc1',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['version', '3.3.1']],
		];
	}
}
