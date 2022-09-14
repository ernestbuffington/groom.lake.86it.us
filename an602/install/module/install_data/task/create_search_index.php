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

namespace an602\install\module\install_data\task;

use an602\auth\auth;
use an602\db\driver\driver_interface;
use an602\event\dispatcher;
use an602\config\config;
use an602\install\helper\container_factory;
use an602\language\language;
use an602\search\fulltext_native;
use an602\user;

class create_search_index extends \an602\install\task_base
{
	/**
	 * @var auth
	 */
	protected $auth;

	/**
	 * @var config
	 */
	protected $config;

	/**
	 * @var driver_interface
	 */
	protected $db;

	/**
	 * @var dispatcher
	 */
	protected $an602_dispatcher;

	/**
	 * @var language
	 */
	protected $language;

	/**
	 * @var user
	 */
	protected $user;

	/**
	 * @var string AN602 root path
	 */
	protected $an602_root_path;

	/**
	 * @var string PHP file extension
	 */
	protected $php_ext;

	/**
	 * Constructor
	 *
	 * @param config				$config				AN602 config
	 * @param container_factory		$container			Installer's DI container
	 * @param string				$an602_root_path	AN602 root path
	 * @param string				$php_ext			PHP file extension
	 */
	public function __construct(config $config, container_factory $container,
								$an602_root_path, $php_ext)
	{
		$this->auth				= $container->get('auth');
		$this->config			= $config;
		$this->db				= $container->get('dbal.conn');
		$this->language			= $container->get('language');
		$this->an602_dispatcher = $container->get('dispatcher');
		$this->user 			= $container->get('user');
		$this->an602_root_path	= $an602_root_path;
		$this->php_ext			= $php_ext;

		parent::__construct(true);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		// Make sure fulltext native load update is set
		$this->config->set('fulltext_native_load_upd', 1);

		$error = false;
		$search = new fulltext_native(
			$error,
			$this->an602_root_path,
			$this->php_ext,
			$this->auth,
			$this->config,
			$this->db,
			$this->user,
			$this->an602_dispatcher
		);

		$sql = 'SELECT post_id, post_subject, post_text, poster_id, forum_id
			FROM ' . POSTS_TABLE;
		$result = $this->db->sql_query($sql);

		while ($row = $this->db->sql_fetchrow($result))
		{
			$search->index('post', $row['post_id'], $row['post_text'], $row['post_subject'], $row['poster_id'], $row['forum_id']);
		}
		$this->db->sql_freeresult($result);
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
		return 'TASK_CREATE_SEARCH_INDEX';
	}
}
