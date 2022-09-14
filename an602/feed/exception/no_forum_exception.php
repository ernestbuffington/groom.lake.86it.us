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

namespace an602\feed\exception;

class no_forum_exception extends feed_unavailable_exception
{
	public function __construct($forum_id, \Exception $previous = null, $code = 0)
	{
		parent::__construct('NO_FORUM', array($forum_id), $previous, $code);
	}
}
