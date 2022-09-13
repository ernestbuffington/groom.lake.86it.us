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

namespace an602\db\migration;

/**
* The migrator is responsible for applying new migrations in the correct order.
*/
class exception extends \Exception
{
	/**
	* Extra parameters sent to exception to aid in debugging
	* @var array
	*/
	protected $parameters;

	/**
	* Throw an exception.
	*
	* First argument is the error message.
	* Additional arguments will be output with the error message.
	*/
	public function __construct()
	{
		$parameters = func_get_args();
		$message = array_shift($parameters);
		parent::__construct($message);

		$this->parameters = $parameters;
	}

	/**
	* Output the error as a string
	*
	* @return string
	*/
	public function __toString()
	{
		return $this->message . ': ' . var_export($this->parameters, true);
	}

	/**
	* Get the parameters
	*
	* @return array
	*/
	public function getParameters()
	{
		return $this->parameters;
	}

	/**
	* Get localised message (with $user->lang())
	*
	* @param \an602\user $user
	* @return string
	*/
	public function getLocalisedMessage(\an602\user $user)
	{
		$parameters = $this->getParameters();
		array_unshift($parameters, $this->getMessage());

		return call_user_func_array(array($user, 'lang'), $parameters);
	}
}
