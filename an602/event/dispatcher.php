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

namespace an602\event;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;

/**
* Extension of the Symfony EventDispatcher
*
* It provides an additional `trigger_event` method, which
* gives some syntactic sugar for dispatching events. Instead
* of creating the event object, the method will do that for
* you.
*
* Example:
*
*     $vars = array('page_title');
*     extract($an602_dispatcher->trigger_event('core.index', compact($vars)));
*
*/
class dispatcher extends EventDispatcher implements dispatcher_interface
{
	/**
	 * @var bool
	 */
	protected $disabled = false;

	/**
	* {@inheritdoc}
	*/
	public function trigger_event($eventName, $data = [])
	{
		$event = new \an602\event\data($data);
		$this->dispatch($eventName, $event);
		return $event->get_data_filtered(array_keys($data));
	}

	/**
	 * {@inheritdoc}
	 */
	public function dispatch($eventName, Event $event = null)
	{
		if ($this->disabled)
		{
			return $event;
		}

		foreach ((array) $eventName as $name)
		{
			$event = parent::dispatch($name, $event);
		}

		return $event;
	}

	/**
	 * {@inheritdoc}
	 */
	public function disable()
	{
		$this->disabled = true;
	}

	/**
	 * {@inheritdoc}
	 */
	public function enable()
	{
		$this->disabled = false;
	}
}
