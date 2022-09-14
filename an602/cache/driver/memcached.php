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

namespace an602\cache\driver;

if (!defined('PHPBB_ACM_MEMCACHED_PORT'))
{
	define('PHPBB_ACM_MEMCACHED_PORT', 11211);
}

if (!defined('PHPBB_ACM_MEMCACHED_COMPRESS'))
{
	define('PHPBB_ACM_MEMCACHED_COMPRESS', true);
}

if (!defined('PHPBB_ACM_MEMCACHED_HOST'))
{
	define('PHPBB_ACM_MEMCACHED_HOST', 'localhost');
}

if (!defined('PHPBB_ACM_MEMCACHED'))
{
	//can define multiple servers with host1/port1,host2/port2 format
	define('PHPBB_ACM_MEMCACHED', PHPBB_ACM_MEMCACHED_HOST . '/' . PHPBB_ACM_MEMCACHED_PORT);
}

/**
* ACM for Memcached
*/
class memcached extends \an602\cache\driver\memory
{
	/** @var string Extension to use */
	protected $extension = 'memcached';

	/** @var \Memcached Memcached class */
	protected $memcached;

	/** @var int Flags */
	protected $flags = 0;

	/**
	 * Memcached constructor
	 *
	 * @param string $memcached_servers Memcached servers string (optional)
	 */
	public function __construct($memcached_servers = '')
	{
		// Call the parent constructor
		parent::__construct();

		$memcached_servers = $memcached_servers ?: PHPBB_ACM_MEMCACHED;

		$this->memcached = new \Memcached();
		$this->memcached->setOption(\Memcached::OPT_BINARY_PROTOCOL, true);
		// Memcached defaults to using compression, disable if we don't want
		// to use it
		if (!PHPBB_ACM_MEMCACHED_COMPRESS)
		{
			$this->memcached->setOption(\Memcached::OPT_COMPRESSION, false);
		}

		$server_list = [];
		foreach (explode(',', $memcached_servers) as $u)
		{
			if (preg_match('#(.*)/(\d+)#', $u, $parts))
			{
				$server_list[] = [trim($parts[1]), (int) trim($parts[2])];
			}
		}

		$this->memcached->addServers($server_list);

		if (empty($server_list) || empty($this->memcached->getStats()))
		{
			trigger_error('Could not connect to memcached server(s).');
		}
	}

	/**
	* {@inheritDoc}
	*/
	public function unload()
	{
		parent::unload();

		unset($this->memcached);
	}

	/**
	* {@inheritDoc}
	*/
	public function purge()
	{
		$this->memcached->flush();

		parent::purge();
	}

	/**
	* Fetch an item from the cache
	*
	* @param string $var Cache key
	*
	* @return mixed Cached data
	*/
	protected function _read($var)
	{
		return $this->memcached->get($this->key_prefix . $var);
	}

	/**
	* Store data in the cache
	*
	* @param string $var Cache key
	* @param mixed $data Data to store
	* @param int $ttl Time-to-live of cached data
	* @return bool True if the operation succeeded
	*/
	protected function _write($var, $data, $ttl = 2592000)
	{
		if (!$this->memcached->replace($this->key_prefix . $var, $data, $ttl))
		{
			return $this->memcached->set($this->key_prefix . $var, $data, $ttl);
		}
		return true;
	}

	/**
	* Remove an item from the cache
	*
	* @param string $var Cache key
	* @return bool True if the operation succeeded
	*/
	protected function _delete($var)
	{
		return $this->memcached->delete($this->key_prefix . $var);
	}
}
