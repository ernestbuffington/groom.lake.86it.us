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

namespace an602\textreparser\plugins;

class contact_admin_info extends \an602\textreparser\base
{
	/**
	* @var \an602\config\db_text
	*/
	protected $config_text;

	/**
	* Constructor
	*
	* @param \an602\config\db_text $config_text
	*/
	public function __construct(\an602\config\db_text $config_text)
	{
		$this->config_text = $config_text;
	}

	/**
	* {@inheritdoc}
	*/
	public function get_max_id()
	{
		return 1;
	}

	/**
	* {@inheritdoc}
	*/
	protected function get_records_by_range($min_id, $max_id)
	{
		$values = $this->config_text->get_array(array(
			'contact_admin_info',
			'contact_admin_info_uid',
			'contact_admin_info_flags',
		));

		return array(array(
			'id'               => 1,
			'text'             => $values['contact_admin_info'],
			'bbcode_uid'       => $values['contact_admin_info_uid'],
			'enable_bbcode'    => $values['contact_admin_info_flags'] & OPTION_FLAG_BBCODE,
			'enable_magic_url' => $values['contact_admin_info_flags'] & OPTION_FLAG_LINKS,
			'enable_smilies'   => $values['contact_admin_info_flags'] & OPTION_FLAG_SMILIES,
		));
	}

	/**
	* {@inheritdoc}
	*/
	protected function save_record(array $record)
	{
		$this->config_text->set('contact_admin_info', $record['text']);
	}
}
