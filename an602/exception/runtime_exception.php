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

namespace an602\exception;

/**
 * Class runtime_exception
 *
 * Define an exception which support a language var as message.
 */
class runtime_exception extends \RuntimeException implements exception_interface
{
	/**
	 * Parameters to use with the language var.
	 *
	 * @var array
	 */
	private $parameters;

	/**
	 * Constructor
	 *
	 * @param string		$message	The Exception message to throw (must be a language variable).
	 * @param array			$parameters	The parameters to use with the language var.
	 * @param \Exception	$previous	The previous runtime_exception used for the runtime_exception chaining.
	 * @param integer		$code		The Exception code.
	 */
	public function __construct($message = "", array $parameters = array(), \Exception $previous = null, $code = 0)
	{
		$this->parameters = $parameters;

		parent::__construct($message, $code, $previous);
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_parameters()
	{
		return $this->parameters;
	}
}
