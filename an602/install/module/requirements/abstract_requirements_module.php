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

namespace an602\install\module\requirements;

use an602\install\exception\user_interaction_required_exception;
use an602\install\module_base;

/**
 * Base class for requirements installer module
 */
abstract class abstract_requirements_module extends module_base
{
	public function run()
	{
		$tests_passed = true;
		foreach ($this->task_collection as $name => $task)
		{
			// Check if we can run the task
			if (!$task->is_essential() && !$task->check_requirements())
			{
				continue;
			}

			if ($this->allow_progress_bar)
			{
				$this->install_config->increment_current_task_progress();
			}

			$test_result = $task->run();
			$tests_passed = ($tests_passed) ? $test_result : false;
		}

		// Module finished, so clear task progress
		$this->install_config->set_finished_task(0);

		// Check if tests have failed
		if (!$tests_passed)
		{
			// If requirements are not met, exit form installer
			// Set up UI for retesting
			$this->iohandler->add_user_form_group('', array(
				'install'	=> array(
					'label'	=> 'RETEST_REQUIREMENTS',
					'type'	=> 'submit',
				),
			));

			// Send the response and quit
			throw new user_interaction_required_exception();
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_step_count()
	{
		return 0;
	}
}
