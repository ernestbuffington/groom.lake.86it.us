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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'AN602_ACL_CAT_ACTIONS'		=> 'Actions',
	'AN602_ACL_CAT_CONTENT'		=> 'Content',
	'AN602_ACL_CAT_FORUMS'		=> 'Forums',
	'AN602_ACL_CAT_MISC'			=> 'Misc',
	'AN602_ACL_CAT_PERMISSIONS'	=> 'Permissions',
	'AN602_ACL_CAT_PM'			=> 'Private messages',
	'AN602_ACL_CAT_POLLS'			=> 'Polls',
	'AN602_ACL_CAT_POST'			=> 'Post',
	'AN602_ACL_CAT_POST_ACTIONS'	=> 'Post actions',
	'AN602_ACL_CAT_POSTING'		=> 'Posting',
	'AN602_ACL_CAT_PROFILE'		=> 'Profile',
	'AN602_ACL_CAT_SETTINGS'		=> 'Settings',
	'AN602_ACL_CAT_TOPIC_ACTIONS'	=> 'Topic actions',
	'AN602_ACL_CAT_USER_GROUP'	=> 'Users &amp; Groups',
));

// User Permissions
$lang = array_merge($lang, array(
	'AN602_ACL_U_VIEWPROFILE'	=> 'Can view profiles, memberlist and online list',
	'AN602_ACL_U_CHGNAME'		=> 'Can change username',
	'AN602_ACL_U_CHGPASSWD'	=> 'Can change password',
	'AN602_ACL_U_CHGEMAIL'	=> 'Can change email address',
	'AN602_ACL_U_CHGAVATAR'	=> 'Can change avatar',
	'AN602_ACL_U_CHGGRP'		=> 'Can change default usergroup',
	'AN602_ACL_U_CHGPROFILEINFO'	=> 'Can change profile field information',

	'AN602_ACL_U_ATTACH'		=> 'Can attach files',
	'AN602_ACL_U_DOWNLOAD'	=> 'Can download files',
	'AN602_ACL_U_SAVEDRAFTS'	=> 'Can save drafts',
	'AN602_ACL_U_CHGCENSORS'	=> 'Can disable word censors',
	'AN602_ACL_U_SIG'			=> 'Can use signature',
	'AN602_ACL_U_EMOJI'		=> 'Can use emoji and rich text characters in topic title',

	'AN602_ACL_U_SENDPM'		=> 'Can send private messages',
	'AN602_ACL_U_MASSPM'		=> 'Can send private messages to multiple users',
	'AN602_ACL_U_MASSPM_GROUP'=> 'Can send private messages to groups',
	'AN602_ACL_U_READPM'		=> 'Can read private messages',
	'AN602_ACL_U_PM_EDIT'		=> 'Can edit own private messages',
	'AN602_ACL_U_PM_DELETE'	=> 'Can remove private messages from own folder',
	'AN602_ACL_U_PM_FORWARD'	=> 'Can forward private messages',
	'AN602_ACL_U_PM_EMAILPM'	=> 'Can email private messages',
	'AN602_ACL_U_PM_PRINTPM'	=> 'Can print private messages',
	'AN602_ACL_U_PM_ATTACH'	=> 'Can attach files in private messages',
	'AN602_ACL_U_PM_DOWNLOAD'	=> 'Can download files in private messages',
	'AN602_ACL_U_PM_BBCODE'	=> 'Can use BBCode in private messages',
	'AN602_ACL_U_PM_SMILIES'	=> 'Can use smilies in private messages',
	'AN602_ACL_U_PM_IMG'		=> 'Can use [img] BBCode tag in private messages',
	'AN602_ACL_U_PM_FLASH'	=> 'Can use [flash] BBCode tag in private messages',

	'AN602_ACL_U_SENDEMAIL'	=> 'Can send emails',
	'AN602_ACL_U_SENDIM'		=> 'Can send instant messages',
	'AN602_ACL_U_IGNOREFLOOD'	=> 'Can ignore flood limit',
	'AN602_ACL_U_HIDEONLINE'	=> 'Can hide online status',
	'AN602_ACL_U_VIEWONLINE'	=> 'Can view hidden online users',
	'AN602_ACL_U_SEARCH'		=> 'Can search board',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'AN602_ACL_F_LIST'		=> 'Can see forum',
	'AN602_ACL_F_LIST_TOPICS' => 'Can see topics',
	'AN602_ACL_F_READ'		=> 'Can read forum',
	'AN602_ACL_F_SEARCH'		=> 'Can search the forum',
	'AN602_ACL_F_SUBSCRIBE'	=> 'Can subscribe forum',
	'AN602_ACL_F_PRINT'		=> 'Can print topics',
	'AN602_ACL_F_EMAIL'		=> 'Can email topics',
	'AN602_ACL_F_BUMP'		=> 'Can bump topics',
	'AN602_ACL_F_USER_LOCK'	=> 'Can lock own topics',
	'AN602_ACL_F_DOWNLOAD'	=> 'Can download files',
	'AN602_ACL_F_REPORT'		=> 'Can report posts',

	'AN602_ACL_F_POST'		=> 'Can start new topics',
	'AN602_ACL_F_STICKY'		=> 'Can post stickies',
	'AN602_ACL_F_ANNOUNCE'	=> 'Can post announcements',
	'AN602_ACL_F_ANNOUNCE_GLOBAL'	=> 'Can post global announcements',
	'AN602_ACL_F_REPLY'		=> 'Can reply to topics',
	'AN602_ACL_F_EDIT'		=> 'Can edit own posts',
	'AN602_ACL_F_DELETE'		=> 'Can permanently delete own posts',
	'AN602_ACL_F_SOFTDELETE'	=> 'Can soft delete own posts<br /><em>Moderators, who have the approve posts permission, can restore soft deleted posts.</em>',
	'AN602_ACL_F_IGNOREFLOOD' => 'Can ignore flood limit',
	'AN602_ACL_F_POSTCOUNT'	=> 'Increment post counter<br /><em>Please note that this setting only affects new posts.</em>',
	'AN602_ACL_F_NOAPPROVE'	=> 'Can post without approval',

	'AN602_ACL_F_ATTACH'		=> 'Can attach files',
	'AN602_ACL_F_ICONS'		=> 'Can use topic/post icons',
	'AN602_ACL_F_BBCODE'		=> 'Can use BBCode',
	'AN602_ACL_F_FLASH'		=> 'Can use [flash] BBCode tag',
	'AN602_ACL_F_IMG'			=> 'Can use [img] BBCode tag',
	'AN602_ACL_F_SIGS'		=> 'Can use signatures',
	'AN602_ACL_F_SMILIES'		=> 'Can use smilies',

	'AN602_ACL_F_POLL'		=> 'Can create polls',
	'AN602_ACL_F_VOTE'		=> 'Can vote in polls',
	'AN602_ACL_F_VOTECHG'		=> 'Can change existing vote',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'AN602_ACL_M_EDIT'		=> 'Can edit posts',
	'AN602_ACL_M_DELETE'		=> 'Can permanently delete posts',
	'AN602_ACL_M_SOFTDELETE'	=> 'Can soft delete posts<br /><em>Moderators, who have the approve posts permission, can restore soft deleted posts.</em>',
	'AN602_ACL_M_APPROVE'		=> 'Can approve and restore posts',
	'AN602_ACL_M_REPORT'		=> 'Can close and delete reports',
	'AN602_ACL_M_CHGPOSTER'	=> 'Can change post author',

	'AN602_ACL_M_MOVE'	=> 'Can move topics',
	'AN602_ACL_M_LOCK'	=> 'Can lock topics',
	'AN602_ACL_M_SPLIT'	=> 'Can split topics',
	'AN602_ACL_M_MERGE'	=> 'Can merge topics',

	'AN602_ACL_M_INFO'		=> 'Can view post details',
	'AN602_ACL_M_WARN'		=> 'Can issue warnings<br /><em>This setting is only assigned globally. It is not forum based.</em>', // This moderator setting is only global (and not local)
	'AN602_ACL_M_PM_REPORT'	=> 'Can close and delete reports of private messages<br /><em>This setting is only assigned globally. It is not forum based.</em>', // This moderator setting is only global (and not local)
	'AN602_ACL_M_BAN'			=> 'Can manage bans<br /><em>This setting is only assigned globally. It is not forum based.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'AN602_ACL_A_BOARD'		=> 'Can alter board settings/check for updates',
	'AN602_ACL_A_SERVER'		=> 'Can alter server/communication settings',
	'AN602_ACL_A_JABBER'		=> 'Can alter Jabber settings',
	'AN602_ACL_A_PHPINFO'		=> 'Can view php settings',

	'AN602_ACL_A_FORUM'		=> 'Can manage forums',
	'AN602_ACL_A_FORUMADD'	=> 'Can add new forums',
	'AN602_ACL_A_FORUMDEL'	=> 'Can delete forums',
	'AN602_ACL_A_PRUNE'		=> 'Can prune forums',

	'AN602_ACL_A_ICONS'		=> 'Can alter topic/post icons and smilies',
	'AN602_ACL_A_WORDS'		=> 'Can alter word censors',
	'AN602_ACL_A_BBCODE'		=> 'Can define BBCode tags',
	'AN602_ACL_A_ATTACH'		=> 'Can alter attachment related settings',

	'AN602_ACL_A_USER'		=> 'Can manage users<br /><em>This also includes seeing the users browser agent within the viewonline list.</em>',
	'AN602_ACL_A_USERDEL'		=> 'Can delete/prune users',
	'AN602_ACL_A_GROUP'		=> 'Can manage groups',
	'AN602_ACL_A_GROUPADD'	=> 'Can add new groups',
	'AN602_ACL_A_GROUPDEL'	=> 'Can delete groups',
	'AN602_ACL_A_RANKS'		=> 'Can manage ranks',
	'AN602_ACL_A_PROFILE'		=> 'Can manage custom profile fields',
	'AN602_ACL_A_NAMES'		=> 'Can manage disallowed names',
	'AN602_ACL_A_BAN'			=> 'Can manage bans',

	'AN602_ACL_A_VIEWAUTH'	=> 'Can view permission masks',
	'AN602_ACL_A_AUTHGROUPS'	=> 'Can alter permissions for individual groups',
	'AN602_ACL_A_AUTHUSERS'	=> 'Can alter permissions for individual users',
	'AN602_ACL_A_FAUTH'		=> 'Can alter forum permission class',
	'AN602_ACL_A_MAUTH'		=> 'Can alter moderator permission class',
	'AN602_ACL_A_AAUTH'		=> 'Can alter admin permission class',
	'AN602_ACL_A_UAUTH'		=> 'Can alter user permission class',
	'AN602_ACL_A_ROLES'		=> 'Can manage roles',
	'AN602_ACL_A_SWITCHPERM'	=> 'Can use others permissions',

	'AN602_ACL_A_STYLES'		=> 'Can manage styles',
	'AN602_ACL_A_EXTENSIONS'	=> 'Can manage extensions',
	'AN602_ACL_A_VIEWLOGS'	=> 'Can view logs',
	'AN602_ACL_A_CLEARLOGS'	=> 'Can clear logs',
	'AN602_ACL_A_MODULES'		=> 'Can manage modules',
	'AN602_ACL_A_LANGUAGE'	=> 'Can manage language packs',
	'AN602_ACL_A_EMAIL'		=> 'Can send mass email',
	'AN602_ACL_A_BOTS'		=> 'Can manage bots',
	'AN602_ACL_A_REASONS'		=> 'Can manage report/denial reasons',
	'AN602_ACL_A_BACKUP'		=> 'Can backup/restore database',
	'AN602_ACL_A_SEARCH'		=> 'Can manage search backends and settings',
));
