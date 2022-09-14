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

namespace an602\mimetype;

interface guesser_interface
{
	/**
	* Returns whether this guesser is supported on the current OS
	*
	* @return bool True if guesser is supported, false if not
	*/
	public function is_supported();

	/**
	* Guess mimetype of supplied file
	*
	* @param string $file Path to file
	* @param string $file_name The real file name
	*
	* @return string Guess for mimetype of file
	*/
	public function guess($file, $file_name = '');

	/**
	* Get the guesser priority
	*
	* @return int Guesser priority
	*/
	public function get_priority();

	/**
	* Set the guesser priority
	*
	* @param int $priority Guesser priority
	*
	* @return void
	*/
	public function set_priority($priority);
}
