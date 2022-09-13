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
* Class to handle viewonline related tasks
*/
class viewonline_helper
{
	/** @var \an602\filesystem\filesystem_interface */
	protected $filesystem;

	/**
	* @param \an602\filesystem\filesystem_interface $filesystem	AN602's filesystem service
	*/
	public function __construct(\an602\filesystem\filesystem_interface $filesystem)
	{
		$this->filesystem = $filesystem;
	}

	/**
	* Get user page
	*
	* @param string $session_page User's session page
	* @return array Match array filled by preg_match()
	*/
	public function get_user_page($session_page)
	{
		$session_page = $this->filesystem->clean_path($session_page);
		if (strpos($session_page, './') === 0)
		{
			$session_page = substr($session_page, 2);
		}

		preg_match('#^((\.\./)*([a-z0-9/_-]+))#i', $session_page, $on_page);
		if (empty($on_page))
		{
			$on_page[1] = '';
		}

		return $on_page;
	}
}
