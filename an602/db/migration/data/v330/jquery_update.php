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

namespace an602\db\migration\data\v330;

class jquery_update extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->config['load_jquery_url'] === '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js';
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v330\dev',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('load_jquery_url', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')),
		);
	}

}
