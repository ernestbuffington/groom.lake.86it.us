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

namespace an602\cron\task\text_reparser;

/**
 * Reparse text cron task
 */
class reparser extends \an602\cron\task\base
{
	const MIN = 1;
	const SIZE = 100;

	/**
	 * @var \an602\config\config
	 */
	protected $config;

	/**
	 * @var \an602\config\db_text
	 */
	protected $config_text;

	/**
	 * @var \an602\lock\db
	 */
	protected $reparse_lock;

	/**
	 * @var \an602\textreparser\manager
	 */
	protected $reparser_manager;

	/**
	 * @var string
	 */
	protected $reparser_name;

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
	 * @param \an602\lock\db				$reparse_lock
	 * @param \an602\textreparser\manager	$reparser_manager
	 * @param \an602\di\service_collection	$reparsers
	 */
	public function __construct(\an602\config\config $config, \an602\config\db_text $config_text, \an602\lock\db $reparse_lock, \an602\textreparser\manager $reparser_manager, \an602\di\service_collection $reparsers)
	{
		$this->config = $config;
		$this->config_text = $config_text;
		$this->reparse_lock = $reparse_lock;
		$this->reparser_manager = $reparser_manager;
		$this->reparsers = $reparsers;
	}

	/**
	 * Sets the reparser for this cron task
	 *
	 * @param string	$reparser
	 */
	public function set_reparser($reparser)
	{
		$this->reparser_name = !isset($this->reparsers[$reparser]) ? $this->reparser_manager->find_reparser($reparser) : $reparser;

		if ($this->resume_data === null)
		{
			$this->resume_data = $this->reparser_manager->get_resume_data($this->reparser_name);
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function is_runnable()
	{
		if ($this->resume_data === null)
		{
			$this->resume_data = $this->reparser_manager->get_resume_data($this->reparser_name);
		}

		if (!isset($this->resume_data['range-max']) || $this->resume_data['range-max'] >= $this->resume_data['range-min'])
		{
			return true;
		}

		return false;
	}

	/**
	 * {@inheritdoc}
	 */
	public function should_run()
	{
		if (!empty($this->config['reparse_lock']))
		{
			$last_run = explode(' ', $this->config['reparse_lock']);

			if ($last_run[0] + 3600 >= time())
			{
				return false;
			}
		}

		if ($this->config[$this->reparser_name . '_cron_interval'])
		{
			return $this->config[$this->reparser_name . '_last_cron'] < time() - $this->config[$this->reparser_name . '_cron_interval'];
		}

		return false;
	}

	/**
	 * {@inheritdoc}
	 */
	public function run()
	{
		if ($this->reparse_lock->acquire())
		{
			if ($this->resume_data === null)
			{
				$this->resume_data = $this->reparser_manager->get_resume_data($this->reparser_name);
			}

			/**
			 * @var \an602\textreparser\reparser_interface $reparser
			 */
			$reparser = $this->reparsers[$this->reparser_name];

			$min = isset($this->resume_data['range-min']) ? $this->resume_data['range-min'] : self::MIN;
			$current = isset($this->resume_data['range-max']) ? $this->resume_data['range-max'] : $reparser->get_max_id();
			$size = isset($this->resume_data['range-size']) ? $this->resume_data['range-size'] : self::SIZE;

			if ($current >= $min)
			{
				$start = max($min, $current + 1 - $size);
				$end = max($min, $current);

				$reparser->reparse_range($start, $end);

				$this->reparser_manager->update_resume_data($this->reparser_name, $min, $start - 1, $size);
			}

			$this->config->set($this->reparser_name . '_last_cron', time());
			$this->reparse_lock->release();
		}
	}
}
