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

namespace an602\notification\method;

use an602\notification\type\type_interface;

/**
* Email notification method class
* This class handles sending emails for notifications
*/

class email extends \an602\notification\method\messenger_base
{
	/** @var \an602\user */
	protected $user;

	/** @var \an602\config\config */
	protected $config;

	/** @var \an602\db\driver\driver_interface */
	protected $db;

	/** @var string Notification emails table */
	protected $notification_emails_table;

	/**
	 * Notification Method email Constructor
	 *
	 * @param \an602\user_loader $user_loader
	 * @param \an602\user $user
	 * @param \an602\config\config $config
	 * @param \an602\db\driver\driver_interface $db
	 * @param string $an602_root_path
	 * @param string $php_ext
	 * @param string $notification_emails_table
	 */
	public function __construct(\an602\user_loader $user_loader, \an602\user $user, \an602\config\config $config, \an602\db\driver\driver_interface $db, $an602_root_path, $php_ext, $notification_emails_table)
	{
		parent::__construct($user_loader, $an602_root_path, $php_ext);

		$this->user = $user;
		$this->config = $config;
		$this->db = $db;
		$this->notification_emails_table = $notification_emails_table;
	}

	/**
	* Get notification method name
	*
	* @return string
	*/
	public function get_type()
	{
		return 'notification.method.email';
	}

	/**
	* Is this method available for the user?
	* This is checked on the notifications options
	*
	* @param type_interface $notification_type  An optional instance of a notification type. If provided, this
	*											method additionally checks if the type provides an email template.
	* @return bool
	*/
	public function is_available(type_interface $notification_type = null)
	{
		return parent::is_available($notification_type) && $this->config['email_enable'] && !empty($this->user->data['user_email']);
	}

	/**
	* {@inheritdoc}
	*/
	public function get_notified_users($notification_type_id, array $options)
	{
		$notified_users = [];

		$sql = 'SELECT user_id
			FROM ' . $this->notification_emails_table . '
			WHERE notification_type_id = ' . (int) $notification_type_id .
			(isset($options['item_id']) ? ' AND item_id = ' . (int) $options['item_id'] : '') .
			(isset($options['item_parent_id']) ? ' AND item_parent_id = ' . (int) $options['item_parent_id'] : '') .
			(isset($options['user_id']) ? ' AND user_id = ' . (int) $options['user_id'] : '');
		$result = $this->db->sql_query($sql);
		while ($row = $this->db->sql_fetchrow($result))
		{
			$notified_users[$row['user_id']] = $row;
		}
		$this->db->sql_freeresult($result);

		return $notified_users;
	}

	/**
	* Parse the queue and notify the users
	*/
	public function notify()
	{
		$insert_buffer = new \an602\db\sql_insert_buffer($this->db, $this->notification_emails_table);

		/** @var type_interface $notification */
		foreach ($this->queue as $notification)
		{
			$data = self::clean_data($notification->get_insert_array());
			$insert_buffer->insert($data);
		}

		$insert_buffer->flush();

		return $this->notify_using_messenger(NOTIFY_EMAIL);
	}

	/**
	* {@inheritdoc}
	*/
	public function mark_notifications($notification_type_id, $item_id, $user_id, $time = false, $mark_read = true)
	{
		$sql = 'DELETE FROM ' . $this->notification_emails_table . '
			WHERE ' . ($notification_type_id !== false ? $this->db->sql_in_set('notification_type_id', $notification_type_id) : '1=1') .
			($user_id !== false ? ' AND ' . $this->db->sql_in_set('user_id', $user_id) : '') .
			($item_id !== false ? ' AND ' . $this->db->sql_in_set('item_id', $item_id) : '');
		$this->db->sql_query($sql);
	}

	/**
	* {@inheritdoc}
	*/
	public function mark_notifications_by_parent($notification_type_id, $item_parent_id, $user_id, $time = false, $mark_read = true)
	{
		$sql = 'DELETE FROM ' . $this->notification_emails_table . '
			WHERE ' . ($notification_type_id !== false ? $this->db->sql_in_set('notification_type_id', $notification_type_id) : '1=1') .
			($user_id !== false ? ' AND ' . $this->db->sql_in_set('user_id', $user_id) : '') .
			($item_parent_id !== false ? ' AND ' . $this->db->sql_in_set('item_parent_id', $item_parent_id, false, true) : '');
		$this->db->sql_query($sql);
	}

	/**
	 * Clean data to contain only what we need for email notifications table
	 *
	 * @param array $data Notification data
	 * @return array Cleaned notification data
	 */
	static public function clean_data(array $data)
	{
		$row = [
			'notification_type_id'	=> null,
			'item_id'				=> null,
			'item_parent_id'		=> null,
			'user_id'				=> null,
		];

		return array_intersect_key($data, $row);
	}
}
