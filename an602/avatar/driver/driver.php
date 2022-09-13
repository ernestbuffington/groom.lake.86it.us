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

namespace an602\avatar\driver;

/**
* Base class for avatar drivers
*/
abstract class driver implements \an602\avatar\driver\driver_interface
{
	/**
	* Avatar driver name
	* @var string
	*/
	protected $name;

	/**
	* Current board configuration
	* @var \an602\config\config
	*/
	protected $config;

	/** @var \FastImageSize\FastImageSize */
	protected $imagesize;

	/**
	* Current $an602_root_path
	* @var string
	*/
	protected $an602_root_path;

	/**
	* Current $php_ext
	* @var string
	*/
	protected $php_ext;

	/**
	* Path Helper
	* @var \an602\path_helper
	*/
	protected $path_helper;

	/**
	* Cache driver
	* @var \an602\cache\driver\driver_interface
	*/
	protected $cache;

	/**
	* Array of allowed avatar image extensions
	* Array is used for setting the allowed extensions in the fileupload class
	* and as a base for a regex of allowed extensions, which will be formed by
	* imploding the array with a "|".
	*
	* @var array
	*/
	protected $allowed_extensions = array(
		'gif',
		'jpg',
		'jpeg',
		'png',
	);

	/**
	* Construct a driver object
	*
	* @param \an602\config\config $config AN602 configuration
	* @param \FastImageSize\FastImageSize $imagesize FastImageSize class
	* @param string $an602_root_path Path to the AN602 root
	* @param string $php_ext PHP file extension
	* @param \an602\path_helper $path_helper AN602 path helper
	* @param \an602\cache\driver\driver_interface $cache Cache driver
	*/
	public function __construct(\an602\config\config $config, \FastImageSize\FastImageSize $imagesize, $an602_root_path, $php_ext, \an602\path_helper $path_helper, \an602\cache\driver\driver_interface $cache = null)
	{
		$this->config = $config;
		$this->imagesize = $imagesize;
		$this->an602_root_path = $an602_root_path;
		$this->php_ext = $php_ext;
		$this->path_helper = $path_helper;
		$this->cache = $cache;
	}

	/**
	* {@inheritdoc}
	*/
	public function get_custom_html($user, $row, $alt = '')
	{
		return '';
	}

	/**
	* {@inheritdoc}
	*/
	public function prepare_form_acp($user)
	{
		return array();
	}

	/**
	* {@inheritdoc}
	*/
	public function delete($row)
	{
		return true;
	}

	/**
	* {@inheritdoc}
	*/
	public function get_name()
	{
		return $this->name;
	}

	/**
	* {@inheritdoc}
	*/
	public function get_config_name()
	{
		return preg_replace('#^an602\\\\avatar\\\\driver\\\\#', '', get_class($this));
	}

	/**
	* {@inheritdoc}
	*/
	public function get_acp_template_name()
	{
		return 'acp_avatar_options_' . $this->get_config_name() . '.html';
	}

	/**
	* Sets the name of the driver.
	*
	* @param string	$name Driver name
	*/
	public function set_name($name)
	{
		$this->name = $name;
	}
}
