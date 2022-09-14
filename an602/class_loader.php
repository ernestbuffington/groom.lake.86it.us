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

namespace an602;

/**
* The class loader resolves class names to file system paths and loads them if
* necessary.
*
* Classes have to be of the form an602_(dir_)*(classpart_)*, so directory names
* must never contain underscores. Example: an602_dir_subdir_class_name is a
* valid class name, while an602_dir_sub_dir_class_name is not.
*
* If every part of the class name is a directory, the last directory name is
* also used as the filename, e.g. an602_dir would resolve to dir/dir.php.
*/
class class_loader
{
	private $namespace;
	private $path;
	private $php_ext;
	private $cache;

	/**
	* A map of looked up class names to paths relative to $this->path.
	* This map is stored in cache and looked up if the cache is available.
	*
	* @var array
	*/
	private $cached_paths = array();

	/**
	* Creates a new \an602\class_loader, which loads files with the given
	* file extension from the given path.
	*
	* @param string $namespace Required namespace for files to be loaded
	* @param string $path    Directory to load files from
	* @param string $php_ext The file extension for PHP files
	* @param \an602\cache\driver\driver_interface $cache An implementation of the AN602 cache interface.
	*/
	public function __construct($namespace, $path, $php_ext = 'php', \an602\cache\driver\driver_interface $cache = null)
	{
		if ($namespace[0] !== '\\')
		{
			$namespace = '\\' . $namespace;
		}

		$this->namespace = $namespace;
		$this->path = $path;
		$this->php_ext = $php_ext;

		$this->set_cache($cache);
	}

	/**
	* Provide the class loader with a cache to store paths. If set to null, the
	* the class loader will resolve paths by checking for the existence of every
	* directory in the class name every time.
	*
	* @param \an602\cache\driver\driver_interface $cache An implementation of the AN602 cache interface.
	*/
	public function set_cache(\an602\cache\driver\driver_interface $cache = null)
	{
		if ($cache)
		{
			$this->cached_paths = $cache->get('class_loader_' . str_replace('\\', '__', $this->namespace));

			if ($this->cached_paths === false)
			{
				$this->cached_paths = array();
			}
		}

		$this->cache = $cache;
	}

	/**
	* Registers the class loader as an autoloader using SPL.
	*/
	public function register()
	{
		spl_autoload_register(array($this, 'load_class'));
	}

	/**
	* Removes the class loader from the SPL autoloader stack.
	*/
	public function unregister()
	{
		spl_autoload_unregister(array($this, 'load_class'));
	}

	/**
	* Resolves a AN602 class name to a relative path which can be included.
	*
	* @param string       $class The class name to resolve, must be in the
	*                            namespace the loader was constructed with.
	*                            Has to begin with \
	* @return string|bool        A relative path to the file containing the
	*                            class or false if looking it up failed.
	*/
	public function resolve_path($class)
	{
		if (isset($this->cached_paths[$class]))
		{
			return $this->path . $this->cached_paths[$class] . '.' . $this->php_ext;
		}

		if (!preg_match('/^' . preg_quote($this->namespace, '/') . '[a-zA-Z0-9_\\\\]+$/', $class))
		{
			return false;
		}

		$relative_path = str_replace('\\', '/', substr($class, strlen($this->namespace)));

		if (!file_exists($this->path . $relative_path . '.' . $this->php_ext))
		{
			return false;
		}

		if ($this->cache)
		{
			$this->cached_paths[$class] = $relative_path;
			$this->cache->put('class_loader_' . str_replace('\\', '__', $this->namespace), $this->cached_paths);
		}

		return $this->path . $relative_path . '.' . $this->php_ext;
	}

	/**
	* Resolves a class name to a path and then includes it.
	*
	* @param string $class The class name which is being loaded.
	*/
	public function load_class($class)
	{
		// In general $class is not supposed to contain a leading backslash,
		// but sometimes it does. See tickets PHP-50731 and HHVM-1840.
		if ($class[0] !== '\\')
		{
			$class = '\\' . $class;
		}

		if (substr($class, 0, strlen($this->namespace)) === $this->namespace)
		{
			$path = $this->resolve_path($class);

			if ($path)
			{
				require $path;
			}
		}
	}
}
