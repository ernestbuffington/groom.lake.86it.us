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
* @ignore
*/
if (!defined('IN_AN602'))
{
	exit;
}

/**
* valid external constants:
* AN602_MSG_HANDLER
* AN602_DB_NEW_LINK
* AN602_ROOT_PATH
* AN602_ADMIN_PATH
*/

// AN602 Version
@define('AN602_VERSION', '3.3.8');

// QA-related
// define('AN602_QA', 1);

// User related
define('ANONYMOUS', 1);

define('USER_ACTIVATION_NONE', 0);
define('USER_ACTIVATION_SELF', 1);
define('USER_ACTIVATION_ADMIN', 2);
define('USER_ACTIVATION_DISABLE', 3);

define('AVATAR_UPLOAD', 1);
define('AVATAR_REMOTE', 2);
define('AVATAR_GALLERY', 3);

define('USER_NORMAL', 0);
define('USER_INACTIVE', 1);
define('USER_IGNORE', 2);
define('USER_FOUNDER', 3);

define('INACTIVE_REGISTER', 1); // Newly registered account
define('INACTIVE_PROFILE', 2); // Profile details changed
define('INACTIVE_MANUAL', 3); // Account deactivated by administrator
define('INACTIVE_REMIND', 4); // Forced user account reactivation

// ACL
define('AN602_ACL_NEVER', 0);
define('AN602_ACL_YES', 1);
define('AN602_ACL_NO', -1);

// Login error codes
define('LOGIN_CONTINUE', 1);
define('LOGIN_BREAK', 2);
define('LOGIN_SUCCESS', 3);
define('LOGIN_SUCCESS_CREATE_PROFILE', 20);
define('LOGIN_SUCCESS_LINK_PROFILE', 21);
define('LOGIN_ERROR_USERNAME', 10);
define('LOGIN_ERROR_PASSWORD', 11);
define('LOGIN_ERROR_ACTIVE', 12);
define('LOGIN_ERROR_ATTEMPTS', 13);
define('LOGIN_ERROR_EXTERNAL_AUTH', 14);
define('LOGIN_ERROR_PASSWORD_CONVERT', 15);

// Maximum login attempts
// The value is arbitrary, but it has to fit into the user_login_attempts field.
define('LOGIN_ATTEMPTS_MAX', 100);

// Group settings
define('GROUP_OPEN', 0);
define('GROUP_CLOSED', 1);
define('GROUP_HIDDEN', 2);
define('GROUP_SPECIAL', 3);
define('GROUP_FREE', 4);

// Forum/Topic states
define('FORUM_CAT', 0);
define('FORUM_POST', 1);
define('FORUM_LINK', 2);
define('ITEM_UNLOCKED', 0);
define('ITEM_LOCKED', 1);
define('ITEM_MOVED', 2);

define('ITEM_UNAPPROVED', 0); // => has not yet been approved
define('ITEM_APPROVED', 1); // => has been approved, and has not been soft deleted
define('ITEM_DELETED', 2); // => has been soft deleted
define('ITEM_REAPPROVE', 3); // => has been edited and needs to be re-approved

// Forum Flags
define('FORUM_FLAG_LINK_TRACK', 1);
define('FORUM_FLAG_PRUNE_POLL', 2);
define('FORUM_FLAG_PRUNE_ANNOUNCE', 4);
define('FORUM_FLAG_PRUNE_STICKY', 8);
define('FORUM_FLAG_ACTIVE_TOPICS', 16);
define('FORUM_FLAG_POST_REVIEW', 32);
define('FORUM_FLAG_QUICK_REPLY', 64);

// Forum Options... sequential order. Modifications should begin at number 10 (number 29 is maximum)
define('FORUM_OPTION_FEED_NEWS', 1);
define('FORUM_OPTION_FEED_EXCLUDE', 2);

// Optional text flags
define('OPTION_FLAG_BBCODE', 1);
define('OPTION_FLAG_SMILIES', 2);
define('OPTION_FLAG_LINKS', 4);

