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

use an602\db\migration\migration;

class v320b2 extends migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['version'], '3.2.0-b2', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v31x\v318',
			'\an602\db\migration\data\v320\v320b1',
			'\an602\db\migration\data\v320\remote_upload_validation',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.2.0-b2')),
		);
	}
}
