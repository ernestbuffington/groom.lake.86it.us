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

namespace an602\feed;

/**
 * Modified quote_helper for feeds (basically just removing all attributes)
 */
class quote_helper extends \an602\textformatter\s9e\quote_helper
{
	/**
	 * {@inheritdoc}
	 */
	public function inject_metadata($xml)
	{
		// In feeds we don't want any attributes, so delete all of them
		return \s9e\TextFormatter\Utils::replaceAttributes(
			$xml,
			'QUOTE',
			function ()
			{
				return [];
			}
		);
	}
}