// Topic types
define('POST_NORMAL', 0);
define('POST_STICKY', 1);
define('POST_ANNOUNCE', 2);
define('POST_GLOBAL', 3);

// Lastread types
define('TRACK_NORMAL', 0);
define('TRACK_POSTED', 1);

// Notify methods
define('NOTIFY_EMAIL', 0);
define('NOTIFY_IM', 1);
define('NOTIFY_BOTH', 2);

// Notify status
define('NOTIFY_YES', 0);
define('NOTIFY_NO', 1);

// Email Priority Settings
define('MAIL_LOW_PRIORITY', 4);
define('MAIL_NORMAL_PRIORITY', 3);
define('MAIL_HIGH_PRIORITY', 2);

// Log types
define('LOG_ADMIN', 0);
define('LOG_MOD', 1);
define('LOG_CRITICAL', 2);
define('LOG_USERS', 3);

// Private messaging - Do NOT change these values
define('PRIVMSGS_HOLD_BOX', -4);
define('PRIVMSGS_NO_BOX', -3);
define('PRIVMSGS_OUTBOX', -2);
define('PRIVMSGS_SENTBOX', -1);
define('PRIVMSGS_INBOX', 0);

// Full Folder Actions
define('FULL_FOLDER_NONE', -3);
define('FULL_FOLDER_DELETE', -2);
define('FULL_FOLDER_HOLD', -1);

// Download Modes - Attachments
define('INLINE_LINK', 1);
// This mode is only used internally to allow modders extending the attachment functionality
define('PHYSICAL_LINK', 2);

// Confirm types
define('CONFIRM_REG', 1);
define('CONFIRM_LOGIN', 2);
define('CONFIRM_POST', 3);
define('CONFIRM_REPORT', 4);

// Categories - Attachments
define('ATTACHMENT_CATEGORY_NONE', 0);
define('ATTACHMENT_CATEGORY_IMAGE', 1); // Inline Images
define('ATTACHMENT_CATEGORY_THUMB', 4); // Not used within the database, only while displaying posts

// BBCode UID length
define('BBCODE_UID_LEN', 8);

// Number of core BBCodes
define('NUM_CORE_BBCODES', 12);
define('NUM_PREDEFINED_BBCODES', 22);

// BBCode IDs
define('BBCODE_ID_QUOTE', 0);
define('BBCODE_ID_B', 1);
define('BBCODE_ID_I', 2);
define('BBCODE_ID_URL', 3);
define('BBCODE_ID_IMG', 4);
define('BBCODE_ID_SIZE', 5);
define('BBCODE_ID_COLOR', 6);
define('BBCODE_ID_U', 7);
define('BBCODE_ID_CODE', 8);
define('BBCODE_ID_LIST', 9);
define('BBCODE_ID_EMAIL', 10);
define('BBCODE_ID_FLASH', 11);
define('BBCODE_ID_ATTACH', 12);

// BBCode hard limit
define('BBCODE_LIMIT', 1511);

// Smiley hard limit
define('SMILEY_LIMIT', 1000);

// Magic url types
define('MAGIC_URL_EMAIL', 1);
define('MAGIC_URL_FULL', 2);
define('MAGIC_URL_LOCAL', 3);
define('MAGIC_URL_WWW', 4);

// Profile Field Types
define('FIELD_INT', 1);
define('FIELD_STRING', 2);
define('FIELD_TEXT', 3);
define('FIELD_BOOL', 4);
define('FIELD_DROPDOWN', 5);
define('FIELD_DATE', 6);

// referer validation
define('REFERER_VALIDATE_NONE', 0);
define('REFERER_VALIDATE_HOST', 1);
define('REFERER_VALIDATE_PATH', 2);

