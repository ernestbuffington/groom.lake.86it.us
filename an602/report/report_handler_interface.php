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

namespace an602\report;

interface report_handler_interface
{
	/**
	 * Reports a message
	 *
	 * @param int		$id
	 * @param int		$reason_id
	 * @param string	$report_text
	 * @param int		$user_notify
	 * @return null
	 * @throws \an602\report\exception\empty_report_exception		when the given report is empty
	 * @throws \an602\report\exception\already_reported_exception	when the entity is already reported
	 * @throws \an602\report\exception\entity_not_found_exception	when the entity does not exist or the user does not have viewing permissions for it
	 * @throws \an602\report\exception\invalid_report_exception		when the entity cannot be reported for some other reason
	 */
	public function add_report($id, $reason_id, $report_text, $user_notify);

	/**
	 * Checks if the message is reportable
	 *
	 * @param int	$id
	 * @return null
	 * @throws \an602\report\exception\already_reported_exception	when the entity is already reported
	 * @throws \an602\report\exception\entity_not_found_exception	when the entity does not exist or the user does not have viewing permissions for it
	 * @throws \an602\report\exception\invalid_report_exception		when the entity cannot be reported for some other reason
	 */
	public function validate_report_request($id);
}
