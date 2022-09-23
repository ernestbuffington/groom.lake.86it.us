<?php
/*======================================================================= 
  PHP-Nuke Titanium | Nuke-Evolution Xtreme : PHP-Nuke Web Portal System
 =======================================================================*/
/************************************************************************
   Nuke-Evolution: Server Info Administration
   ============================================
   Copyright (c) 2005 by The Nuke-Evolution Team

   Filename      : login.php
   Author(s)     : Technocrat (www.Nuke-Evolution.com)
   Version       : 1.0.0
   Date          : 05.19.2005 (mm.dd.yyyy)

   Notes         : Evo User Block Login Module
************************************************************************/
if(!defined('NUKE_EVO')) 
exit ("Illegal File Access");

global $evouserinfo_login, $titanium_lang_evo_userblock, $appID;

function evouserinfo_login () {
   global $titanium_lang_evo_userblock, $evouserinfo_login;
   
    mt_srand ((double)microtime()*1000000);
    $maxran = 1000000;
    $random_num = mt_rand(0, $maxran);
    $evouserinfo_login .= "<form action=\"modules.php?name=Your_Account\" method=\"post\">\n";
    $evouserinfo_login .= "<table border=\"0\" style=\"margin: auto\">";
    $evouserinfo_login .= "<tr><td>\n";
    $evouserinfo_login .= "<i class=\"fa fa-angle-double-right fa-right-arrows\" aria-hidden=\"true\"></i>&nbsp;";
    $evouserinfo_login .= "<a href=\"modules.php?name=Your_Account&amp;op=new_user\">".$titanium_lang_evo_userblock['BLOCK']['LOGIN']['REG']."</a><br />\n";
    $evouserinfo_login .= "<i class=\"fa fa-angle-double-right fa-right-arrows\" aria-hidden=\"true\"></i>&nbsp;";
    $evouserinfo_login .= "<a href=\"modules.php?name=Your_Account&amp;op=pass_lost\">".$titanium_lang_evo_userblock['BLOCK']['LOGIN']['LOST']."</a>\n";
    $evouserinfo_login .= "</td></tr>\n<tr><td align=\"center\">\n";
    
    //Login
    $evouserinfo_login .= $titanium_lang_evo_userblock['BLOCK']['LOGIN']['USERNAME']."<br /><input class=\"evo-login-username-field\" 
	type=\"text\" name=\"username\" size=\"15\" maxlength=\"25\"></td></tr>\n";
    
	$evouserinfo_login .= "<tr><td align=\"center\">".$titanium_lang_evo_userblock['BLOCK']['LOGIN']['PASSWORD']."<br /><input 
	class=\"evo-login-password-field\" type=\"password\" name=\"user_password\" size=\"15\" maxlength=\"20\" autocomplete=\"on\">\n";
    /*****[BEGIN]******************************************
    [ Mod:     Advanced Security Code Control     v1.0.0 ]
    ******************************************************/
    $gfxchk = array(2,4,5,7);
    $evouserinfo_login .= security_code($gfxchk, 'compact', '1'); //Size - compact || normal  //Scale Adjustment - 0.90 = 90% scaledown.
    /*****[END]********************************************
    [ Mod:     Advanced Security Code Control     v1.0.0 ]
    ******************************************************/
    $evouserinfo_login .= "</td><td align=\"center\">";
    if(!empty($redirect)) {
       $evouserinfo_login .= "<input type=\"hidden\" name=\"redirect\" value=\"$redirect\">\n";
    }
    if(!empty($mode)) {
       $evouserinfo_login .= "<input type=\"hidden\" name=\"mode\" value=\"$mode\">\n";
    }
    if(!empty($f)) {
       $evouserinfo_login .= "<input type=\"hidden\" name=\"f\" value=\"$f\">\n";
    }
    if(!empty($t)) {
       $evouserinfo_login .= "<input type=\"hidden\" name=\"t\" value=\"$t\">\n";
    }
    $evouserinfo_login .= "<input type=\"hidden\" name=\"op\" value=\"login\"></td></tr>\n";
    $evouserinfo_login .= "<tr><td align=\"center\"><input class=\"evo-login-submit\" type=\"submit\" value=\"".$titanium_lang_evo_userblock['BLOCK']['LOGIN']['LOGIN']."\"></td></tr></table></form>\n";
}

