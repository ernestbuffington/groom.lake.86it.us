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
define('IN_AN602', true);
$an602_root_path = (defined('AN602_ROOT_PATH')) ? AN602_ROOT_PATH : './../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

// Thank you sun.
if (isset($_SERVER['CONTENT_TYPE']))
{
	if ($_SERVER['CONTENT_TYPE'] === 'application/x-java-archive')
	{
		exit;
	}
}
else if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Java') !== false)
{
	exit;
}

if (isset($_GET['avatar']))
{
	require($an602_root_path . 'includes/startup.' . $phpEx);

	require($an602_root_path . 'an602/class_loader.' . $phpEx);
	$an602_class_loader = new \an602\class_loader('an602\\', "{$an602_root_path}an602/", $phpEx);
	$an602_class_loader->register();

	$an602_config_php_file = new \an602\config_php_file($an602_root_path, $phpEx);
	extract($an602_config_php_file->get_all());

	if (!defined('AN602_ENVIRONMENT'))
	{
		@define('AN602_ENVIRONMENT', 'production');
	}

	if (!defined('AN602_INSTALLED') || empty($dbms) || empty($acm_type))
	{
		exit;
	}

	require($an602_root_path . 'includes/constants.' . $phpEx);
	require($an602_root_path . 'includes/functions.' . $phpEx);
	require($an602_root_path . 'includes/functions_download' . '.' . $phpEx);
	require($an602_root_path . 'includes/utf/utf_tools.' . $phpEx);

	// Setup class loader first
	$an602_class_loader_ext = new \an602\class_loader('\\', "{$an602_root_path}ext/", $phpEx);
	$an602_class_loader_ext->register();

	// Set up container
	$an602_container_builder = new \an602\di\container_builder($an602_root_path, $phpEx);
	$an602_container = $an602_container_builder->with_config($an602_config_php_file)->get_container();

	$an602_class_loader->set_cache($an602_container->get('cache.driver'));
	$an602_class_loader_ext->set_cache($an602_container->get('cache.driver'));

	// set up caching
	/* @var $cache \an602\cache\service */
	$cache = $an602_container->get('cache');

	/* @var $an602_dispatcher \an602\event\dispatcher */
	$an602_dispatcher = $an602_container->get('dispatcher');

	/* @var $request \an602\request\request_interface */
	$request	= $an602_container->get('request');

	/* @var $db \an602\db\driver\driver_interface */
	$db			= $an602_container->get('dbal.conn');

	/* @var $an602_log \an602\log\log_interface */
	$an602_log	= $an602_container->get('log');

	unset($dbpasswd);

	/* @var $config \an602\config\config */
	$config = $an602_container->get('config');

	// load extensions
	/* @var $an602_extension_manager \an602\extension\manager */
	$an602_extension_manager = $an602_container->get('ext.manager');

	// worst-case default
	$browser = strtolower($request->header('User-Agent', 'msie 6.0'));

	/* @var $an602_avatar_manager \an602\avatar\manager */
	$an602_avatar_manager = $an602_container->get('avatar.manager');

	$filename = $request->variable('avatar', '');
	$avatar_group = false;
	$exit = false;

	if (isset($filename[0]) && $filename[0] === 'g')
	{
		$avatar_group = true;
		$filename = substr($filename, 1);
	}

	// '==' is not a bug - . as the first char is as bad as no dot at all
	if (strpos($filename, '.') == false)
	{
		send_status_line(403, 'Forbidden');
		$exit = true;
	}

	if (!$exit)
	{
		$ext		= substr(strrchr($filename, '.'), 1);
		$stamp		= (int) substr(stristr($filename, '_'), 1);
		$filename	= (int) $filename;
		$exit = set_modified_headers($stamp, $browser);
	}
	if (!$exit && !in_array($ext, array('png', 'gif', 'jpg', 'jpeg')))
	{
		// no way such an avatar could exist. They are not following the rules, stop the show.
		send_status_line(403, 'Forbidden');
		$exit = true;
	}


	if (!$exit)
	{
		if (!$filename)
		{
			// no way such an avatar could exist. They are not following the rules, stop the show.
			send_status_line(403, 'Forbidden');
		}
		else
		{
			send_avatar_to_browser(($avatar_group ? 'g' : '') . $filename . '.' . $ext, $browser);
		}
	}
	file_gc();
}

// implicit else: we are not in avatar mode
include($an602_root_path . 'common.' . $phpEx);
require($an602_root_path . 'includes/functions_download' . '.' . $phpEx);

$attach_id = $request->variable('id', 0);
$mode = $request->variable('mode', '');
$thumbnail = $request->variable('t', false);

// Start session management, do not update session page.
$user->session_begin(false);
$auth->acl($user->data);
$user->setup('viewtopic');

$an602_content_visibility = $an602_container->get('content.visibility');

if (!$config['allow_attachments'] && !$config['allow_pm_attach'])
{
	send_status_line(404, 'Not Found');
	trigger_error('ATTACHMENT_FUNCTIONALITY_DISABLED');
}

if (!$attach_id)
{
	send_status_line(404, 'Not Found');
	trigger_error('NO_ATTACHMENT_SELECTED');
}

$sql = 'SELECT attach_id, post_msg_id, topic_id, in_message, poster_id, is_orphan, physical_filename, real_filename, extension, mimetype, filesize, filetime
	FROM ' . AN602_ATTACHMENTS_TABLE . "
	WHERE attach_id = $attach_id";
