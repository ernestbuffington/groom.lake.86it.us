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

class v336rc1 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['version'], '3.3.6-RC1', '>=');
	}

	public static function depends_on()
	{
		return [
			'\an602\db\migration\data\v33x\remove_orphaned_roles',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['version', '3.3.6-RC1']],
		];
	}
}
