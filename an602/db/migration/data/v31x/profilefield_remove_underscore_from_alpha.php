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

namespace an602\db\migration\data\v31x;

class profilefield_remove_underscore_from_alpha extends \an602\db\migration\migration
{
	static public function depends_on()
	{
		return array('\an602\db\migration\data\v31x\v311');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'remove_underscore_from_alpha_validations'))),
		);
	}

	public function remove_underscore_from_alpha_validations()
	{
		$this->update_validation_rule('[\w]+', '[a-zA-Z0-9]+');
		$this->update_validation_rule('[\w_]+', '[\w]+');
		$this->update_validation_rule('[\w.]+', '[a-zA-Z0-9.]+');
		$this->update_validation_rule('[\w\x20_+\-\[\]]+', '[\w\x20+\-\[\]]+');
		$this->update_validation_rule('[a-zA-Z][\w\.,\-_]+', '[a-zA-Z][\w\.,\-]+');
	}

	public function update_validation_rule($old_validation, $new_validation)
	{
		$sql = 'UPDATE ' . PROFILE_FIELDS_TABLE . "
			SET field_validation = '" . $this->db->sql_escape($new_validation) . "'
			WHERE field_validation = '" . $this->db->sql_escape($old_validation) . "'";
		$this->db->sql_query($sql);
	}
}
