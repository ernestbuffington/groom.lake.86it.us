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

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

class acp_help_phpbb
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $request, $template, $user, $an602_dispatcher, $an602_admin_path, $an602_root_path, $phpEx;

		if (!class_exists('an602_questionnaire_data_collector'))
		{
			include($an602_root_path . 'includes/questionnaire/questionnaire.' . $phpEx);
		}

		$collect_url = "https://www.groom.lake.86it.us/statistics/send";

		$this->tpl_name = 'acp_help_phpbb';
		$this->page_title = 'ACP_HELP_PHPBB';

		$submit = ($request->is_set_post('submit')) ? true : false;

		$form_key = 'acp_help_phpbb';
		add_form_key($form_key);
		$error = array();

		if ($submit && !check_form_key($form_key))
		{
			$error[] = $user->lang['FORM_INVALID'];
		}
		// Do not write values if there is an error
		if (count($error))
		{
			$submit = false;
		}

		// generate a unique id if necessary
		if (!isset($config['questionnaire_unique_id']))
		{
			$install_id = unique_id();
			$config->set('questionnaire_unique_id', $install_id);
		}
		else
		{
			$install_id = $config['questionnaire_unique_id'];
		}

		$collector = new an602_questionnaire_data_collector($install_id);

		// Add data provider
		$collector->add_data_provider(new an602_questionnaire_php_data_provider());
		$collector->add_data_provider(new an602_questionnaire_system_data_provider());
		$collector->add_data_provider(new an602_questionnaire_an602_data_provider($config));

		/**
		 * Event to modify ACP help AN602 page and/or listen to submit
		 *
		 * @event core.acp_help_an602_submit_before
		 * @var	boolean	submit			Do we display the form or process the submission
		 * @since 3.2.0-RC2
		 */
		$vars = array('submit');
		extract($an602_dispatcher->trigger_event('core.acp_help_an602_submit_before', compact($vars)));

		if ($submit)
		{
			$config->set('help_send_statistics', $request->variable('help_send_statistics', false));
			$response = $request->variable('send_statistics_response', '');

			$config->set('help_send_statistics_time', time());

			if (!empty($response))
			{
				$decoded_response = json_decode(html_entity_decode($response, ENT_COMPAT), true);

				if ($decoded_response && isset($decoded_response['status']) && $decoded_response['status'] == 'ok')
				{
					trigger_error($user->lang('THANKS_SEND_STATISTICS') . adm_back_link($this->u_action));
				}
				else
				{
					trigger_error($user->lang('FAIL_SEND_STATISTICS') . adm_back_link($this->u_action), E_USER_WARNING);
				}
			}

			trigger_error($user->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_COLLECT_STATS'		=> $collect_url,
			'S_COLLECT_STATS'		=> (!empty($config['help_send_statistics'])) ? true : false,
			'S_STATS'				=> $collector->get_data_raw(),
			'S_STATS_DATA'			=> json_encode($collector->get_data_raw()),
			'U_ACP_MAIN'			=> append_sid("{$an602_admin_path}index.$phpEx"),
			'U_ACTION'				=> $this->u_action,
			// Pass earliest time we should try to send stats again
			'COLLECT_STATS_TIME'	=> intval($config['help_send_statistics_time']) + 86400,
		));

		$raw = $collector->get_data_raw();

		foreach ($raw as $provider => $data)
		{
			if ($provider == 'install_id')
			{
				$data = array($provider => $data);
			}

			$template->assign_block_vars('providers', array(
				'NAME'	=> htmlspecialchars($provider, ENT_COMPAT),
			));

			foreach ($data as $key => $value)
			{
				if (is_array($value))
				{
					$value = utf8_wordwrap(serialize($value), 75, "\n", true);
				}

				$template->assign_block_vars('providers.values', array(
					'KEY'	=> utf8_htmlspecialchars($key),
					'VALUE'	=> utf8_htmlspecialchars($value),
				));
			}
		}
	}
}
