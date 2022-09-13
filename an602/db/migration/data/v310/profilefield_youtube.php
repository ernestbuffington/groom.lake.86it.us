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

class profilefield_youtube extends \an602\db\migration\profilefield_base_migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\profilefield_contact_field',
			'\an602\db\migration\data\v310\profilefield_show_novalue',
			'\an602\db\migration\data\v310\profilefield_types',
		);
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'create_custom_field'))),
		);
	}

	protected $profilefield_name = 'an602_youtube';

	protected $profilefield_database_type = array('VCHAR', '');

	protected $profilefield_data = array(
		'field_name'			=> 'an602_youtube',
		'field_type'			=> 'profilefields.type.string',
		'field_ident'			=> 'an602_youtube',
		'field_length'			=> '20',
		'field_minlen'			=> '3',
		'field_maxlen'			=> '60',
		'field_novalue'			=> '',
		'field_default_value'	=> '',
		'field_validation'		=> '[a-zA-Z][\w\.,\-_]+',
		'field_required'		=> 0,
		'field_show_novalue'	=> 0,
		'field_show_on_reg'		=> 0,
		'field_show_on_pm'		=> 1,
		'field_show_on_vt'		=> 1,
		'field_show_profile'	=> 1,
		'field_hide'			=> 0,
		'field_no_view'			=> 0,
		'field_active'			=> 1,
		'field_is_contact'		=> 1,
		'field_contact_desc'	=> 'VIEW_YOUTUBE_CHANNEL',
		'field_contact_url'		=> 'http://youtube.com/user/%s',
	);
}