$result = $db->sql_query($sql);
$attachment = $db->sql_fetchrow($result);
$db->sql_freeresult($result);

if (!$attachment)
{
	send_status_line(404, 'Not Found');
	trigger_error('ERROR_NO_ATTACHMENT');
}
else if (!download_allowed())
{
	send_status_line(403, 'Forbidden');
	trigger_error($user->lang['LINKAGE_FORBIDDEN']);
}
else
{
	$attachment['physical_filename'] = utf8_basename($attachment['physical_filename']);

	if (!$attachment['in_message'] && !$config['allow_attachments'] || $attachment['in_message'] && !$config['allow_pm_attach'])
	{
		send_status_line(404, 'Not Found');
		trigger_error('ATTACHMENT_FUNCTIONALITY_DISABLED');
	}

	if ($attachment['is_orphan'])
	{
		// We allow admins having attachment permissions to see orphan attachments...
		$own_attachment = ($auth->acl_get('a_attach') || $attachment['poster_id'] == $user->data['user_id']) ? true : false;

		if (!$own_attachment || ($attachment['in_message'] && !$auth->acl_get('u_pm_download')) || (!$attachment['in_message'] && !$auth->acl_get('u_download')))
		{
			send_status_line(404, 'Not Found');
			trigger_error('ERROR_NO_ATTACHMENT');
		}

		// Obtain all extensions...
		$extensions = $cache->obtain_attach_extensions(true);
	}
	else
	{
		if (!$attachment['in_message'])
		{
			an602_download_handle_forum_auth($db, $auth, $attachment['topic_id']);

			$sql = 'SELECT forum_id, poster_id, post_visibility
				FROM ' . AN602_POSTS_TABLE . '
				WHERE post_id = ' . (int) $attachment['post_msg_id'];
			$result = $db->sql_query($sql);
			$post_row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			if (!$post_row || !$an602_content_visibility->is_visible('post', $post_row['forum_id'], $post_row))
			{
				// Attachment of a soft deleted post and the user is not allowed to see the post
				send_status_line(404, 'Not Found');
				trigger_error('ERROR_NO_ATTACHMENT');
			}
		}
		else
		{
			// Attachment is in a private message.
			$post_row = array('forum_id' => false);
			an602_download_handle_pm_auth($db, $auth, $user->data['user_id'], $attachment['post_msg_id']);
		}

		$extensions = array();
		if (!extension_allowed($post_row['forum_id'], $attachment['extension'], $extensions))
		{
			send_status_line(403, 'Forbidden');
			trigger_error(sprintf($user->lang['EXTENSION_DISABLED_AFTER_POSTING'], $attachment['extension']));
		}
	}

	$download_mode = (int) $extensions[$attachment['extension']]['download_mode'];
	$display_cat = $extensions[$attachment['extension']]['display_cat'];

	if (($display_cat == ATTACHMENT_CATEGORY_IMAGE || $display_cat == ATTACHMENT_CATEGORY_THUMB) && !$user->optionget('viewimg'))
	{
		$display_cat = ATTACHMENT_CATEGORY_NONE;
	}

	/**
	* Event to modify data before sending file to browser
	*
	* @event core.download_file_send_to_browser_before
	* @var	int		attach_id			The attachment ID
	* @var	array	attachment			Array with attachment data
	* @var	int		display_cat			Attachment category
	* @var	int		download_mode		File extension specific download mode
	* @var	array	extensions			Array with file extensions data
	* @var	string	mode				Download mode
	* @var	bool	thumbnail			Flag indicating if the file is a thumbnail
	* @since 3.1.6-RC1
	* @changed 3.1.7-RC1	Fixing wrong name of a variable (replacing "extension" by "extensions")
	*/
	$vars = array(
		'attach_id',
		'attachment',
		'display_cat',
		'download_mode',
		'extensions',
		'mode',
		'thumbnail',
	);
	extract($an602_dispatcher->trigger_event('core.download_file_send_to_browser_before', compact($vars)));

	if ($thumbnail)
	{
		$attachment['physical_filename'] = 'thumb_' . $attachment['physical_filename'];
	}
	else if ($display_cat == ATTACHMENT_CATEGORY_NONE && !$attachment['is_orphan'] && !an602_http_byte_range($attachment['filesize']))
	{
		// Update download count
		an602_increment_downloads($db, $attachment['attach_id']);
	}

	if ($display_cat == ATTACHMENT_CATEGORY_IMAGE && $mode === 'view' && (strpos($attachment['mimetype'], 'image') === 0) && (strpos(strtolower($user->browser), 'msie') !== false) && !an602_is_greater_ie_version($user->browser, 7))
	{
		wrap_img_in_html(append_sid($an602_root_path . 'download/file.' . $phpEx, 'id=' . $attachment['attach_id']), $attachment['real_filename']);
		file_gc();
	}
	else
	{
		// Determine the 'presenting'-method
		if ($download_mode == PHYSICAL_LINK)
		{
			// This presenting method should no longer be used
			if (!@is_dir($an602_root_path . $config['upload_path']))
			{
				send_status_line(500, 'Internal Server Error');
				trigger_error($user->lang['PHYSICAL_DOWNLOAD_NOT_POSSIBLE']);
			}

			redirect($an602_root_path . $config['upload_path'] . '/' . $attachment['physical_filename']);
			file_gc();
		}
		else
		{
			send_file_to_browser($attachment, $config['upload_path'], $display_cat);
			file_gc();
		}
	}
}
