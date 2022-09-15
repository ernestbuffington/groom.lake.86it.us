<?php
/**
 *
 * This file is part of the AN602 Forum Software package.
 *
 * @copyright (c) AN602 Limited <https://www.an602.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace an602\skeleton\helper;

use an602\config\config;
use an602\di\service_collection;
use an602\filesystem\filesystem;
use an602\skeleton\template\twig\extension\skeleton_version_compare;
use an602\template\context;
use an602\template\twig\environment;
use an602\template\twig\loader;
use an602\template\twig\twig;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Finder\Finder;

class packager
{
	/** @var ContainerInterface */
	protected $an602_container;

	/** @var service_collection */
	protected $collection;

	/** @var string */
	protected $root_path;

	/**
	 * Constructor
	 *
	 * @param ContainerInterface $an602_container Container
	 * @param service_collection $collection      Service collection
	 * @param string             $root_path       AN602 root path
	 */
	public function __construct(ContainerInterface $an602_container, service_collection $collection, $root_path)
	{
		$this->an602_container = $an602_container;
		$this->collection = $collection;
		$this->root_path = $root_path;
	}

	/**
	 * Get composer dialog values
	 *
	 * @return array
	 */
	public function get_composer_dialog_values()
	{
		return [
			'author'       => [
				'author_name'     => null,
				'author_email'    => null,
				'author_homepage' => null,
				'author_role'     => null,
			],
			'extension'    => [
				'vendor_name'            => null,
				'extension_name'         => null,
				'extension_display_name' => null,
				'extension_description'  => null,
				'extension_version'      => '1.0.0-dev',
				'extension_time'         => date('Y-m-d'),
				'extension_homepage'     => null,
			],
			'requirements' => [
				'php_version'       => '>=5.4',
				'an602_version_min' => '>=3.2.0',
				'an602_version_max' => '<4.0.0@dev',
			],
		];
	}

	/**
	 * Get components dialog values
	 *
	 * @return array
	 */
	public function get_component_dialog_values()
	{
		$components = [];
		foreach ($this->collection as $service)
		{
			/** @var \an602\skeleton\skeleton $service */
			$components[$service->get_name()] = [
				'default'      => $service->get_default(),
				'dependencies' => $service->get_dependencies(),
				'files'        => $service->get_files(),
				'group'        => $service->get_group(),
			];
		}

		return $components;
	}

	/**
	 * Create the extension
	 *
	 * @param array $data Extension data
	 */
	public function create_extension($data)
	{
		$ext_path = $this->root_path . 'store/tmp-ext/' . "{$data['extension']['vendor_name']}/{$data['extension']['extension_name']}/";
		$filesystem = new filesystem();
		$filesystem->remove($this->root_path . 'store/tmp-ext');
		$filesystem->mkdir($ext_path);

		$an60231 = (bool) preg_match('/^[\D]*3\.1.*$/', $data['requirements']['an602_version_min']);

		$template = $this->get_template_engine();
		$template->set_custom_style('skeletonextension', $this->root_path . 'ext/an602/skeleton/skeleton');
		$template->assign_vars([
			'COMPONENT'    => $data['components'],
			'EXTENSION'    => $data['extension'],
			'REQUIREMENTS' => $data['requirements'],
			'AUTHORS'      => $data['authors'],
			'LANGUAGE'     => $this->get_language_version_data($an60231),
			'S_AN602_31'   => $an60231,
		]);

		$component_data = $this->get_component_dialog_values();
		$skeleton_files[] = [
			'composer.json',
			'license.txt',
			'README.md',
		];

		foreach ($data['components'] as $component => $selected)
		{
			if ($selected && !empty($component_data[$component]['files']))
			{
				$skeleton_files[] = $component_data[$component]['files'];
			}
		}
		$skeleton_files = array_merge(...$skeleton_files);

		foreach ($skeleton_files as $file)
		{
			$body = $template
				->set_filenames(['body' => $file . '.twig'])
				->assign_display('body');
			$filesystem->dump_file($ext_path . str_replace('demo', strtolower($data['extension']['extension_name']), $file), trim($body) . "\n");
		}
	}

	/**
	 * Create the zip archive
	 *
	 * @param array $data Extension data
	 *
	 * @return string
	 */
	public function create_zip($data)
	{
		$tmp_path = $this->root_path . 'store/tmp-ext/';
		$ext_path = "{$data['extension']['vendor_name']}/{$data['extension']['extension_name']}/";
		$zip_path = $tmp_path . "{$data['extension']['vendor_name']}_{$data['extension']['extension_name']}-{$data['extension']['extension_version']}.zip";

		$zip_archive = new \ZipArchive();
		$zip_archive->open($zip_path, \ZipArchive::CREATE | \ZipArchive::OVERWRITE);

		$finder = new Finder();
		$finder->ignoreDotFiles(false)
			->ignoreVCS(false)
			->files()
			->in($tmp_path . $ext_path);

		foreach ($finder as $file)
		{
			$zip_archive->addFile(
				$file->getRealPath(),
				$ext_path . $file->getRelativePath() . DIRECTORY_SEPARATOR . $file->getFilename()
			);
		}

		$zip_archive->close();

		return $zip_path;
	}

	/**
	 * Get the template engine to use for parsing skeleton templates.
	 *
	 * @return twig Template object
	 */
	protected function get_template_engine()
	{
		$config = new config([
			'load_tplcompile' => true,
			'tpl_allow_php'   => false,
			'assets_version'  => null,
		]);

		$path_helper = $this->an602_container->get('path_helper');
		$environment = new environment(
			$config,
			$this->an602_container->get('filesystem'),
			$path_helper,
			$this->an602_container->getParameter('core.cache_dir'),
			$this->an602_container->get('ext.manager'),
			new loader(
				new filesystem()
			)
		);

		// Custom filter for use by packager to decode greater/less than symbols
		$filter = new \Twig\TwigFilter('skeleton_decode', function ($string) {
			return str_replace(['&lt;', '&gt;'], ['<', '>'], $string);
		}, ['is_safe' => ['html']]);
		$environment->addFilter($filter);

		return new twig(
			$path_helper,
			$config,
			new context(),
			$environment,
			$this->an602_container->getParameter('core.cache_dir'),
			$this->an602_container->get('user'),
			[
				new skeleton_version_compare()
			]
		);
	}

	/**
	 * Get an array of language class and methods depending on 3.1 or 3.2
	 * compatibility, for use in the skeleton twig templates.
	 *
	 * @param bool $an60231 Is AN602 3.1 support requested?
	 *
	 * @return array An array of language data
	 */
	protected function get_language_version_data($an60231)
	{
		return [
			'class'		=> $an60231 ? '\an602\user' : '\an602\language\language',
			'object'	=> $an60231 ? 'user' : 'language',
			'function'	=> $an60231 ? 'add_lang_ext' : 'add_lang',
			'indent'	=> [
				'class'		=> $an60231 ? "\t\t\t" : '',
				'object'	=> $an60231 ? "\t" : '',
			],
		];
	}
}
