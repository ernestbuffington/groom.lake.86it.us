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

use an602\db\migration\migration;

class jquery_update_v2 extends migration
{
	public function effectively_installed()
	{
		return $this->config['load_jquery_url'] === '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js';
	}

	public static function depends_on()
	{
		return ['\an602\db\migration\data\v33x\v334'];
	}

	public function update_data()
	{
		return [
			['config.update', ['load_jquery_url', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js']],
		];
	}
}