?>
<style>
.myFblogin{
	text-align:center;
}
</style>
<?
if (!is_user()) 
{
    evouserinfo_login();

    if(defined('facebook')): 
    
	  if(isset($_COOKIE['fbsr_'.$appID])):
	  // do nothing
	  else:
	    $evouserinfo_login .= '<div class="myFblogin">';
        $evouserinfo_login .= 'Login to our facebook app';
        $evouserinfo_login .= '<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>';
	    $evouserinfo_login .= '</div>';
	  endif;
	
	endif;

} 
else 
{
	global $userinfo, $bgcolor1, $bgcolor2;



	$evouserinfo_login .= '<div style="padding-left: 11px;">';
    $evouserinfo_login .= '  <font color="#FFFFFF"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></font> <a 
	href="modules.php?name=Private_Messages">'.$titanium_lang_evo_userblock['BLOCK']['LOGIN']['MYMESSAGEBOX'].'</a>';
    $evouserinfo_login .= '</div>';

	$evouserinfo_login .= '<div style="padding-left: 11px;">';
    $evouserinfo_login .= '  <font color="#3498DB"><i class="fa fa-upload" aria-hidden="true"></i></font> <a 
	href="modules.php?name=Image_Repository">'.$titanium_lang_evo_userblock['BLOCK']['LOGIN']['MYHOSTEDIMAGES'].'</a>';
    $evouserinfo_login .= '</div>';
    
	$evouserinfo_login .= '<div style="padding-left: 14px;">';
    $evouserinfo_login .= '  <font color="red"><i class="fa fa-bookmark" aria-hidden="true"></i></font>&nbsp;<a 
	href="modules.php?name=Bookmarks">'.$titanium_lang_evo_userblock['BLOCK']['LOGIN']['MYBOOKMARKS'].'</a>';
    $evouserinfo_login .= '</div>';

    $evouserinfo_login .= '<div style="padding-left: 11px;">';
    $evouserinfo_login .= '  <font color="#45B39D"><i class="fa fa-cog" aria-hidden="true"></i></font> <a 
	href="modules.php?name=Your_Account&op=chgtheme">'.$titanium_lang_evo_userblock['BLOCK']['LOGIN']['CHANGEMYTHEME'].'</a>';
    $evouserinfo_login .= '</div>';

    $evouserinfo_login .= '<div style="padding-left: 14px;">';
    $evouserinfo_login .= '  <font color="gold"><i class="fa fa-id-badge" aria-hidden="true"></i>
</font> <a 
	href="modules.php?name=Profile&mode=viewprofile&u='.$userinfo['user_id'].'">'.$titanium_lang_evo_userblock['BLOCK']['LOGIN']['MYPROFILE'].'</a>';
    $evouserinfo_login .= '</div>';

    $evouserinfo_login .= '<div style="padding-left: 13px;">';
    $evouserinfo_login .= '  <font color="gold"><i class="fa fa-bars" aria-hidden="true"></i></font> <a 
	href="modules.php?name=Profile">'.$titanium_lang_evo_userblock['BLOCK']['LOGIN']['EDITMYPROFILE'].'</a>';
    $evouserinfo_login .= '</div>';

    $evouserinfo_login .= '<div style="padding-left: 12px;">';
    $evouserinfo_login .= '  <font color="orange"><i class="fa fa-sign-out" aria-hidden="true"></i></font> <a 
	href="modules.php?name=Your_Account&amp;op=logout">'.$titanium_lang_evo_userblock['BLOCK']['LOGIN']['LOGOUT'].'</a>';
    $evouserinfo_login .= '</div>';

    $evouserinfo_login .= '<div style="padding-left: 12px;">';
    $evouserinfo_login .= '  <font color="red"><i class="fa fa-trash" aria-hidden="true"></i></font> <a href="modules.php?name=Your_Account&op=delete">'.
	$titanium_lang_evo_userblock['BLOCK']['LOGIN']['DELETE'].'</a>';
    $evouserinfo_login .= '</div>';

    $evouserinfo_login .= '<div style="padding-left: 11px;">';
    $evouserinfo_login .= '  <font color="tan"><i class="fas fa-cookie" aria-hidden="true"></i></font> <a 
	href="modules.php?name=Your_Account&op=ShowCookiesRedirect">'.$titanium_lang_evo_userblock['BLOCK']['LOGIN']['COOKIES'].'</a>';
    $evouserinfo_login .= '</div>';

    if(defined('facebook')): 
	  
	  if(isset($_COOKIE['fbsr_'.$appID])):
	  // do nothing
	  else:
        $evouserinfo_login .= '<hr>';
	    $evouserinfo_login .= '<div class="myFblogin">';
        $evouserinfo_login .= 'Login to our facebook app';
        $evouserinfo_login .= '<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>';
	    $evouserinfo_login .= '</div>';
	  endif;
	
	endif;
}
?>
<title>xwdNPADv86bm</title>
