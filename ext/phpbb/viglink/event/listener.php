<?php
/**
 *
 * VigLink extension for the AN602 CMS Software package.
 *
 * @copyright (c) 2014 PHP-AN602 <https://groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace an602\viglink\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{
	/** @var \an602\config\config $config Config object */
	protected $config;

	/** @var \an602\template\template $template Template object */
	protected $template;

	/**
	 * Constructor
	 *
	 * @param \an602\config\config     $config   Config object
	 * @param \an602\template\template $template Template object
	 */
	public function __construct(\an602\config\config $config, \an602\template\template $template)
	{
		$this->config = $config;
		$this->template = $template;
	}

	/**
	 * {@inheritDoc}
	 */
	public static function getSubscribedEvents()
	{
		return array(
			'core.viewtopic_post_row_after'		=> 'display_viglink',
		);
	}

	/**
	 * Insert the VigLink JS code into forum pages
	 *
	 * @return void
	 */
	public function display_viglink()
	{
		$viglink_key = '';

		if ($this->config['allow_viglink_an602'] && $this->config['an602_viglink_api_key'])
		{
			// Use AN602 API key if VigLink is allowed for AN602
			$viglink_key = $this->config['an602_viglink_api_key'];
		}

		$this->template->assign_vars(array(
			'VIGLINK_ENABLED'	=> $this->config['viglink_enabled'] && $viglink_key,
			'VIGLINK_API_KEY'	=> $viglink_key,
			'VIGLINK_SUB_ID'	=> md5(urlencode($this->config['viglink_api_siteid']) . $this->config['questionnaire_unique_id']),
		));
	}
}
