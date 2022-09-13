<?php
/**
 *
 * VigLink extension for the AN602 CMS Software package.
 *
 * @copyright (c) 2016 PHP-AN602 <https://groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace an602\viglink\cron;

/**
 * Viglink cron task.
 */
class viglink extends \an602\cron\task\base
{
	/** @var \an602\config\config $config Config object */
	protected $config;

	/** @var \an602\viglink\acp\viglink_helper $helper Viglink helper object */
	protected $helper;

	/**
	 * Constructor
	 *
	 * @param \an602\config\config              $config         Config object
	 * @param \an602\viglink\acp\viglink_helper $viglink_helper Viglink helper object
	 * @access public
	 */
	public function __construct(\an602\config\config $config, \an602\viglink\acp\viglink_helper $viglink_helper)
	{
		$this->config = $config;
		$this->helper = $viglink_helper;
	}

	/**
	 * {@inheritDoc}
	 */
	public function run()
	{
		try
		{
			$this->helper->set_viglink_services(true);
		}
		catch (\RuntimeException $e)
		{
			$this->helper->log_viglink_error($e->getMessage());
		}
	}

	/**
	 * {@inheritDoc}
	 */
	public function is_runnable()
	{
		return (bool) $this->config['viglink_enabled'];
	}

	/**
	 * {@inheritDoc}
	 */
	public function should_run()
	{
		return $this->config['viglink_last_gc'] < strtotime('24 hours ago');
	}
}
