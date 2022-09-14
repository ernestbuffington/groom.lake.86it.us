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

namespace an602\install\module\update_database;

class module extends \an602\install\module_base
{
	/**
	 * {@inheritdoc}
	 */
	public function get_navigation_stage_path()
	{
		return array('update', 0, 'update_database');
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_step_count()
	{
		return 0;
	}
}
