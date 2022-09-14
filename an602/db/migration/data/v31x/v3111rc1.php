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

namespace an602\db\migration\data\v31x;

class v3111rc1 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.1.11-RC1', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v31x\v3110',
			'\an602\db\migration\data\v31x\add_log_time_index',
			'\an602\db\migration\data\v31x\increase_size_of_emotion',
			'\an602\db\migration\data\v31x\add_jabber_ssl_context_config_options',
			'\an602\db\migration\data\v31x\add_smtp_ssl_context_config_options',
			'\an602\db\migration\data\v31x\update_hashes',
			'\an602\db\migration\data\v31x\remove_duplicate_migrations',
			'\an602\db\migration\data\v31x\add_latest_topics_index',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.1.11-RC1')),
		);
	}
}
