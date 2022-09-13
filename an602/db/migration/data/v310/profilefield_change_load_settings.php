<?php
/**
*
* This file is part of the AN602 CMS Software package.
*
* @copyright (c) PHP-AN602 <https://groom.lake.86it.us>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace an602\db\migration\data\v310;

class profilefield_change_load_settings extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\profilefield_aol_cleanup',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('load_cpf_memberlist', '1')),
			array('config.update', array('load_cpf_pm', '1')),
			array('config.update', array('load_cpf_viewprofile', '1')),
			array('config.update', array('load_cpf_viewtopic', '1')),
		);
	}
}
