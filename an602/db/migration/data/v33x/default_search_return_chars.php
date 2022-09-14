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

class default_search_return_chars extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->config->offsetExists('default_search_return_chars');
	}

	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v330\v330',
		];
	}

	public function update_data()
	{
		return [
			['config.add', ['default_search_return_chars', 300]],
		];
	}
}
