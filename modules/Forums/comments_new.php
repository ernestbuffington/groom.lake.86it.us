<?php
/*======================================================================= 
  PHP-Nuke Titanium | Nuke-Evolution Xtreme : PHP-Nuke Web Portal System
 =======================================================================*/


/***************************************************************************
 *                             comments_new.php
 *                            -------------------
 *
 *   PHPNuke Ported Arcade - http://www.nukearcade.com
 *   Original Arcade Mod phpBB by giefca - http://www.gf-phpbb.com
 *
 ***************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       09/20/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
    die('You can\'t access this file directly...');
}

if ($popup != "1"){
    $titanium_module_name = basename(dirname(__FILE__));
    require("modules/".$titanium_module_name."/nukebb.php");
}
else
{
    $phpbb2_root_path = NUKE_FORUMS_DIR;
}

define('IN_PHPBB2', true);
include($phpbb2_root_path .'extension.inc');
include($phpbb2_root_path . 'common.'.$phpEx);
include('includes/functions_post.' . $phpEx);

//
// Start session management
//
$userdata = titanium_session_pagestart($titanium_user_ip, PAGE_POSTING, $nukeuser);
titanium_init_userprefs($userdata);
//
// End session management
//
include('includes/functions_arcade.' . $phpEx);

$header_location = ( @preg_match("/Microsoft|WebSTAR|Xitami/", getenv("SERVER_SOFTWARE")) ) ? "Refresh: 0; URL=" : "Location: ";

if ( !$userdata['session_logged_in'] )
{
    header($header_location . "modules.php?name=Your_Account");
    exit;
}
//
// End of auth check
//

generate_smilies('inline', PAGE_POSTING);
include("includes/page_header.php");

$mode = $HTTP_GET_VARS['mode'];


//Comment update section
if($mode == "update")
    {
            $game_id = intval($HTTP_POST_VARS['comment_id']);
            $comment_text = str_replace("\'","''",$HTTP_POST_VARS['message']);
            $comment_text = preg_replace(array('#&(?!(\#[0-9]+;))#', '#<#', '#>#'), array('&amp;', '&lt;', '&gt;'),$comment_text);

            //Checks to make sure the user has privledge to enter highscores.
            //This query checks the user_id stored in the users cookie and in the database.
            //If they don't match, the comments is not entered and error message is displayed.
            $titanium_user_id = $userdata['user_id'];
            $sql = "SELECT game_highuser FROM " . GAMES_TABLE. " WHERE game_id = $game_id";
                if( !($result = $titanium_db->sql_query($sql)))
            {
            message_die(GENERAL_ERROR, "Error Authenticating User", '', __LINE__, __FILE__, $sql);
            }
            $row = $titanium_db->sql_fetchrow($result);

            if($row['game_highuser'] != $titanium_user_id)
            {
            message_die(GENERAL_ERROR, "Error Authenticating User - Possible hack attempt!", '');
            }
            //Enters Comment into the DB
            $sql = "UPDATE " . COMMENTS_TABLE . " SET comments_value = '$comment_text' WHERE game_id = $game_id";
            if( !$result = $titanium_db->sql_query($sql) )
            {
                message_die(GENERAL_ERROR, "Couldn't insert row in comments table", "", __LINE__, __FILE__, $sql);
            }

                        //Comment Updated/Added Successfully go back to game
               header($header_location . "modules.php?name=Forums&file=games&gid=$game_id");
               exit;


    }



    $game_id = intval($HTTP_GET_VARS['gid']);

    //Checks to make sure the user has privledge to enter highscores.
    //This query checks the user_id stored in the users cookie and in the database.
    //If they don't match, the comments is not entered and error message is displayed.
    $titanium_user_id = $userdata['user_id'];
    $sql = "SELECT game_highuser FROM " . GAMES_TABLE. " WHERE game_id = $game_id";
        if( !($result = $titanium_db->sql_query($sql)))
        {
        message_die(GENERAL_ERROR, "Error Authenticating User", '', __LINE__, __FILE__, $sql);
        }
        $row = $titanium_db->sql_fetchrow($result);

        if($row['game_highuser'] != $titanium_user_id)
        {
            header($header_location . "modules.php?name=Forums&file=games&gid=$game_id");
            exit;
        }

    //Comment submission Timeout Check
    $sql = "SELECT game_highdate FROM " . GAMES_TABLE. " WHERE game_id = $game_id";
    if( !($result = $titanium_db->sql_query($sql)))
        {
        message_die(GENERAL_ERROR, "Error Authenticating User", '', __LINE__, __FILE__, $sql);
        }
        $row = $titanium_db->sql_fetchrow($result);

        //Checks the current time and time highscore was recorded.
        //If they are not within a minute of each other user is refreshed back to game.
        if( (time() - $row['game_highdate']) > 60)
        {
            header($header_location . "modules.php?name=Forums&file=games&gid=$game_id");
            exit;
        }




    $phpbb2_template->set_filenames(array(
   'body' => 'comments_new_body.tpl'));

    //Gets comments from database
    $sql = "SELECT g.game_id, g.game_name, c.* FROM " . GAMES_TABLE. " g LEFT JOIN " . COMMENTS_TABLE . " c ON g.game_id = c.game_id WHERE g.game_id = $game_id";
    if( !($result = $titanium_db->sql_query($sql)) )
            {
            message_die(GENERAL_ERROR, "Error retrieving comment list", '', __LINE__, __FILE__, $sql);
            }

    $row = $titanium_db->sql_fetchrow($result);

        $game_name = '<a href="' . append_titanium_sid("games.$phpEx?gid=" . $row['game_id']) . '">' . $row['game_name'] . '</a>';
    $return_arcade = '<a href="' . append_titanium_sid("games.$phpEx?gid=" . $row['game_id']) . '">here</a>';
        $phpbb2_template->assign_vars(array(
            'L_ARCADE_COMMENTS' => $titanium_lang['arcade_comments'],
            'L_CONGRATS' => $titanium_lang['congrats'],
            'L_COMMENTS_CHAMPION' => sprintf($titanium_lang['comments_champion'], $game_name),
                        'NAV_DESC' => '<a class="nav" href="' . append_titanium_sid("arcade.$phpEx") . '">' . $titanium_lang['arcade'] . '</a> ' ,
                        'GAME_ID' => $row['game_id'],
            'L_NO_COMMENT' => sprintf($titanium_lang['no_comment'], $return_arcade),
            'COMMENTS' => $row['comments_value'],
            'S_ACTION' => append_titanium_sid("comments_new?mode=update"),
            ));

    //Gets Avatar based on user settings and other user stats
    $sql = "SELECT username, user_avatar_type, user_allowavatar, user_avatar FROM " . USERS_TABLE . " WHERE user_id = " . $userdata['user_id'] ;
    if( !($result = $titanium_db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, "Cannot access the users table", '', __LINE__, __FILE__, $sql);
    }
    $row = $titanium_db->sql_fetchrow($result);

    $titanium_user_avatar_type = $row['user_avatar_type'];
    $titanium_user_allowavatar = $row['user_allowavatar'];
    $titanium_user_avatar = $row['user_avatar'];
    $avatar_img = '';

    if ( $titanium_user_avatar_type && $titanium_user_allowavatar )
    {
       switch( $titanium_user_avatar_type )
       {
          case USER_AVATAR_UPLOAD:
             $avatar_img = ( $phpbb2_board_config['allow_avatar_upload'] ) ? '<img src="' . $phpbb2_board_config['avatar_path'] . '/' . $titanium_user_avatar . '" alt="" border="0" hspace="20" align="center" valign="center"/>' : '';
             break;
          case USER_AVATAR_REMOTE:
             $avatar_img = ( $phpbb2_board_config['allow_avatar_remote'] ) ? '<img src="' . $titanium_user_avatar . '" alt="" border="0"  hspace="20" align="center" valign="center" />' : '';
             break;
          case USER_AVATAR_GALLERY:
             $avatar_img = ( $phpbb2_board_config['allow_avatar_local'] ) ? '<img src="' . $phpbb2_board_config['avatar_gallery_path'] . '/' . $titanium_user_avatar . '" alt="" border="0"  hspace="20" align="center" valign="center" />' : '';
             break;
       }

    }
        $phpbb2_template->assign_vars(array(
                'L_QUICK_STATS' => $titanium_lang['quick_stats'],
            'USER_AVATAR' => '<a href="modules.php?name=Forums&amp;file=profile&amp;mode=viewprofile&amp;u=' . $userdata['user_id'] . '">' . $avatar_img . '</a>',
            'USERNAME' => '<a href="' . append_titanium_sid("statarcade.$phpEx?uid=" . $userdata['user_id'] ) . '" class="genmed">' . $row['username'] . '</a> ',
            ));

    //Gets some user stats to display on the comment submission page
    $sql ="SELECT s.score_set, s.game_id, g.game_name FROM " . SCORES_TABLE. " s LEFT JOIN " . USERS_TABLE. " u ON s.user_id = u.user_id LEFT JOIN " . GAMES_TABLE. " g ON s.game_id = g.game_id WHERE s.user_id = " . $userdata['user_id'] . " ORDER BY score_set DESC LIMIT 1";

    if( !($result = $titanium_db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, "Cannot access user stats to display", '', __LINE__, __FILE__, $sql);
    }
    $row = $titanium_db->sql_fetchrow($result);

        $times_played = $row['score_set'];
        $fav_game_name = '<a href="' . append_titanium_sid("games.$phpEx?gid=" . $row['game_id']) . '">' . $row['game_name'] . '</a>';

    $sql="SELECT * FROM " .GAMES_TABLE ." WHERE game_highuser = " . $userdata['user_id'] . " ORDER BY game_highdate DESC";
    if( !($result = $titanium_db->sql_query($sql)) )
    {
        message_die(GENERAL_ERROR, "Cannot access last high score data", '', __LINE__, __FILE__, $sql);
    }
    $score_count = $titanium_db->sql_numrows( $result ); //Gets the number of highscores for the current user
    $row = $titanium_db->sql_fetchrow($result);

    $highscore_date = create_date( $phpbb2_board_config['default_dateformat'] , $row['game_highdate'] , $phpbb2_board_config['board_timezone'] );
    $highscore_game_name = '<a href="' . append_titanium_sid("games.$phpEx?gid=" . $row['game_id']) . '">' . $row['game_name'] . '</a>';

        $phpbb2_template->assign_vars(array(
                    'L_QUICK_STATS_MESSAGE' => sprintf($titanium_lang['quick_stats_message'], $score_count, $fav_game_name, $times_played, $highscore_date, $highscore_game_name),
            ));

//
// Generate the page end
//
$phpbb2_template->pparse('body');
include("includes/page_tail.php");

?>