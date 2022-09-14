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

/**
* DO NOT CHANGE
*/
if (!defined('IN_AN602'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Here you can email a message to either all of your users or all users of a specific group <strong>having the option to receive mass emails enabled</strong>. To achieve this an email will be sent out to the administrative email address supplied, with a blind carbon copy sent to all recipients. The default setting is to only include 20 recipients in such an email, for more recipients more emails will be sent. If you are emailing a large group of people please be patient after submitting and do not stop the page halfway through. It is normal for a mass emailing to take a long time, you will be notified when the script has completed.',
	'ALL_USERS'						=> 'All users',

	'COMPOSE'				=> 'Compose',

	'EMAIL_SEND_ERROR'		=> 'There were one or more errors while sending the email. Please check the %sError log%s for detailed error messages.',
	'EMAIL_SENT'			=> 'This message has been sent.',
	'EMAIL_SENT_QUEUE'		=> 'This message has been queued for sending.',

	'LOG_SESSION'			=> 'Log mail session to critical log',

	'SEND_IMMEDIATELY'		=> 'Send immediately',
	'SEND_TO_GROUP'			=> 'Send to group',
	'SEND_TO_USERS'			=> 'Send to users',
	'SEND_TO_USERS_EXPLAIN'	=> 'Entering names here will override any group selected above. Enter each username on a new line.',

	'MAIL_BANNED'			=> 'Mail banned users',
	'MAIL_BANNED_EXPLAIN'	=> 'When sending a mass email to a group you can select here whether banned users will also receive the email.',
	'MAIL_HIGH_PRIORITY'	=> 'High',
	'MAIL_LOW_PRIORITY'		=> 'Low',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Mail priority',
	'MASS_MESSAGE'			=> 'Your message',
	'MASS_MESSAGE_EXPLAIN'	=> 'Please note that you may enter only plain text. All markup will be removed before sending.',

	'NO_EMAIL_MESSAGE'		=> 'You must enter a message.',
	'NO_EMAIL_SUBJECT'		=> 'You must specify a subject for your message.',
));
