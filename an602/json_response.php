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

namespace an602;

/**
* JSON class
*/
class json_response
{
	/**
	 * Send the data to the client and exit the script.
	 *
	 * @param array $data Any additional data to send.
	 * @param bool $exit Will exit the script if true.
	 */
	public function send($data, $exit = true)
	{
		header('Content-Type: application/json');
		echo json_encode($data);

		if ($exit)
		{
			garbage_collection();
			exit_handler();
		}
	}
}
