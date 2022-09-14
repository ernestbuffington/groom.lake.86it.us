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

namespace an602\template\twig;

use an602\template\assets_bag;

class environment extends \Twig\Environment
{
	/** @var \an602\config\config */
	protected $an602_config;

	/** @var \an602\filesystem\filesystem */
	protected $filesystem;

	/** @var \an602\path_helper */
	protected $an602_path_helper;

	/** @var \Symfony\Component\DependencyInjection\ContainerInterface */
	protected $container;

	/** @var \an602\extension\manager */
	protected $extension_manager;

	/** @var \an602\event\dispatcher_interface */
	protected $an602_dispatcher;

	/** @var string */
	protected $an602_root_path;

	/** @var string */
	protected $web_root_path;

	/** @var array **/
	protected $namespace_look_up_order = array('__main__');

	/** @var assets_bag */
	protected $assets_bag;

	/**
	* Constructor
	*
	* @param \an602\config\config $an602_config The AN602 configuration
	* @param \an602\filesystem\filesystem $filesystem
	* @param \an602\path_helper $path_helper AN602 path helper
	* @param string $cache_path The path to the cache directory
	* @param \an602\extension\manager $extension_manager AN602 extension manager
	* @param \Twig\Loader\LoaderInterface $loader Twig loader interface
	* @param \an602\event\dispatcher_interface	$an602_dispatcher	Event dispatcher object
	* @param array $options Array of options to pass to Twig
	*/
	public function __construct(\an602\config\config $an602_config, \an602\filesystem\filesystem $filesystem, \an602\path_helper $path_helper, $cache_path, \an602\extension\manager $extension_manager = null, \Twig\Loader\LoaderInterface $loader = null, \an602\event\dispatcher_interface $an602_dispatcher = null, $options = array())
	{
		$this->an602_config = $an602_config;

		$this->filesystem = $filesystem;
		$this->an602_path_helper = $path_helper;
		$this->extension_manager = $extension_manager;
		$this->an602_dispatcher = $an602_dispatcher;

		$this->an602_root_path = $this->an602_path_helper->get_an602_root_path();
		$this->web_root_path = $this->an602_path_helper->get_web_root_path();

		$this->assets_bag = new assets_bag();

		$options = array_merge(array(
			'cache'			=> (defined('IN_INSTALL')) ? false : $cache_path,
			'debug'			=> false,
			'auto_reload'	=> (bool) $this->an602_config['load_tplcompile'],
			'autoescape'	=> false,
		), $options);

		parent::__construct($loader, $options);
	}

	/**
	* Get the list of enabled AN602 extensions
	*
	* Used in EVENT node
	*
	* @return array
	*/
	public function get_an602_extensions()
	{
		return ($this->extension_manager) ? $this->extension_manager->all_enabled() : array();
	}

	/**
	* Get AN602 config
	*
	* @return \an602\config\config
	*/
	public function get_an602_config()
	{
		return $this->an602_config;
	}

	/**
	 * Get the AN602 root path
	 *
	 * @return string
	 */
	public function get_an602_root_path()
	{
		return $this->an602_root_path;
	}

	/**
	* Get the filesystem object
	*
	* @return \an602\filesystem\filesystem
	*/
	public function get_filesystem()
	{
		return $this->filesystem;
	}

	/**
	* Get the web root path
	*
	* @return string
	*/
	public function get_web_root_path()
	{
		return $this->web_root_path;
	}

	/**
	* Get the phpbb path helper object
	*
	* @return \an602\path_helper
	*/
	public function get_path_helper()
	{
		return $this->an602_path_helper;
	}

	/**
	 * Gets the assets bag
	 *
	 * @return assets_bag
	 */
	public function get_assets_bag()
	{
		return $this->assets_bag;
	}

	/**
	* Get the namespace look up order
	*
	* @return array
	*/
	public function getNamespaceLookUpOrder()
	{
		return $this->namespace_look_up_order;
	}

