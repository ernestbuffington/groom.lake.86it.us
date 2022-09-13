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

namespace an602\install\module\install_data\task;

class add_languages extends \an602\install\task_base
{
	/**
	 * @var \an602\db\driver\driver_interface
	 */
	protected $db;

	/**
	 * @var \an602\install\helper\iohandler\iohandler_interface
	 */
	protected $iohandler;

	/**
	 * @var \an602\language\language_file_helper
	 */
	protected $language_helper;

	/**
	 * Constructor
	 *
	 * @param \an602\install\helper\iohandler\iohandler_interface	$iohandler			Installer's input-output handler
	 * @param \an602\install\helper\container_factory				$container			Installer's DI container
	 * @param \an602\language\language_file_helper					$language_helper	Language file helper service
	 */
	public function __construct(\an602\install\helper\iohandler\iohandler_interface $iohandler,
								\an602\install\helper\container_factory $container,
								\an602\language\language_file_helper $language_helper)
	{
		$this->db				= $container->get('dbal.conn');
		$this->iohandler		= $iohandler;
		$this->language_helper	= $language_helper;

		parent::__construct(true);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		$this->db->sql_return_on_error(true);

		$languages = $this->language_helper->get_available_languages();
		$installed_languages = array();

		foreach ($languages as $lang_info)
		{
			$lang_pack = array(
				'lang_iso'			=> $lang_info['iso'],
				'lang_dir'			=> $lang_info['iso'],
				'lang_english_name'	=> htmlspecialchars($lang_info['name'], ENT_COMPAT),
				'lang_local_name'	=> htmlspecialchars($lang_info['local_name'], ENT_COMPAT, 'UTF-8'),
				'lang_author'		=> htmlspecialchars($lang_info['author'], ENT_COMPAT, 'UTF-8'),
			);

			$this->db->sql_query('INSERT INTO ' . AN602_LANG_TABLE . ' ' . $this->db->sql_build_array('INSERT', $lang_pack));

			$installed_languages[] = (int) $this->db->sql_nextid();
			if ($this->db->get_sql_error_triggered())
			{
				$error = $this->db->sql_error($this->db->get_sql_error_sql());
				$this->iohandler->add_error_message($error['message']);
			}
		}

		$sql = 'SELECT * FROM ' . AN602_PROFILE_FIELDS_TABLE;
		$result = $this->db->sql_query($sql);

		$insert_buffer = new \an602\db\sql_insert_buffer($this->db, AN602_PROFILE_LANG_TABLE);
		while ($row = $this->db->sql_fetchrow($result))
		{
			foreach ($installed_languages as $lang_id)
			{
				$insert_buffer->insert(array(
					'field_id'				=> $row['field_id'],
					'lang_id'				=> $lang_id,

					// Remove an602_ from field name
					'lang_name'				=> strtoupper(substr($row['field_name'], 6)),
					'lang_explain'			=> '',
					'lang_default_value'	=> '',
				));
			}
		}

		$this->db->sql_freeresult($result);

		$insert_buffer->flush();
	}

	/**
	 * {@inheritdoc}
	 */
	static public function get_step_count()
	{
		return 1;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_task_lang_name()
	{
		return 'TASK_ADD_LANGUAGES';
	}
}
