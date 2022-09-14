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

if (!defined('AN602_ACM_REDIS_PORT'))
{
	define('AN602_ACM_REDIS_PORT', 6379);
}

if (!defined('AN602_ACM_REDIS_HOST'))
{
	define('AN602_ACM_REDIS_HOST', 'localhost');
}

/**
* ACM for Redis
*
* Compatible with the php extension phpredis available
* at https://github.com/nicolasff/phpredis
*
*/
class redis extends \an602\cache\driver\memory
{
	var $extension = 'redis';

	var $redis;

	/**
	* Creates a redis cache driver.
	*
	* The following global constants affect operation:
	*
	* AN602_ACM_REDIS_HOST
	* AN602_ACM_REDIS_PORT
	* AN602_ACM_REDIS_PASSWORD
	* AN602_ACM_REDIS_DB
	*
	* There are no publicly documented constructor parameters.
	*/
	function __construct()
	{
		// Call the parent constructor
		parent::__construct();

		$this->redis = new \Redis();

		$args = func_get_args();
		if (!empty($args))
		{
			$ok = call_user_func_array(array($this->redis, 'connect'), $args);
		}
		else
		{
			$ok = $this->redis->connect(AN602_ACM_REDIS_HOST, AN602_ACM_REDIS_PORT);
		}

		if (!$ok)
		{
			trigger_error('Could not connect to redis server');
		}

		if (defined('AN602_ACM_REDIS_PASSWORD'))
		{
			if (!$this->redis->auth(AN602_ACM_REDIS_PASSWORD))
			{
				global $acm_type;

				trigger_error("Incorrect password for the ACM module $acm_type.", E_USER_ERROR);
			}
		}

		$this->redis->setOption(\Redis::OPT_SERIALIZER, \Redis::SERIALIZER_PHP);
		$this->redis->setOption(\Redis::OPT_PREFIX, $this->key_prefix);

		if (defined('AN602_ACM_REDIS_DB'))
		{
			if (!$this->redis->select(AN602_ACM_REDIS_DB))
			{
				global $acm_type;

				trigger_error("Incorrect database for the ACM module $acm_type.", E_USER_ERROR);
			}
		}
	}

	/**
	* {@inheritDoc}
	*/
	function unload()
	{
		parent::unload();

		$this->redis->close();
	}

	/**
	* {@inheritDoc}
	*/
	function purge()
	{
		$this->redis->flushDB();

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
		return $this->redis->get($var);
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
		if ($ttl == 0)
		{
			return $this->redis->set($var, $data);
		}
		return $this->redis->setex($var, $ttl, $data);
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
		if ($this->redis->delete($var) > 0)
		{
			return true;
		}
		return false;
	}
}
