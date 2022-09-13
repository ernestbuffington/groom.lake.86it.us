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

namespace an602\db\tools;

/**
 * A factory which serves the suitable tools instance for the given dbal
 */
class factory
{
	/**
	 * @param mixed $db_driver
	 * @param bool $return_statements
	 * @return \an602\db\tools\tools_interface
	 */
	public function get($db_driver, $return_statements = false)
	{
		if ($db_driver instanceof \an602\db\driver\mssql_base)
		{
			return new \an602\db\tools\mssql($db_driver, $return_statements);
		}
		else if ($db_driver instanceof \an602\db\driver\postgres)
		{
			return new \an602\db\tools\postgres($db_driver, $return_statements);
		}
		else if ($db_driver instanceof \an602\db\driver\driver_interface)
		{
			return new \an602\db\tools\tools($db_driver, $return_statements);
		}

		throw new \InvalidArgumentException('Invalid database driver given');
	}
}
