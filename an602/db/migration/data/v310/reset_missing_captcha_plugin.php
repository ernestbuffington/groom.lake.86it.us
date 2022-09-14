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

namespace an602\db\migration\data\v310;

/**
* Class captcha_plugin
*
* Reset the captcha setting to the default plugin if the defined 'captcha_plugin' is missing.
*/
class reset_missing_captcha_plugin extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array('\an602\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('if', array(
				(is_dir($this->an602_root_path . 'includes/captcha/plugins/') &&
				!is_file($this->an602_root_path . "includes/captcha/plugins/{$this->config['captcha_plugin']}_plugin." . $this->php_ext)),
				array('config.update', array('captcha_plugin', 'an602_captcha_nogd')),
			)),
		);
	}
}
