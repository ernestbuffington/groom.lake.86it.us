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

class profilefield_yahoo extends \an602\db\migration\profilefield_base_migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\profilefield_wlm_cleanup',
		);
	}

	protected $profilefield_name = 'an602_yahoo';

	protected $profilefield_database_type = array('VCHAR', '');

	protected $profilefield_data = array(
		'field_name'			=> 'an602_yahoo',
		'field_type'			=> 'profilefields.type.string',
		'field_ident'			=> 'an602_yahoo',
		'field_length'			=> '40',
		'field_minlen'			=> '5',
		'field_maxlen'			=> '255',
		'field_novalue'			=> '',
		'field_default_value'	=> '',
		'field_validation'		=> '.*',
		'field_required'		=> 0,
		'field_show_novalue'	=> 0,
		'field_show_on_reg'		=> 0,
		'field_show_on_pm'		=> 1,
		'field_show_on_vt'		=> 1,
		'field_show_on_ml'		=> 0,
		'field_show_profile'	=> 1,
		'field_hide'			=> 0,
		'field_no_view'			=> 0,
		'field_active'			=> 1,
		'field_is_contact'		=> 1,
		'field_contact_desc'	=> 'SEND_YIM_MESSAGE',
		'field_contact_url'		=> 'http://edit.yahoo.com/config/send_webmesg?.target=%s&amp;.src=pg',
	);

	protected $user_column_name = 'user_yim';
}
