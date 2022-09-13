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

namespace an602\db\output_handler;

use an602\install\helper\iohandler\iohandler_interface;

class installer_migrator_output_handler implements migrator_output_handler_interface
{
	/**
	 * @var iohandler_interface
	 */
	protected $iohandler;

	/**
	 * Constructor
	 *
	 * @param iohandler_interface	$iohandler	Installer's IO-handler
	 */
	public function __construct(iohandler_interface $iohandler)
	{
		$this->iohandler = $iohandler;
	}

	/**
	 * {@inheritdoc}
	 */
	public function write($message, $verbosity)
	{
		if ($verbosity <= migrator_output_handler_interface::VERBOSITY_VERBOSE)
		{
			$this->iohandler->add_log_message($message);
			$this->iohandler->send_response();
		}
	}
}
