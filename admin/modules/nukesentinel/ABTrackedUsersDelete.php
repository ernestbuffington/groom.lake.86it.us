<?php
/*======================================================================= 
  PHP-Nuke Titanium | Nuke-Evolution Xtreme : PHP-Nuke Web Portal System
 =======================================================================*/


/********************************************************/
/* NukeSentinel(tm)                                     */
/* By: NukeScripts(tm) (http://nukescripts.86it.us)     */
/* Copyright (c) 2000-2008 by NukeScripts(tm)           */
/* See CREDITS.txt for ALL contributors                 */
/********************************************************/

if (!defined('NUKESENTINEL_ADMIN')) {
   die ('You can\'t access this file directly...');
}

$titanium_db->sql_query("DELETE FROM `".$titanium_prefix."_nsnst_tracked_ips` WHERE `user_id`='$titanium_user_id'");
$titanium_db->sql_query("OPTIMIZE TABLE `".$titanium_prefix."_nsnst_tracked_ips`");
header("Location: ".$admin_file.".php?op=$xop&user_id=$titanium_user_id&column=$column&direction=$direction&min=$min&showmodule=$showmodule");

?>