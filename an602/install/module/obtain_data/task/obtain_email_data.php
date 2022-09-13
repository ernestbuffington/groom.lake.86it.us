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

namespace an602\install\module\obtain_data\task;

use an602\install\exception\user_interaction_required_exception;

class obtain_email_data extends \an602\install\task_base implements \an602\install\task_interface
{
	/**
	 * @var \an602\install\helper\config
	 */
	protected $install_config;

	/**
	 * @var \an602\install\helper\iohandler\iohandler_interface
	 */
	protected $io_handler;

	/**
	 * Constructor
	 *
	 * @param \an602\install\helper\config							$config		Installer's config
	 * @param \an602\install\helper\iohandler\iohandler_interface	$iohandler	Installer's input-output handler
	 */
	public function __construct(\an602\install\helper\config $config,
								\an602\install\helper\iohandler\iohandler_interface $iohandler)
	{
		$this->install_config	= $config;
		$this->io_handler		= $iohandler;

		parent::__construct(true);
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		// E-mail data
		$email_enable	= $this->io_handler->get_input('email_enable', true);
		$smtp_delivery	= $this->io_handler->get_input('smtp_delivery', '');
		$smtp_host		= $this->io_handler->get_input('smtp_host', '', true);
		$smtp_port		= $this->io_handler->get_input('smtp_port', '');
		$smtp_auth		= $this->io_handler->get_input('smtp_auth', '');
		$smtp_user		= $this->io_handler->get_input('smtp_user', '', true);
		$smtp_passwd	= $this->io_handler->get_input('smtp_pass', '', true);

		$auth_methods = array('PLAIN', 'LOGIN', 'CRAM-MD5', 'DIGEST-MD5', 'POP-BEFORE-SMTP');

		// Check if data is sent
		if ($this->io_handler->get_input('submit_email', false))
		{
			$this->install_config->set('email_enable', $email_enable);
			$this->install_config->set('smtp_delivery', $smtp_delivery);
			$this->install_config->set('smtp_host', $smtp_host);
			$this->install_config->set('smtp_port', $smtp_port);
			$this->install_config->set('smtp_auth', $smtp_auth);
			$this->install_config->set('smtp_user', $smtp_user);
			$this->install_config->set('smtp_pass', $smtp_passwd);
		}
		else
		{
			$auth_options = array();
			foreach ($auth_methods as $method)
			{
				$auth_options[] = array(
					'value'		=> $method,
					'label'		=> 'SMTP_' . str_replace('-', '_', $method),
					'selected'	=> false,
				);
			}

			$email_form = array(
				'email_enable' => array(
					'label'			=> 'ENABLE_EMAIL',
					'description'	=> 'ENABLE_EMAIL_EXPLAIN',
					'type'			=> 'radio',
					'options'		=> array(
						array(
							'value'		=> 1,
							'label'		=> 'ENABLE',
							'selected'	=> true,
						),
						array(
							'value'		=> 0,
							'label'		=> 'DISABLE',
							'selected'	=> false,
						),
					),
				),
				'smtp_delivery' => array(
					'label'			=> 'USE_SMTP',
					'description'	=> 'USE_SMTP_EXPLAIN',
					'type'			=> 'radio',
					'options'		=> array(
						array(
							'value'		=> 0,
							'label'		=> 'NO',
							'selected'	=> true,
						),
						array(
							'value'		=> 1,
							'label'		=> 'YES',
							'selected'	=> false,
						),
					),
				),
				'smtp_host' => array(
					'label'			=> 'SMTP_SERVER',
					'type'			=> 'text',
					'default'		=> $smtp_host,
				),
				'smtp_port' => array(
					'label'			=> 'SMTP_PORT',
					'type'			=> 'text',
					'default'		=> $smtp_port,
				),
				'smtp_auth' => array(
					'label'			=> 'SMTP_AUTH_METHOD',
					'description'	=> 'SMTP_AUTH_METHOD_EXPLAIN',
					'type'			=> 'select',
					'options'		=> $auth_options,
				),
				'smtp_user' => array(
					'label'			=> 'SMTP_USERNAME',
					'description'	=> 'SMTP_USERNAME_EXPLAIN',
					'type'			=> 'text',
					'default'		=> $smtp_user,
				),
				'smtp_pass' => array(
					'label'			=> 'SMTP_PASSWORD',
					'description'	=> 'SMTP_PASSWORD_EXPLAIN',
					'type'			=> 'password',
				),
				'submit_email' => array(
					'label'	=> 'SUBMIT',
					'type'	=> 'submit',
				),
			);

			$this->io_handler->add_user_form_group('EMAIL_CONFIG', $email_form);

			throw new user_interaction_required_exception();
		}
	}

	/**
	 * {@inheritdoc}
	 */
	static public function get_step_count()
	{
		return 0;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_task_lang_name()
	{
		return '';
	}
}
