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

namespace an602\install\event;

use an602\exception\exception_interface;
use an602\install\controller\helper;
use an602\language\language;
use an602\template\template;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Exception handler for the installer
 */
class kernel_exception_subscriber implements EventSubscriberInterface
{
	/**
	 * @var helper
	 */
	protected $controller_helper;

	/**
	 * @var language
	 */
	protected $language;

	/**
	 * @var template
	 */
	protected $template;

	/**
	 * Constructor
	 *
	 * @param helper	$controller_helper
	 * @param language	$language
	 * @param template	$template
	 */
	public function __construct(helper $controller_helper, language $language, template $template)
	{
		$this->controller_helper	= $controller_helper;
		$this->language				= $language;
		$this->template				= $template;
	}

	/**
	 * This listener is run when the KernelEvents::EXCEPTION event is triggered
	 *
	 * @param GetResponseForExceptionEvent	$event
	 */
	public function on_kernel_exception(GetResponseForExceptionEvent $event)
	{
		$exception = $event->getException();
		$message = $exception->getMessage();

		if ($exception instanceof exception_interface)
		{
			$message = $this->language->lang_array($message, $exception->get_parameters());
		}

		if (!$event->getRequest()->isXmlHttpRequest())
		{
			$this->template->assign_vars(array(
				'TITLE'	=> $this->language->lang('INFORMATION'),
				'BODY'	=> $message,
			));

			$response = $this->controller_helper->render(
				'installer_main.html',
				$this->language->lang('INFORMATION'),
				false,
				500
			);
		}
		else
		{
			$data = array();

			if (!empty($message))
			{
				$data['message'] = $message;
			}

			if (defined('DEBUG'))
			{
				$data['trace'] = $exception->getTrace();
			}

			$response = new JsonResponse($data, 500);
		}

		if ($exception instanceof HttpExceptionInterface)
		{
			$response->setStatusCode($exception->getStatusCode());
			$response->headers->add($exception->getHeaders());
		}

		$event->setResponse($response);
	}

	/**
	 * Returns an array of events the object is subscribed to
	 *
	 * @return array	Array of events the object is subscribed to
	 */
	static public function getSubscribedEvents()
	{
		return array(
			KernelEvents::EXCEPTION		=> 'on_kernel_exception',
		);
	}
}
