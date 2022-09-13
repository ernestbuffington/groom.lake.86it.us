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

namespace an602\db\migration\data\v310;

class alpha1 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return an602_version_compare($this->config['version'], '3.1.0-a1', '>=');
	}

	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v30x\local_url_bbcode',
			'\an602\db\migration\data\v30x\release_3_0_12',
			'\an602\db\migration\data\v310\acp_style_components_module',
			'\an602\db\migration\data\v310\allow_cdn',
			'\an602\db\migration\data\v310\auth_provider_oauth',
			'\an602\db\migration\data\v310\avatars',
			'\an602\db\migration\data\v310\boardindex',
			'\an602\db\migration\data\v310\config_db_text',
			'\an602\db\migration\data\v310\forgot_password',
			'\an602\db\migration\data\v310\mod_rewrite',
			'\an602\db\migration\data\v310\mysql_fulltext_drop',
			'\an602\db\migration\data\v310\namespaces',
			'\an602\db\migration\data\v310\notifications_cron',
			'\an602\db\migration\data\v310\notification_options_reconvert',
			'\an602\db\migration\data\v310\plupload',
			'\an602\db\migration\data\v310\signature_module_auth',
			'\an602\db\migration\data\v310\softdelete_mcp_modules',
			'\an602\db\migration\data\v310\teampage',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('version', '3.1.0-a1')),
		);
	}
}
