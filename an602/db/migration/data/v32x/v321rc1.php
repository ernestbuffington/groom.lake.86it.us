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

namespace an602\db\migration\data\v32x;

class v321rc1 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.2.1-RC1', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v320\v320',
			'\an602\db\migration\data\v31x\v3111rc1',
			'\an602\db\migration\data\v32x\load_user_activity_limit',
			'\an602\db\migration\data\v32x\user_notifications_table_unique_index',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.2.1-RC1')),
		);
	}
}