	/**
	* Set the namespace look up order to load templates from
	*
	* @param array $namespace
	* @return \Twig\Environment
	*/
	public function setNamespaceLookUpOrder($namespace)
	{
		$this->namespace_look_up_order = $namespace;

		return $this;
	}

	/**
	 * {@inheritdoc}
	 */
	public function render($name, array $context = [])
	{
		return $this->display_with_assets($name, $context);
	}

	/**
	 * {@inheritdoc}
	 */
	public function display($name, array $context = [])
	{
		echo $this->display_with_assets($name, $context);
	}

	/**
	 * {@inheritdoc}
	 */
	private function display_with_assets($name, array $context = [])
	{
		$placeholder_salt = unique_id();

		if (array_key_exists('definition', $context))
		{
			$context['definition']->set('SCRIPTS', '__SCRIPTS_' . $placeholder_salt . '__');
			$context['definition']->set('STYLESHEETS', '__STYLESHEETS_' . $placeholder_salt . '__');
		}

		/**
		* Allow changing the template output stream before rendering
		*
		* @event core.twig_environment_render_template_before
		* @var	array	context		Array with template variables
		* @var	string  name		The template name
		* @since 3.2.1-RC1
		*/
		if ($this->an602_dispatcher)
		{
			$vars = array('context', 'name');
			extract($this->an602_dispatcher->trigger_event('core.twig_environment_render_template_before', compact($vars)));
		}

		$output = parent::render($name, $context);

		/**
		* Allow changing the template output stream after rendering
		*
		* @event core.twig_environment_render_template_after
		* @var	array	context		Array with template variables
		* @var	string  name		The template name
		* @var	string	output		Rendered template output stream
		* @since 3.2.1-RC1
		*/
		if ($this->an602_dispatcher)
		{
			$vars = array('context', 'name', 'output');
			extract($this->an602_dispatcher->trigger_event('core.twig_environment_render_template_after', compact($vars)));
		}

		return $this->inject_assets($output, $placeholder_salt);
	}

	/**
	 * Injects the assets (from INCLUDECSS/JS) in the output.
	 *
	 * @param string $output
	 *
	 * @return string
	 */
	private function inject_assets($output, $placeholder_salt)
	{
		$output = str_replace('__STYLESHEETS_' . $placeholder_salt . '__', $this->assets_bag->get_stylesheets_content(), $output);
		$output = str_replace('__SCRIPTS_' . $placeholder_salt . '__', $this->assets_bag->get_scripts_content(), $output);

		return $output;
	}

	/**
	* Loads a template by name.
	*
	* @param string  $name  The template name
	* @param integer $index The index if it is an embedded template
	* @return \Twig\Template A template instance representing the given template name
	* @throws \Twig\Error\LoaderError
	*/
	public function loadTemplate($name, $index = null)
	{
		if (strpos($name, '@') === false)
		{
			foreach ($this->getNamespaceLookUpOrder() as $namespace)
			{
				try
				{
					if ($namespace === '__main__')
					{
						return parent::loadTemplate($name, $index);
					}

					return parent::loadTemplate('@' . $namespace . '/' . $name, $index);
				}
				catch (\Twig\Error\LoaderError $e)
				{
				}
			}

			// We were unable to load any templates
			throw $e;
		}
		else
		{
			return parent::loadTemplate($name, $index);
		}
	}

	/**
	* Finds a template by name.
	*
	* @param string  $name  The template name
	* @return string
	* @throws \Twig\Error\LoaderError
	*/
	public function findTemplate($name)
	{
		if (strpos($name, '@') === false)
		{
			foreach ($this->getNamespaceLookUpOrder() as $namespace)
			{
				try
				{
					if ($namespace === '__main__')
					{
						return parent::getLoader()->getCacheKey($name);
					}

					return parent::getLoader()->getCacheKey('@' . $namespace . '/' . $name);
				}
				catch (\Twig\Error\LoaderError $e)
				{
				}
			}

			// We were unable to load any templates
			throw $e;
		}
		else
		{
			return parent::getLoader()->getCacheKey($name);
		}
	}
}