// an602_chmod() permissions
@define('CHMOD_ALL', 7);      // @deprecated 3.2.10
@define('CHMOD_READ', 4);     // @deprecated 3.2.10
@define('CHMOD_WRITE', 2);    // @deprecated 3.2.10
@define('CHMOD_EXECUTE', 1);  // @deprecated 3.2.10

// Captcha code length
define('CAPTCHA_MIN_CHARS', 4);
define('CAPTCHA_MAX_CHARS', 7);

// Additional constants
define('VOTE_CONVERTED', 127);

// BC global FTW
global $an602_table_prefix;

// Table names
define('AN602_ACL_AN602_GROUPS_TABLE',		   $an602_table_prefix . 'acl_groups');
define('AN602_ACL_OPTIONS_TABLE',			   $an602_table_prefix . 'acl_options');
define('AN602_ACL_ROLES_DATA_TABLE',		   $an602_table_prefix . 'acl_roles_data');
define('AN602_ACL_ROLES_TABLE',			       $an602_table_prefix . 'acl_roles');
define('AN602_ACL_AN602_USERS_TABLE',		   $an602_table_prefix . 'acl_users');
define('AN602_ATTACHMENTS_TABLE',			   $an602_table_prefix . 'attachments');
define('AN602_BANLIST_TABLE',				   $an602_table_prefix . 'banlist');
define('AN602_BBCODES_TABLE',				   $an602_table_prefix . 'bbcodes');
define('AN602_BOOKMARKS_TABLE',			       $an602_table_prefix . 'bookmarks');
define('AN602_BOTS_TABLE',				       $an602_table_prefix . 'bots');
if (!defined('AN602_CONFIG_TABLE'))
{
	define('AN602_CONFIG_TABLE',			    $an602_table_prefix . 'config');
}
define('AN602_CONFIG_TAN602_EXT_TABLE',			$an602_table_prefix . 'config_text');
define('AN602_CONFIRM_TABLE',				    $an602_table_prefix . 'confirm');
define('AN602_DISALLOW_TABLE',			        $an602_table_prefix . 'disallow');
define('AN602_DRAFTS_TABLE',				    $an602_table_prefix . 'drafts');
define('AN602_EXT_TABLE',					    $an602_table_prefix . 'ext');
define('AN602_EXTENSIONS_TABLE',			    $an602_table_prefix . 'extensions');
define('AN602_EXTENSION_AN602_GROUPS_TABLE',	$an602_table_prefix . 'extension_groups');
define('AN602_FORUMS_TABLE',				    $an602_table_prefix . 'forums');
define('AN602_FORUMS_ACCESS_TABLE',		        $an602_table_prefix . 'forums_access');
define('AN602_FORUMS_TRACK_TABLE',		        $an602_table_prefix . 'forums_track');
define('AN602_FORUMS_WATCH_TABLE',		        $an602_table_prefix . 'forums_watch');
define('AN602_GROUPS_TABLE',				    $an602_table_prefix . 'groups');
define('AN602_ICONS_TABLE',				        $an602_table_prefix . 'icons');
define('AN602_LANG_TABLE',				        $an602_table_prefix . 'lang');
define('AN602_LOG_TABLE',					    $an602_table_prefix . 'log');
define('AN602_LOGIN_ATTEMPT_TABLE',		        $an602_table_prefix . 'login_attempts');
define('AN602_MIGRATIONS_TABLE',			    $an602_table_prefix . 'migrations');
define('AN602_MODERATOR_CACHE_TABLE',		    $an602_table_prefix . 'moderator_cache');
define('AN602_MODULES_TABLE',				    $an602_table_prefix . 'modules');
define('AN602_NOTIFICATION_TYPES_TABLE',	    $an602_table_prefix . 'notification_types');
define('AN602_NOTIFICATIONS_TABLE',		        $an602_table_prefix . 'notifications');
define('AN602_POLL_OPTIONS_TABLE',		        $an602_table_prefix . 'poll_options');
define('AN602_POLL_VOTES_TABLE',			    $an602_table_prefix . 'poll_votes');
define('AN602_POSTS_TABLE',				        $an602_table_prefix . 'posts');
define('AN602_PRIVMSGS_TABLE',			        $an602_table_prefix . 'privmsgs');
define('AN602_PRIVMSGS_FOLDER_TABLE',		    $an602_table_prefix . 'privmsgs_folder');
define('AN602_PRIVMSGS_RULES_TABLE',		    $an602_table_prefix . 'privmsgs_rules');
define('AN602_PRIVMSGS_TO_TABLE',			    $an602_table_prefix . 'privmsgs_to');
define('AN602_PROFILE_FIELDS_TABLE',		    $an602_table_prefix . 'profile_fields');
define('AN602_PROFILE_FIELDS_DATA_TABLE',	    $an602_table_prefix . 'profile_fields_data');
define('AN602_PROFILE_FIELDS_LANG_TABLE',	    $an602_table_prefix . 'profile_fields_lang');
define('AN602_PROFILE_LANG_TABLE',		        $an602_table_prefix . 'profile_lang');
define('AN602_RANKS_TABLE',				        $an602_table_prefix . 'ranks');
define('AN602_REPORTS_TABLE',				    $an602_table_prefix . 'reports');
define('AN602_REPORTS_REASONS_TABLE',		    $an602_table_prefix . 'reports_reasons');
define('AN602_SEARCH_RESULTS_TABLE',		    $an602_table_prefix . 'search_results');
define('AN602_SEARCH_WORDLIST_TABLE',		    $an602_table_prefix . 'search_wordlist');
define('AN602_SEARCH_WORDMATCH_TABLE',	        $an602_table_prefix . 'search_wordmatch');
define('AN602_SESSIONS_TABLE',			        $an602_table_prefix . 'sessions');
define('AN602_SESSIONS_KEYS_TABLE',		        $an602_table_prefix . 'sessions_keys');
define('AN602_SITELIST_TABLE',			        $an602_table_prefix . 'sitelist');
define('AN602_SMILIES_TABLE',				    $an602_table_prefix . 'smilies');
define('AN602_SPHINX_TABLE',				    $an602_table_prefix . 'sphinx');
define('AN602_STYLES_TABLE',				    $an602_table_prefix . 'styles');
define('AN602_STYLES_TEMPLATE_TABLE',		    $an602_table_prefix . 'styles_template');
define('AN602_STYLES_TEMPLATE_DATA_TABLE',      $an602_table_prefix . 'styles_template_data');
define('AN602_STYLES_THEME_TABLE',		        $an602_table_prefix . 'styles_theme');
define('AN602_STYLES_IMAGESET_TABLE',		    $an602_table_prefix . 'styles_imageset');
define('AN602_STYLES_IMAGESET_DATA_TABLE',      $an602_table_prefix . 'styles_imageset_data');
define('AN602_TEAMPAGE_TABLE',			        $an602_table_prefix . 'teampage');
define('AN602_TOPICS_TABLE',				    $an602_table_prefix . 'topics');
define('AN602_TOPICS_POSTED_TABLE',		        $an602_table_prefix . 'topics_posted');
define('AN602_TOPICS_TRACK_TABLE',		        $an602_table_prefix . 'topics_track');
define('AN602_TOPICS_WATCH_TABLE',		        $an602_table_prefix . 'topics_watch');
define('AN602_USER_GROUP_TABLE',			    $an602_table_prefix . 'user_group');
define('AN602_USER_NOTIFICATIONS_TABLE',	    $an602_table_prefix . 'user_notifications');
define('AN602_USERS_TABLE',				        $an602_table_prefix . 'users');
define('AN602_WARNINGS_TABLE',			        $an602_table_prefix . 'warnings');
define('AN602_WORDS_TABLE',				        $an602_table_prefix . 'words');
define('AN602_ZEBRA_TABLE',				        $an602_table_prefix . 'zebra');

// Additional AN602 tables
