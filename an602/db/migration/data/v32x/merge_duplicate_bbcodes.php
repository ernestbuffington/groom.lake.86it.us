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

namespace an602\db\migration\data\v32x;

class merge_duplicate_bbcodes extends \an602\db\migration\container_aware_migration
{
	public function update_data()
	{
		return [
			['custom', [[$this, 'update_bbcodes_table']]],
		];
	}

	public function update_bbcodes_table()
	{
		$sql     = 'SELECT bbcode_id, bbcode_tag, bbcode_helpline, bbcode_match, bbcode_tpl FROM ' . AN602_BBCODES_TABLE;
		$result  = $this->sql_query($sql);
		$bbcodes = [];
		while ($row = $this->db->sql_fetchrow($result))
		{
			$variant = (substr($row['bbcode_tag'], -1) === '=') ? 'with': 'without';
			$bbcode_name = strtolower(rtrim($row['bbcode_tag'], '='));
			$bbcodes[$bbcode_name][$variant] = $row;
		}
		$this->db->sql_freeresult($result);

		foreach ($bbcodes as $bbcode_name => $variants)
		{
			if (count($variants) === 2)
			{
				$this->merge_bbcodes($variants['without'], $variants['with']);
			}
		}
	}

	protected function merge_bbcodes(array $without, array $with)
	{
		try
		{
			$merged = $this->container->get('text_formatter.s9e.bbcode_merger')->merge_bbcodes(
				[
					'usage'    => $without['bbcode_match'],
					'template' => $without['bbcode_tpl']
				],
				[
					'usage'    => $with['bbcode_match'],
					'template' => $with['bbcode_tpl']
				]
			);
		}
		catch (\Exception $e)
		{
			// Ignore the pair and move on. The BBCodes would have to be fixed manually
			return;
		}

		$bbcode_data = [
			'bbcode_tag'      => $without['bbcode_tag'],
			'bbcode_helpline' => $without['bbcode_helpline'] . ' | ' . $with['bbcode_helpline'],
			'bbcode_match'    => $merged['usage'],
			'bbcode_tpl'      => $merged['template']
		];

		$sql = 'UPDATE ' . AN602_BBCODES_TABLE . '
			SET ' . $this->db->sql_build_array('UPDATE', $bbcode_data) . '
			WHERE bbcode_id = ' . (int) $without['bbcode_id'];
		$this->sql_query($sql);

		$sql = 'DELETE FROM ' . AN602_BBCODES_TABLE . '
			WHERE bbcode_id = ' . (int) $with['bbcode_id'];
		$this->sql_query($sql);
	}
}
