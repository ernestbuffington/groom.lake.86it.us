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

namespace an602\db\migration\data\v33x;

class profilefield_youtube_update extends \an602\db\migration\migration
{
	protected $youtube_url_matcher = 'https:\\/\\/(www\\.)?youtube\\.com\\/.+';

	public function effectively_installed()
	{
		$profile_fields = $this->table_prefix . 'profile_fields';

		$result = $this->db->sql_query(
			"SELECT field_validation
				FROM $profile_fields
				WHERE field_name = 'an602_youtube'"
		);

		$row = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		return $row['field_validation'] === $this->youtube_url_matcher;
	}

	public static function depends_on()
	{
		return ['\an602\db\migration\data\v33x\v337'];
	}

	public function update_data()
	{
		return [['custom', [[$this, 'update_youtube_profile_field']]]];
	}

	public function update_youtube_profile_field()
	{
		$profile_fields = $this->table_prefix . 'profile_fields';
		$profile_fields_data = $this->table_prefix . 'profile_fields_data';

		$field_validation = $this->db->sql_escape($this->youtube_url_matcher);

		$min_length = strlen('https://youtube.com/c/') + 1;

		$this->db->sql_query(
			"UPDATE $profile_fields SET
				field_length = '40',
				field_minlen = '$min_length',
				field_maxlen = '255',
				field_validation = '$field_validation',
				field_contact_url = '%s'
				WHERE field_name = 'an602_youtube'"
		);

		$yt_profile_field = 'pf_an602_youtube';
		$prepend_legacy_youtube_url = $this->db->sql_concatenate(
			"'https://youtube.com/user/'", $yt_profile_field
		);
		$is_not_already_youtube_url = $this->db->sql_not_like_expression(
			$this->db->get_any_char()
				. 'youtube.com/'
				. $this->db->get_any_char()
		);

		$this->db->sql_query(
			"UPDATE $profile_fields_data SET
				$yt_profile_field = $prepend_legacy_youtube_url
				WHERE $yt_profile_field <> ''
				AND $yt_profile_field $is_not_already_youtube_url"
		);
	}
}
