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

namespace an602\console;

use an602\exception\exception_interface;
use Symfony\Component\Console\ConsoleEvents;
use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class exception_subscriber implements EventSubscriberInterface
{
	/** @var \an602\language\language */
	protected $language;

	/**
	 * Constructor.
	 *
	 * @param \an602\language\language	$language	Language object
	 */
	public function __construct(\an602\language\language $language)
	{
		$this->language = $language;
	}

	/**
	 * This listener is run when the ConsoleEvents::ERROR event is triggered.
	 * It translate the error message. If in debug mode the original exception is embedded.
	 *
	 * @param ConsoleErrorEvent $event
	 */
	public function on_error(ConsoleErrorEvent $event)
	{
		$original_exception = $event->getError();

		if ($original_exception instanceof exception_interface)
		{
			$parameters = array_merge([$original_exception->getMessage()], $original_exception->get_parameters());
			$message = call_user_func_array([$this->language, 'lang'], $parameters);

			$exception = new \RuntimeException($message , $original_exception->getCode(), $original_exception);

			$event->setError($exception);
		}
	}

	static public function getSubscribedEvents()
	{
		return [
			ConsoleEvents::ERROR => 'on_error',
		];
	}
}
