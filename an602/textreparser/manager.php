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

namespace an602\textreparser;

class manager
{
	/**
	 * @var \an602\config\config
	 */
	protected $config;

	/**
	 * @var \an602\config\db_text
	 */
	protected $config_text;

	/**
	 * @var \an602\di\service_collection
	 */
	protected $reparsers;

	/**
	 * @var array
	 */
	protected $resume_data;

	/**
	 * Constructor
	 *
	 * @param \an602\config\config			$config
	 * @param \an602\config\db_text			$config_text
	 * @param \an602\di\service_collection	$reparsers
	 */
	public function __construct(\an602\config\config $config, \an602\config\db_text $config_text, \an602\di\service_collection $reparsers)
	{
		$this->config = $config;
		$this->config_text = $config_text;
		$this->reparsers = $reparsers;
	}

	/**
	 * Loads resume data from the database
	 *
	 * @param string	$name	Name of the reparser to which the resume data belongs
	 *
	 * @return array
	 */
	public function get_resume_data($name)
	{
		if ($this->resume_data === null)
		{
			$resume_data = $this->config_text->get('reparser_resume');
			$this->resume_data = !empty($resume_data) ? unserialize($resume_data) : array();
		}

		return isset($this->resume_data[$name]) ? $this->resume_data[$name] : array();
	}

	/**
	 * Updates the resume data in the database
	 *
	 * @param string	$name		Name of the reparser to which the resume data belongs
	 * @param int		$min		Lowest record ID
	 * @param int		$current	Current record ID
	 * @param int		$size		Number of records to process at a time
	 * @param bool		$update_db	True if the resume data should be written to the database, false if not. (default: true)
	 */
	public function update_resume_data($name, $min, $current, $size, $update_db = true)
	{
		// Prevent overwriting the old, stored array
		if ($this->resume_data === null)
		{
			$this->get_resume_data('');
		}

		$this->resume_data[$name] = array(
			'range-min'		=> $min,
			'range-max'		=> $current,
			'range-size'	=> $size,
		);

		if ($update_db)
		{
			$this->config_text->set('reparser_resume', serialize($this->resume_data));
		}
	}

	/**
	 * Sets the interval for a text_reparser cron task
	 *
	 * @param string	$name		Name of the reparser to schedule
	 * @param int		$interval	Interval in seconds, 0 to disable the cron task
	 */
	public function schedule($name, $interval)
	{
		if (isset($this->reparsers[$name]) && isset($this->config[$name . '_cron_interval']))
		{
			$this->config->set($name . '_cron_interval', $interval);
		}
	}

	/**
	 * Sets the interval for all text_reparser cron tasks
	 *
	 * @param int	$interval	Interval in seconds, 0 to disable the cron task
	 */
	public function schedule_all($interval)
	{
		// This way we don't construct every registered reparser
		$reparser_array = array_keys($this->reparsers->getArrayCopy());

		foreach ($reparser_array as $reparser)
		{
			$this->schedule($reparser, $interval);
		}
	}

	/**
	 * Finds a reparser by name.
	 *
	 * If there is no reparser with the specified name, null is returned.
	 *
	 * @param string $name Name of the reparser to look up.
	 * @return string A reparser service name, or null.
	 */
	public function find_reparser($name)
	{
		foreach ($this->reparsers as $service => $reparser)
		{
			if ($reparser->get_name() == $name)
			{
				return $service;
			}
		}
		return null;
	}
}
