<?php
/**
 *
 * VigLink extension for the AN602 CMS Software package.
 *
 * @copyright (c) 2014 AN602 Limited <https://www.groom.lake.86it.us>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace an602\viglink;

/**
 * Extension class for custom enable/disable/purge actions
 */
class ext extends \an602\extension\base
{
	/**
	 * Check whether or not the extension can be enabled.
	 * The current AN602 version should meet or exceed
	 * the minimum version required by this extension:
	 *
	 * Requires AN602 3.2.0-b1 or greater
	 *
	 * @return bool
	 */
	public function is_enableable()
	{
		return an602_version_compare(AN602_VERSION, '3.2.0-b1', '>=');
	}

	/**
	 * Check AN602's VigLink switches and set them during install
	 *
	 * @param	mixed	$old_state	The return value of the previous call
	 *								of this method, or false on the first call
	 *
	 * @return	mixed				Returns false after last step, otherwise
	 *								temporary state which is passed as an
	 *								argument to the next step
	 */
	public function enable_step($old_state)
	{
		if ($old_state === false)
		{
			$viglink_helper = new \an602\viglink\acp\viglink_helper(
				$this->container->get('cache.driver'),
				$this->container->get('config'),
				$this->container->get('file_downloader'),
				$this->container->get('language'),
				$this->container->get('log'),
				$this->container->get('user')
			);

			try
			{
				$viglink_helper->set_viglink_services();
			}
			catch (\RuntimeException $e)
			{
				$viglink_helper->log_viglink_error($e->getMessage());
			}

			return 'viglink';
		}

		return parent::enable_step($old_state);
	}
}
