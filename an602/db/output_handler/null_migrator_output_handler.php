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

namespace an602\db\output_handler;

class null_migrator_output_handler implements migrator_output_handler_interface
{
	/**
	 * {@inheritdoc}
	 */
	public function write($message, $verbosity)
	{
	}
}
