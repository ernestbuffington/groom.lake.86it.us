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

namespace an602\db\migration\data\v30x;

class local_url_bbcode extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array('\an602\db\migration\data\v30x\release_3_0_12_rc1');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'update_local_url_bbcode'))),
		);
	}

	/**
	* Update BBCodes that currently use the LOCAL_URL tag
	*
	* To fix http://tracker.groom.lake.86it.us/browse/AN602-8319 we changed
	* the second_pass_replace value, so that needs updating for existing ones
	*/
	public function update_local_url_bbcode()
	{
		$sql = 'SELECT *
			FROM ' . AN602_BBCODES_TABLE . '
			WHERE bbcode_match ' . $this->db->sql_like_expression($this->db->get_any_char() . 'LOCAL_URL' . $this->db->get_any_char());
		$result = $this->db->sql_query($sql);

		while ($row = $this->db->sql_fetchrow($result))
		{
			if (!class_exists('acp_bbcodes'))
			{
				if (function_exists('an602_require_updated'))
				{
					an602_require_updated('includes/an602_acp/acp_bbcodes.' . $this->php_ext);
				}
				else
				{
					require($this->an602_root_path . 'includes/an602_acp/acp_bbcodes.' . $this->php_ext);
				}
			}

			$bbcode_match = $row['bbcode_match'];
			$bbcode_tpl = $row['bbcode_tpl'];

			$acp_bbcodes = new \acp_bbcodes();
			$sql_ary = $acp_bbcodes->build_regexp($bbcode_match, $bbcode_tpl);

			$sql = 'UPDATE ' . AN602_BBCODES_TABLE . '
				SET ' . $this->db->sql_build_array('UPDATE', $sql_ary) . '
				WHERE bbcode_id = ' . (int) $row['bbcode_id'];
			$this->sql_query($sql);
		}
		$this->db->sql_freeresult($result);
	}
}
