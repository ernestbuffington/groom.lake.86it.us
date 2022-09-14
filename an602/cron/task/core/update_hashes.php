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

namespace an602\cron\task\core;

/**
 * Update old hashes to the current default hashing algorithm
 *
 * It is intended to gradually update all "old" style hashes to the
 * current default hashing algorithm.
 */
class update_hashes extends \an602\cron\task\base
{
	/** @var \an602\config\config */
	protected $config;

	/** @var \an602\db\driver\driver_interface */
	protected $db;

	/** @var \an602\lock\db */
	protected $update_lock;

	/** @var \an602\passwords\manager */
	protected $passwords_manager;

	/** @var string Default hashing type */
	protected $default_type;

	/**
	 * Constructor.
	 *
	 * @param \an602\config\config $config
	 * @param \an602\db\driver\driver_interface $db
	 * @param \an602\lock\db $update_lock
	 * @param \an602\passwords\manager $passwords_manager
	 * @param array $hashing_algorithms Hashing driver
	 *			service collection
	 * @param array $defaults Default password types
	 */
	public function __construct(\an602\config\config $config, \an602\db\driver\driver_interface $db, \an602\lock\db $update_lock, \an602\passwords\manager $passwords_manager, $hashing_algorithms, $defaults)
	{
		$this->config = $config;
		$this->db = $db;
		$this->passwords_manager = $passwords_manager;
		$this->update_lock = $update_lock;

		foreach ($defaults as $type)
		{
			if ($hashing_algorithms[$type]->is_supported() && !$hashing_algorithms[$type] instanceof \an602\passwords\driver\base_native)
			{
				$this->default_type = $type;
				break;
			}
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function is_runnable()
	{
		return !$this->config['use_system_cron'];
	}

	/**
	 * {@inheritdoc}
	 */
	public function should_run()
	{
		if (!empty($this->config['update_hashes_lock']))
		{
			$last_run = explode(' ', $this->config['update_hashes_lock']);
			if ($last_run[0] + 60 >= time())
			{
				return false;
			}
		}

		return $this->config['enable_update_hashes'] && $this->config['update_hashes_last_cron'] < (time() - 60);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		if ($this->update_lock->acquire())
		{
			$sql = 'SELECT user_id, user_password
				FROM ' . USERS_TABLE . '
				WHERE user_password ' . $this->db->sql_like_expression('$H$' . $this->db->get_any_char()) . '
				OR user_password ' . $this->db->sql_like_expression('$CP$' . $this->db->get_any_char());
			$result = $this->db->sql_query_limit($sql, 20);

			$affected_rows = 0;

			while ($row = $this->db->sql_fetchrow($result))
			{
				$old_hash = preg_replace('/^\$CP\$/', '', $row['user_password']);
				$new_hash = $this->passwords_manager->hash($old_hash, array($this->default_type));

				// Increase number so we know that users were selected from the database
				$affected_rows++;

				$sql = 'UPDATE ' . USERS_TABLE . "
					SET user_password = '" . $this->db->sql_escape($new_hash) . "'
					WHERE user_id = " . (int) $row['user_id'];
				$this->db->sql_query($sql);
			}

			$this->config->set('update_hashes_last_cron', time());
			$this->update_lock->release();

			// Stop cron for good once all hashes are converted
			if ($affected_rows === 0)
			{
				$this->config->set('enable_update_hashes', '0');
			}
		}
	}
}
