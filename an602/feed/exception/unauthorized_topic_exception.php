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

namespace an602\feed\exception;

class unauthorized_topic_exception extends unauthorized_exception
{
	public function __construct($topic_id, \Exception $previous = null, $code = 0)
	{
		parent::__construct('SORRY_AUTH_READ_TOPIC', array($topic_id), $previous, $code);
	}
}
