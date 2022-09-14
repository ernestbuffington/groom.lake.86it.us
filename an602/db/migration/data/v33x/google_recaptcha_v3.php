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

namespace an602\db\migration\data\v33x;

class google_recaptcha_v3 extends \an602\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->config->offsetExists('recaptcha_v3_key');
	}

	static public function depends_on()
	{
		return [
			'\an602\db\migration\data\v330\v330',
		];
	}

	public function update_data()
	{
		$data = [
			['config.add', ['recaptcha_v3_key', '']],
			['config.add', ['recaptcha_v3_secret', '']],
			['config.add', ['recaptcha_v3_domain', \an602\captcha\plugins\recaptcha_v3::GOOGLE]],
			['config.add', ['recaptcha_v3_method', \an602\captcha\plugins\recaptcha_v3::POST]],
		];

		foreach (\an602\captcha\plugins\recaptcha_v3::get_actions() as $action)
		{
			$data[] = ['config.add', ["recaptcha_v3_threshold_{$action}", '0.5']];
		}

		return $data;
	}
}
