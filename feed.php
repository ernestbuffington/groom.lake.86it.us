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
* Idea and original RSS Feed 2.0 MOD (Version 1.0.8/9) by leviatan21
* Original MOD: http://www.groom.lake.86it.us/community/viewtopic.php?f=69&t=1214645
* MOD Author Profile: http://www.groom.lake.86it.us/community/memberlist.php?mode=viewprofile&u=345763
* MOD Author Homepage: http://www.mssti.com/an6023/
*
**/

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Exception\InvalidParameterException;

/**
* @ignore
**/
define('IN_PHPBB', true);
$an602_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($an602_root_path . 'common.' . $phpEx);

/** @var \an602\controller\helper $controller_helper */
$controller_helper = $an602_container->get('controller.helper');

$forum_id	= $request->variable('f', 0);
$topic_id	= $request->variable('t', 0);
$mode	= $request->variable('mode', '');

if ($forum_id !== 0)
{
	$url = $controller_helper->route('an602_feed_forum', array('forum_id' => $forum_id), false);
}
else if ($topic_id !== 0)
{
	$url = $controller_helper->route('an602_feed_topic', array('topic_id' => $topic_id), false);
}
else
{
	try
	{
		$url = $controller_helper->route('an602_feed_overall', array('mode' => $mode), false);
	}
	catch (InvalidParameterException $e)
	{
		$url = $controller_helper->route('an602_feed_index');
	}
}

$response = new RedirectResponse($url, 301);
$response->send();
