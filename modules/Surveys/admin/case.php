<?php
/*======================================================================= 
  PHP-Nuke Titanium | Nuke-Evolution Xtreme : PHP-Nuke Web Portal System
 =======================================================================*/


/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2002 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if (!defined('ADMIN_FILE')) {
   die('Access Denied');
}

$titanium_module_name = basename(dirname(dirname(__FILE__)));
include_once(NUKE_MODULES_DIR.$titanium_module_name.'/admin/language/lang-'.$currentlang.'.php');

switch($op) {

    case "Surveys":
    case "CreatePoll":
    case "CreatePosted":
    case "ChangePoll":
    case "DeletePoll":
    case "RemovePosted":
    case "PollEdit":
    case "SavePoll":
    case "EditPoll":
    case "PollOptionsSave":
        include(NUKE_MODULES_DIR.$titanium_module_name.'/admin/index.php');
    break;

}

?>