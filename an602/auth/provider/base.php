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

namespace an602\auth\provider;

/**
* Base authentication provider class that all other providers should implement
*/
abstract class base implements provider_interface
{
	/**
	* {@inheritdoc}
	*/
	public function init()
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function autologin()
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function acp()
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function get_acp_template($new_config)
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function get_login_data()
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function get_auth_link_data($user_id = 0)
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function logout($data, $new_session)
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function validate_session($user)
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function login_link_has_necessary_data(array $login_link_data)
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function link_account(array $link_data)
	{
		return;
	}

	/**
	* {@inheritdoc}
	*/
	public function unlink_account(array $link_data)
	{
		return;
	}
}
