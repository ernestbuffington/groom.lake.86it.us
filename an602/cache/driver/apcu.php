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

namespace an602\cache\driver;

/**
* ACM for APCU
*/
class apcu extends \an602\cache\driver\memory
{
	var $extension = 'apcu';

	/**
	* {@inheritDoc}
	*/
	function purge()
	{
		if (PHP_SAPI !== 'cli' || @ini_get('apc.enable_cli'))
		{
			/*
			 * Use an iterator to selectively delete our cache entries without disturbing
			 * any other cache users (e.g. other AN602 boards hosted on this server)
			 */
			apcu_delete(new \APCUIterator('#^' . $this->key_prefix . '#'));
		}

		parent::purge();
	}

	/**
	* Fetch an item from the cache
	*
	* @access protected
	* @param string $var Cache key
	* @return mixed Cached data
	*/
	function _read($var)
	{
		return apcu_fetch($this->key_prefix . $var);
	}

	/**
	* Store data in the cache
	*
	* @access protected
	* @param string $var Cache key
	* @param mixed $data Data to store
	* @param int $ttl Time-to-live of cached data
	* @return bool True if the operation succeeded
	*/
	function _write($var, $data, $ttl = 2592000)
	{
		return apcu_store($this->key_prefix . $var, $data, $ttl);
	}

	/**
	* Remove an item from the cache
	*
	* @access protected
	* @param string $var Cache key
	* @return bool True if the operation succeeded
	*/
	function _delete($var)
	{
		return apcu_delete($this->key_prefix . $var);
	}
}
