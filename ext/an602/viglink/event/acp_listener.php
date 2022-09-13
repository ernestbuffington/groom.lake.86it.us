<?php
/**
 *
 * VigLink extension for the AN602 CMS Software package.
 *
 * @copyright (c) 2014 PHP-AN602 <https://groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace an602\viglink\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * ACP Event listener
 */
class acp_listener implements EventSubscriberInterface
{
	/** @var \an602\config\config $config Config object */
	protected $config;

	/** @var \an602\request\request_interface $request Request interface */
	protected $request;

	/** @var \an602\template\template $template Template object */
	protected $template;

	/** @var \an602\language\language $language Language object */
	protected $language;

	/** @var \an602\user $user User object */
	protected $user;

	/** @var \an602\viglink\acp\viglink_helper $helper VigLink helper object */
	protected $helper;

	/** @var string $an602_root_path AN602 root path */
	protected $an602_root_path;

	/** @var string $php_ext PHP file extension */
	protected $php_ext;

	/**
	 * Constructor
	 *
	 * @param \an602\config\config $config
	 * @param \an602\language\language $language
	 * @param \an602\request\request_interface $request AN602 request
	 * @param \an602\template\template $template
	 * @param \an602\user $user User object
	 * @param \an602\viglink\acp\viglink_helper $viglink_helper Viglink helper object
	 * @param string $an602_root_path AN602 root path
	 * @param string $php_ext PHP file extension
	 */
	public function __construct(\an602\config\config $config, \an602\language\language $language, \an602\request\request_interface $request,
								\an602\template\template $template, \an602\user $user, \an602\viglink\acp\viglink_helper $viglink_helper,
								$an602_root_path, $php_ext)
	{
		$this->config = $config;
		$this->language = $language;
		$this->request = $request;
		$this->template = $template;
		$this->user = $user;
		$this->helper = $viglink_helper;
		$this->an602_root_path = $an602_root_path;
		$this->php_ext = $php_ext;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function getSubscribedEvents()
	{
		return array(
			'core.acp_main_notice'				=> 'set_viglink_services',
			'core.acp_help_an602_submit_before'	=> 'update_viglink_settings',
		);
	}

	/**
	 * Check if AN602 is allowing VigLink services to run.
	 *
	 * VigLink will be disabled if AN602 is disallowing it to run.
	 *
	 * @return void
	 */
	public function set_viglink_services()
	{
		try
		{
			$this->helper->set_viglink_services();
		}
		catch (\RuntimeException $e)
		{
			$this->helper->log_viglink_error($e->getMessage());
		}

		// Only redirect once every 24 hours
		if (empty($this->config['viglink_ask_admin']) && $this->user->data['user_type'] == USER_FOUNDER && (time() - intval($this->config['viglink_ask_admin_last']) > 86400))
		{
			$this->config->set('viglink_ask_admin_last', time());
			redirect(append_sid($this->an602_root_path . 'admin/adm/index.' . $this->php_ext, 'i=acp_help_an602&mode=help_an602'));
		}
	}

	/**
	 * Update VigLink settings
	 *
	 * @param array $event Event data
	 *
	 * @return void
	 */
	public function update_viglink_settings($event)
	{
		$this->language->add_lang('viglink_module_acp', 'an602/viglink');

		$viglink_setting = $this->request->variable('enable-viglink', false);

		if (!empty($event['submit']))
		{
			$this->config->set('viglink_enabled', $viglink_setting);
			if (empty($this->config['viglink_ask_admin']))
			{
				$this->config->set('viglink_ask_admin', time());
			}
		}

		$this->template->assign_vars(array(
			'S_ENABLE_VIGLINK'				=> !empty($this->config['viglink_enabled']) || !$this->config['help_send_statistics_time'],
			'S_VIGLINK_ASK_ADMIN'			=> empty($this->config['viglink_ask_admin']) && $this->user->data['user_type'] == USER_FOUNDER,
			'ACP_VIGLINK_SETTINGS_CHANGE'	=> $this->language->lang('ACP_VIGLINK_SETTINGS_CHANGE', append_sid($this->an602_root_path . 'admin/adm/index.' . $this->php_ext, 'i=-an602-viglink-acp-viglink_module&mode=settings')),
		));
	}
}
