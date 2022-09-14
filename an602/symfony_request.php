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

namespace an602;

use Symfony\Component\HttpFoundation\Request;

/**
 * WARNING: The Symfony request does not escape the input and should be used very carefully
 * prefer the phpbb request as possible
 */
class symfony_request extends Request
{
	/**
	* Constructor
	*
	* @param \an602\request\request_interface $an602_request
	*/
	public function __construct(\an602\request\request_interface $an602_request)
	{
		$get_parameters = $an602_request->get_super_global(\an602\request\request_interface::GET);
		$post_parameters = $an602_request->get_super_global(\an602\request\request_interface::POST);
		$server_parameters = $an602_request->get_super_global(\an602\request\request_interface::SERVER);
		$files_parameters = $an602_request->get_super_global(\an602\request\request_interface::FILES);
		$cookie_parameters = $an602_request->get_super_global(\an602\request\request_interface::COOKIE);

		parent::__construct($get_parameters, $post_parameters, array(), $cookie_parameters, $files_parameters, $server_parameters);
	}
}
