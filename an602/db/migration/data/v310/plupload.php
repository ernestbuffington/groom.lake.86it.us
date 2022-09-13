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

class plupload extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['plupload_last_gc']) &&
			isset($this->config['plupload_salt']);
	}

	static public function depends_on()
	{
		return array('\an602\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('plupload_last_gc', 0)),
			array('config.add', array('plupload_salt', unique_id())),
		);
	}
}
