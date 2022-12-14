<?php
/*======================================================================= 
  PHP-Nuke Titanium | Nuke-Evolution Xtreme : PHP-Nuke Web Portal System
 =======================================================================*/


/*********************************************************************************/
/* CNB Your Account: An Advanced User Management System for phpnuke             */
/* ============================================                                 */
/*                                                                              */
/* Copyright (c) 2004 by Comunidade PHP Nuke Brasil                             */
/* http://dev.phpnuke.org.br & http://www.phpnuke.org.br                        */
/*                                                                              */
/* Contact author: escudero@phpnuke.org.br                                      */
/* International Support Forum: http://ravenphpscripts.com/forum76.html         */
/*                                                                              */
/* This program is free software. You can redistribute it and/or modify         */
/* it under the terms of the GNU General Public License as published by         */
/* the Free Software Foundation; either version 2 of the License.               */
/*                                                                              */
/*********************************************************************************/
/* CNB Your Account it the official successor of NSN Your Account by Bob Marion    */
/*********************************************************************************/

/*****[CHANGES]**********************************************************
-=[Base]=-
      Nuke Patched                             v3.1.0       06/26/2005
 ************************************************************************/

if (!defined('MODULE_FILE')) {
    die ('Access Denied');
}

if (!defined('YA_ADMIN')) {
    die('CNBYA admin protection');
}

if (!defined('CNBYA')) {
    die('CNBYA protection');
}

if(is_mod_admin($titanium_module_name)) {

    if ($ya_config['autosuspend'] > 0){
        $st = time() - $ya_config['autosuspend'];
        $susresult = $titanium_db->sql_query("SELECT user_id FROM ".$titanium_user_prefix."_users WHERE user_lastvisit <= $st AND user_level > 0");
        while(list($sus_uid) = $titanium_db->sql_fetchrow($susresult)) {
            $titanium_db->sql_query("UPDATE ".$titanium_user_prefix."_users SET user_level='0', user_active='0' WHERE user_id='$sus_uid'");
        }
    }
    redirect_titanium("modules.php?name=$titanium_module_name&file=admin");

}

?>