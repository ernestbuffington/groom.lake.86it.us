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

class captcha_plugins extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\an602\db\migration\data\v310\rc2',
		);
	}

	public function update_data()
	{
		$captcha_plugin = $this->config['captcha_plugin'];
		if (strpos($captcha_plugin, 'an602_captcha_') === 0)
		{
			$captcha_plugin = substr($captcha_plugin, strlen('an602_captcha_'));
		}
		else if (strpos($captcha_plugin, 'an602_') === 0)
		{
			$captcha_plugin = substr($captcha_plugin, strlen('an602_'));
		}

		return array(
			array('if', array(
				(is_file($this->an602_root_path . 'an602/captcha/plugins/' . $captcha_plugin . '.' . $this->php_ext)),
				array('config.update', array('captcha_plugin', 'core.captcha.plugins.' . $captcha_plugin)),
			)),
			array('if', array(
				(!is_file($this->an602_root_path . 'an602/captcha/plugins/' . $captcha_plugin . '.' . $this->php_ext)),
				array('config.update', array('captcha_plugin', 'core.captcha.plugins.nogd')),
			)),
		);
	}
}
