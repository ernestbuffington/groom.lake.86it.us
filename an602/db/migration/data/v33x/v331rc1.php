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

namespace an602\db\migration\data\v33x;

class v331rc1 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return version_compare($this->config['version'], '3.3.1-RC1', '>=');
	}

	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v33x\add_notification_emails_table',
			'\an602\db\migration\data\v33x\fix_display_unapproved_posts_config',
			'\an602\db\migration\data\v33x\bot_update',
			'\an602\db\migration\data\v33x\font_awesome_5_update',
			'\an602\db\migration\data\v33x\profilefield_cleanup',
			'\an602\db\migration\data\v33x\google_recaptcha_v3',
			'\an602\db\migration\data\v33x\default_search_return_chars',
			'\an602\db\migration\data\v32x\v3210rc2',
		];
	}

	public function update_data()
	{
		return [
			['config.update', ['version', '3.3.1-RC1']],
		];
	}
}
