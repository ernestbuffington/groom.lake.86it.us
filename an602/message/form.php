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

namespace an602\message;

/**
* Abstract class form
*/
abstract class form
{
	/** @var \an602\auth\auth */
	protected $auth;
	/** @var \an602\config\config */
	protected $config;
	/** @var \an602\db\driver\driver_interface */
	protected $db;
	/** @var \an602\message\message */
	protected $message;
	/** @var \an602\user */
	protected $user;

	/** @var string */
	protected $an602_root_path;
	/** @var string */
	protected $phpEx;

	/** @var array */
	protected $errors = array();
	/** @var bool */
	protected $cc_sender;
	/** @var string */
	protected $body;

	/**
	* Construct
	*
	* @param \an602\auth\auth $auth
	* @param \an602\config\config $config
	* @param \an602\db\driver\driver_interface $db
	* @param \an602\user $user
	* @param string $an602_root_path
	* @param string $phpEx
	*/
	public function __construct(\an602\auth\auth $auth, \an602\config\config $config, \an602\db\driver\driver_interface $db, \an602\user $user, $an602_root_path, $phpEx)
	{
		$this->an602_root_path = $an602_root_path;
		$this->phpEx = $phpEx;
		$this->user = $user;
		$this->auth = $auth;
		$this->config = $config;
		$this->db = $db;

		$this->message = new message($config['server_name']);
		$this->message->set_sender_from_user($this->user);
	}

	/**
	* Returns the title for the email form page
	*
	* @return string
	*/
	public function get_page_title()
	{
		return $this->user->lang['SEND_EMAIL'];
	}

	/**
	* Returns the file name of the form template
	*
	* @return string
	*/
	public function get_template_file()
	{
		return 'memberlist_email.html';
	}

	/**
	* Checks whether the user is allowed to use the form
	*
	* @return false|string	Error string if not allowed, false otherwise
	*/
	public function check_allow()
	{
		if (!$this->config['email_enable'])
		{
			return 'EMAIL_DISABLED';
		}

		if (time() - $this->user->data['user_emailtime'] < $this->config['flood_interval'])
		{
			return 'FLOOD_EMAIL_LIMIT';
		}

		return false;
	}

	/**
	* Get the return link after the message has been sent
	*
	* @return string
	*/
	public function get_return_message()
	{
		return sprintf($this->user->lang['RETURN_INDEX'], '<a href="' . append_sid($this->an602_root_path . 'index.' . $this->phpEx) . '">', '</a>');
	}

	/**
	* Bind the values of the request to the form
	*
	* @param \an602\request\request_interface $request
	* @return null
	*/
	public function bind(\an602\request\request_interface $request)
	{
		$this->cc_sender = $request->is_set_post('cc_sender');
		$this->body = $request->variable('message', '', true);
	}

	/**
	* Submit form, generate the email and send it
	*
	* @param \messenger $messenger
	* @return null
	*/
	public function submit(\messenger $messenger)
	{
		if (!check_form_key('memberlist_email'))
		{
			$this->errors[] = $this->user->lang('FORM_INVALID');
		}

		if (!count($this->errors))
		{
			$sql = 'UPDATE ' . USERS_TABLE . '
				SET user_emailtime = ' . time() . '
				WHERE user_id = ' . $this->user->data['user_id'];
			$this->db->sql_query($sql);

			if ($this->cc_sender && $this->user->data['is_registered'])
			{
				$this->message->cc_sender();
			}

			$this->message->send($messenger, an602_get_board_contact($this->config, $this->phpEx));

			meta_refresh(3, append_sid($this->an602_root_path . 'index.' . $this->phpEx));
			trigger_error($this->user->lang['EMAIL_SENT'] . '<br /><br />' . $this->get_return_message());
		}
	}

	/**
	* Render the template of the form
	*
	* @param \an602\template\template $template
	* @return null
	*/
	public function render(\an602\template\template $template)
	{
		add_form_key('memberlist_email');

		$template->assign_vars(array(
			'ERROR_MESSAGE'		=> (count($this->errors)) ? implode('<br />', $this->errors) : '',
		));
	}
}
