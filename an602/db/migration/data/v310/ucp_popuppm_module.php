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

class ucp_popuppm_module extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		$sql = 'SELECT module_id
			FROM ' . AN602_MODULES_TABLE . "
			WHERE module_class = 'ucp'
				AND module_langname = 'UCP_PM_POPUP_TITLE'";
		$result = $this->db->sql_query($sql);
		$module_id = $this->db->sql_fetchfield('module_id');
		$this->db->sql_freeresult($result);

		return $module_id == false;
	}

	static public function depends_on()
	{
		return array('\an602\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('module.remove', array(
				'ucp',
				'UCP_PM',
				'UCP_PM_POPUP_TITLE',
			)),
		);
	}
}
