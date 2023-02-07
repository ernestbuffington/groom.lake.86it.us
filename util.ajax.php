<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2019 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * util.ajax.php
 * @since  1.6.08
 */

define('IN_COPPERMINE', true);
define('UTIL_PHP', true);

require 'include/init.inc.php';
require 'include/picmgmt.inc.php';
require 'include/tool.class.php';

// an override used to capture 'cpg_die' calls
function theme_cpg_die ($msg_code, $msg_text, $msg_string, $css_class, $error_file, $error_line, $output_buffer, $ob)
{
	if ($msg_code == CRITICAL_ERROR) {
		echo json_encode(array('msg'=>'<div class="cpg_message_error">'.$msg_text.' '.$msg_string.'</div>', 'err'=>1));
	} else {
		echo json_encode(array('msg'=>'<div class="cpg_message_warning">'.$msg_text.' '.$msg_string.'</div>'));
	}
	exit();
}

if (!GALLERY_ADMIN_MODE) {
	cpg_die(ERROR, $lang_errors['access_denied'], __FILE__, __LINE__);
}

if ($superCage->post->keyExists('_tool') && $matches = $superCage->post->getMatched('_tool', '/^[A-Za-z0-9_]+$/')) {
	$tobj = AdminTool::getTool($matches[0]);
	if ($tobj) {
		echo $tobj->displayUI();
		exit();
	}
}

$action = '';
if ($superCage->post->keyExists('action') && $matches = $superCage->post->getMatched('action', '/^[A-Za-z0-9_]+$/')) {
	$action = $matches[0];
}

if (!checkFormToken()) {
	cpg_die(CRITICAL_ERROR, $lang_errors['invalid_form_token'], __FILE__, __LINE__);
}

ob_start();

$tobj = AdminTool::getTool($action);
if ($tobj) {
	$rslt = $tobj->_process();
	$pmsg = ob_get_clean();
	$rslt['msg'] = $pmsg;
	// refresh the form token if it has been running for a long time
	if ((time() - $superCage->post->getInt('timestamp')) > $CONFIG['form_token_lifetime']>>1) {
		$rslt['tkn'] = getFormToken();
	}
	echo json_encode($rslt);
}
