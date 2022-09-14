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

class font_awesome_update extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['load_font_awesome_url']);
	}

	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v320\dev',
		];
	}

	public function update_data()
	{
		return [
			['config.add', ['load_font_awesome_url', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css']],
		];
	}
}
