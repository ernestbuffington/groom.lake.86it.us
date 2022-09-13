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

namespace an602\report;

abstract class report_handler implements report_handler_interface
{
	/**
	 * @var \an602\db\driver\driver_interface
	 */
	protected $db;

	/**
	 * @var \an602\event\dispatcher_interface
	 */
	protected $dispatcher;

	/**
	 * @var \an602\config\config
	 */
	protected $config;

	/**
	 * @var \an602\auth\auth
	 */
	protected $auth;

	/**
	 * @var \an602\user
	 */
	protected $user;

	/**
	 * @var \an602\notification\manager
	 */
	protected $notifications;

	/**
	 * @var array
	 */
	protected $report_data;

	/**
	 * Constructor
	 *
	 * @param \an602\db\driver\driver_interface	$db
	 * @param \an602\event\dispatcher_interface	$dispatcher
	 * @param \an602\config\config				$config
	 * @param \an602\auth\auth					$auth
	 * @param \an602\user						$user
	 * @param \an602\notification\manager		$notification
	 */
	public function __construct(\an602\db\driver\driver_interface $db, \an602\event\dispatcher_interface $dispatcher, \an602\config\config $config, \an602\auth\auth $auth, \an602\user $user, \an602\notification\manager $notification)
	{
		$this->db				= $db;
		$this->dispatcher		= $dispatcher;
		$this->config			= $config;
		$this->auth				= $auth;
		$this->user				= $user;
		$this->notifications	= $notification;
		$this->report_data		= array();
	}

	/**
	 * Creates a report entity in the database
	 *
	 * @param	array	$report_data
	 * @return	int	the ID of the created entity
	 */
	protected function create_report(array $report_data)
	{
		$sql_ary = array(
			'reason_id'							=> (int) $report_data['reason_id'],
			'post_id'							=> $report_data['post_id'],
			'pm_id'								=> $report_data['pm_id'],
			'user_id'							=> (int) $this->user->data['user_id'],
			'user_notify'						=> (int) $report_data['user_notify'],
			'report_closed'						=> 0,
			'report_time'						=> (int) time(),
			'report_text'						=> (string) $report_data['report_text'],
			'reported_post_text'				=> $report_data['reported_post_text'],
			'reported_post_uid'					=> $report_data['reported_post_uid'],
			'reported_post_bitfield'			=> $report_data['reported_post_bitfield'],
			'reported_post_enable_bbcode'		=> $report_data['reported_post_enable_bbcode'],
			'reported_post_enable_smilies'		=> $report_data['reported_post_enable_smilies'],
			'reported_post_enable_magic_url'	=> $report_data['reported_post_enable_magic_url'],
		);

		$sql = 'INSERT INTO ' . AN602_REPORTS_TABLE . ' ' . $this->db->sql_build_array('INSERT', $sql_ary);
		$this->db->sql_query($sql);

		return $this->db->sql_nextid();
	}
}
