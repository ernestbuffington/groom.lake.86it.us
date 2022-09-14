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

use an602\db\migration\migration_interface;
use an602\db\migrator;

class add_missing_config extends \an602\db\migration\container_aware_migration
{
	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v32x\v329',
		];
	}

	public function update_data()
	{
		$migration_classes = [
			'\an602\db\migration\data\v30x\release_3_0_3_rc1',
			'\an602\db\migration\data\v30x\release_3_0_6_rc1',
			'\an602\db\migration\data\v31x\add_jabber_ssl_context_config_options',
			'\an602\db\migration\data\v31x\add_smtp_ssl_context_config_options',
			'\an602\db\migration\data\v31x\update_hashes',
			'\an602\db\migration\data\v320\font_awesome_update',
			'\an602\db\migration\data\v320\text_reparser',
			'\an602\db\migration\data\v32x\cookie_notice_p2',
		];

		/** @var migrator $migrator */
		$migrator = $this->container->get('migrator');

		$update_data = [];

		foreach ($migration_classes as $migration_class)
		{
			/** @var migration_interface $migration */
			$migration = $migrator->get_migration($migration_class);

			$migration_update_data = $migration->update_data();

			foreach ($migration_update_data as $entry)
			{
				if ($entry[0] == 'config.add')
				{
					$update_data[] = $entry;
				}
			}
		}

		return $update_data;
	}
}
