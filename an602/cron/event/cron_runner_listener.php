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

namespace an602\cron\event;

use an602\cron\manager;
use an602\lock\db;
use an602\request\request_interface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\PostResponseEvent;

/**
 * Event listener that executes cron tasks, after the response was served
 */
class cron_runner_listener implements EventSubscriberInterface
{
	/**
	 * @var db
	 */
	private $cron_lock;

	/**
	 * @var manager
	 */
	private $cron_manager;

	/**
	 * @var request_interface
	 */
	private $request;

	/**
	 * Constructor
	 *
	 * @param db 				$lock
	 * @param manager			$manager
	 * @param request_interface	$request
	 */
	public function __construct(db $lock, manager $manager, request_interface $request)
	{
		$this->cron_lock	= $lock;
		$this->cron_manager	= $manager;
		$this->request		= $request;
	}

	/**
	 * Runs the cron job after the response was sent
	 *
	 * @param PostResponseEvent	$event	The event
	 */
	public function on_kernel_terminate(PostResponseEvent $event)
	{
		$request = $event->getRequest();
		$controller_name = $request->get('_route');

		if ($controller_name !== 'an602_cron_run')
		{
			return;
		}

		$cron_type = $request->get('cron_type');

		if ($this->cron_lock->acquire())
		{
			$task = $this->cron_manager->find_task($cron_type);
			if ($task)
			{
				if ($task->is_parametrized())
				{
					$task->parse_parameters($this->request);
				}

				if ($task->is_ready())
				{
					$task->run();
				}

				$this->cron_lock->release();
			}
		}
	}

	/**
	 * {@inheritdoc}
	 */
	static public function getSubscribedEvents()
	{
		return array(
			KernelEvents::TERMINATE		=> 'on_kernel_terminate',
		);
	}
}
