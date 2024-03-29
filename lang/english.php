<?php
/**
 * Coppermine Photo Gallery
 *
 * v1.0 originally written by Gregory Demar
 *
 * @copyright  Copyright (c) 2003-2022 Coppermine Dev Team
 * @license    GNU General Public License version 3 or later; see LICENSE
 *
 * lang/english.php
 * @since  1.6.20
 */

if (!defined('IN_COPPERMINE')) die('Not in Coppermine...');

// info about translators and translated language
$lang_translation_info['lang_name_english'] = 'English (US)';
$lang_translation_info['lang_name_native'] = 'English (US)';
$lang_translation_info['lang_country_code'] = 'us';
$lang_translation_info['trans_name'] = 'Coppermine dev team';
$lang_translation_info['trans_email'] = '';
$lang_translation_info['trans_website'] = 'http://coppermine-gallery.net/';
$lang_translation_info['trans_date'] = '2009-01-09';

$lang_charset = 'utf-8';
$lang_text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)

// shortcuts for Bytes, Kibibytes, Mebibytes, Gibibytes
$lang_byte_units = array('Bytes', 'KiB', 'MiB', 'GiB');
$lang_decimal_separator = array(',', '.'); // symbol used to separate thousands from hundreds and rounded number from decimal place

// Day of weeks and months
$lang_day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$lang_month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

// The various date formats
// See https://www.php.net/manual/en/datetime.format.php to define the date format strings below
$lang_date['album'] = 'F d, Y';
$lang_date['lastcom'] = 'm/d/y \a\t H:i';
$lang_date['lastup'] = 'F d, Y';
$lang_date['register'] = 'F d, Y';
$lang_date['lasthit'] = 'F d, Y \a\t h:i A';
$lang_date['comment'] = 'F d, Y \a\t h:i A';
$lang_date['log'] = 'F d, Y \a\t h:i A';
$lang_date['scientific'] = 'Y-m-d H:i:s';

// For the word censor
$lang_bad_words = array('*fuck*', 'asshole', 'assramer', 'assrammer', 'bitch*', 'c0ck', 'clits', 'Cock', 'cum', 'cunt*', 'dago', 'daygo', 'dego', 'dick*', 'dildo', 'fanculo', 'feces', 'foreskin', 'Fu\(*', 'fuk*', 'honkey', 'hore', 'injun', 'kike', 'lesbo', 'masturbat*', 'motherfucker', 'nazis', 'nigger*', 'nutsack','penis', 'phuck', 'poop', 'pussy', 'scrotum', 'shit', 'slut', 'titties', 'titty', 'twaty', 'wank*', 'whore', 'wop*');

$lang_meta_album_names['random'] = 'Random files';
$lang_meta_album_names['lastup'] = 'Last additions';
$lang_meta_album_names['lastalb'] = 'Last updated albums';
$lang_meta_album_names['lastcom'] = 'Last comments';
$lang_meta_album_names['topn'] = 'Most viewed';
$lang_meta_album_names['toprated'] = 'Top rated';
$lang_meta_album_names['lasthits'] = 'Last viewed';
$lang_meta_album_names['search'] = 'Image search results';
$lang_meta_album_names['album_search'] = 'Album search results';
$lang_meta_album_names['category_search'] = 'Category search results';
$lang_meta_album_names['favpics'] = 'Favorite files';
$lang_meta_album_names['datebrowse'] = 'Browse by date';

$lang_errors['access_denied'] = 'You don\'t have permission to access this page.';
$lang_errors['invalid_form_token'] = 'A valid form token could not be found.';
$lang_errors['perm_denied'] = 'You don\'t have permission to perform this operation.';
$lang_errors['param_missing'] = 'Script called without the required parameter(s).';
$lang_errors['non_exist_ap'] = 'The selected album/file does not exist!';
$lang_errors['quota_exceeded'] = 'Disk quota exceeded.';
$lang_errors['quota_exceeded_details'] = 'You have a space quota of [quota]K, your files currently use [space]K, adding this file would make you exceed your quota.';
$lang_errors['gd_file_type_err'] = 'When using the GD image library allowed image types are only JPEG and PNG.';
$lang_errors['invalid_image'] = 'The image you have uploaded is corrupted or can\'t be handled by the GD library';
$lang_errors['resize_failed'] = 'Unable to create thumbnail or reduced size image.';
$lang_errors['no_img_to_display'] = 'No image to display';
$lang_errors['non_exist_cat'] = 'The selected category does not exist';
$lang_errors['directory_ro'] = 'Directory \'%s\' is not writable, files can\'t be deleted';
$lang_errors['pic_in_invalid_album'] = 'File is in a non-existent album (%s)!?';
$lang_errors['banned'] = 'You are currently banned from using this site.';
$lang_errors['offline_title'] = 'Offline';
$lang_errors['offline_text'] = 'Gallery is currently offline - check back soon';
$lang_errors['ecards_empty'] = 'There are currently no ecard records to display.';
$lang_errors['database_query'] = 'There was an error while processing a database query';
$lang_errors['non_exist_comment'] = 'The selected comment does not exist';
$lang_errors['captcha_error'] = 'The confirmation code didn\'t match';
$lang_errors['login_needed'] = 'You need to %sregister%s/%slogin%s to access this page';
$lang_errors['error'] = 'Error';
$lang_errors['critical_error'] = 'Critical error';
$lang_errors['access_thumbnail_only'] = 'You are only allowed to view thumbnail images.';
$lang_errors['access_intermediate_only'] = 'You are not allowed to view full-size images.';
$lang_errors['access_none'] = 'You are not allowed to view any images.';
$lang_errors['register_globals_title'] = 'Register Globals on!';
$lang_errors['register_globals_warning'] = 'The PHP setting register_globals is enabled on your server, which is a bad idea in terms of security. It\'s strongly recommended to turn it off.';

$lang_bbcode_help_title = 'BBCode help';
$lang_bbcode_help = 'You can add clickable links and some formatting to this field by using BBCode tags: <li>[b]Bold[/b] =&gt; <strong>Bold</strong></li><li>[i]Italic[/i] =&gt; <i>Italic</i></li><li>[url=http://yoursite.com/]Url Text[/url] =&gt; <a href="http://yoursite.com">Url Text</a></li><li>[email]user@domain.com[/email] =&gt; <a href="mailto:user@domain.com">user@domain.com</a></li><li>[color=red]some text[/color] =&gt; <span style="color:red">some text</span></li><li>[img]http://documentation.coppermine-gallery.net/images/browser.png[/img] =&gt; <img src="docs/images/browser.png" border="0" alt="" /></li>';

$lang_common['yes'] = 'Yes';
$lang_common['no'] = 'No';
$lang_common['back'] = 'Back';
$lang_common['continue'] = 'Continue';
$lang_common['information'] = 'Information';
$lang_common['error'] = 'Error';
$lang_common['check_uncheck_all'] = 'check/uncheck all';
$lang_common['confirm'] = 'Confirmation';
$lang_common['captcha_help_title'] = 'Visual confirmation (captcha)';
$lang_common['captcha_help'] = 'To avoid spam, you have to confirm that you are an actual human being and not just a bot script by entering the displayed text.<br />Capitalization does not matter, you can type in lowercase.';
$lang_common['title'] = 'Title';
$lang_common['caption'] = 'Caption';
$lang_common['keywords'] = 'Keywords';
$lang_common['keywords_insert1'] = 'Keywords (separate with %s)';
$lang_common['keywords_insert2'] = 'Insert from list';
$lang_common['keyword_separator'] = 'Keyword separator';
$lang_common['keyword_separators'] = array(' '=>'space', ','=>'comma', ';'=>'semicolon');
$lang_common['owner_name'] = 'Owner name';
$lang_common['filename'] = 'Filename';
$lang_common['filesize'] = 'Filesize';
$lang_common['album'] = 'Album';
$lang_common['file'] = 'File';
$lang_common['date'] = 'Date';
$lang_common['help'] = 'Help';
$lang_common['close'] = 'Close';
$lang_common['go'] = 'go';
$lang_common['javascript_needed'] = 'This page requires JavaScript. Please enable JavaScript in your browser.';
$lang_common['move_up'] = 'Move up';
$lang_common['move_down'] = 'Move down';
$lang_common['move_top'] = 'Move to top';
$lang_common['move_bottom'] = 'Move to bottom';
$lang_common['delete'] = 'Delete';
$lang_common['edit'] = 'Edit';
$lang_common['username_if_blank'] = 'Unknown coward';
$lang_common['albums_no_category'] = 'Albums with no category';
$lang_common['personal_albums'] = '* Personal albums';
$lang_common['select_album'] = 'Select Album';
$lang_common['ok'] = 'OK';
$lang_common['status'] = 'Status';
$lang_common['apply_changes'] = 'Apply changes';
$lang_common['done'] = 'Done';
$lang_common['album_properties'] = 'Album properties';
$lang_common['parent_category'] = 'Parent category';
$lang_common['edit_files'] = 'Edit files';
$lang_common['thumbnail_view'] = 'Thumbnail view';
$lang_common['album_manager'] = 'Album Manager';
$lang_common['more'] = 'more';

// ------------------------------------------------------------------------- //
// File theme.php
// ------------------------------------------------------------------------- //

$lang_main_menu['home_title'] = 'Go to the home page';
$lang_main_menu['home_lnk'] = 'Home';
$lang_main_menu['alb_list_title'] = 'Go to the album list';
$lang_main_menu['alb_list_lnk'] = 'Album list';
$lang_main_menu['my_gal_title'] = 'Go to my personal gallery';
$lang_main_menu['my_gal_lnk'] = 'My gallery';
$lang_main_menu['my_prof_title'] = 'Go to my personal profile';
$lang_main_menu['my_prof_lnk'] = 'My profile';
$lang_main_menu['adm_mode_title'] = 'Enable display of admin controls';
$lang_main_menu['adm_mode_lnk'] = 'Show admin controls';
$lang_main_menu['usr_mode_title'] = 'Disable display of admin controls';
$lang_main_menu['usr_mode_lnk'] = 'Hide admin controls';
$lang_main_menu['upload_pic_title'] = 'Upload a file into an album';
$lang_main_menu['upload_pic_lnk'] = 'Upload file';
$lang_main_menu['register_title'] = 'Create an account';
$lang_main_menu['register_lnk'] = 'Register';
$lang_main_menu['login_title'] = 'Log me in';
$lang_main_menu['login_lnk'] = 'Login';
$lang_main_menu['logout_title'] = 'Log me out';
$lang_main_menu['logout_lnk'] = 'Logout';
$lang_main_menu['lastup_title'] = 'Show most recent uploads';
$lang_main_menu['lastup_lnk'] = 'Last uploads';
$lang_main_menu['lastcom_title'] = 'Show most recent comments';
$lang_main_menu['lastcom_lnk'] = 'Last comments';
$lang_main_menu['topn_title'] = 'Show most viewed items';
$lang_main_menu['topn_lnk'] = 'Most viewed';
$lang_main_menu['toprated_title'] = 'Show top rated items';
$lang_main_menu['toprated_lnk'] = 'Top rated';
$lang_main_menu['search_title'] = 'Search the gallery';
$lang_main_menu['search_lnk'] = 'Search';
$lang_main_menu['fav_title'] = 'Go to my favorites';
$lang_main_menu['fav_lnk'] = 'My Favorites';
$lang_main_menu['memberlist_title'] = 'Show Memberlist';
$lang_main_menu['memberlist_lnk'] = 'Memberlist';
$lang_main_menu['browse_by_date_lnk'] = 'By date';
$lang_main_menu['browse_by_date_title'] = 'Browse by date uploaded';
$lang_main_menu['contact_title'] = 'Get in contact with %s';
$lang_main_menu['contact_lnk'] = 'Contact';
$lang_main_menu['sidebar_title'] = 'Add a Sidebar to your browser';
$lang_main_menu['sidebar_lnk'] = 'Sidebar';

$lang_gallery_admin_menu['upl_app_title'] = 'Approve new uploads';
$lang_gallery_admin_menu['upl_app_lnk'] = 'Upload approval';
$lang_gallery_admin_menu['admin_title'] = 'Go to config';
$lang_gallery_admin_menu['admin_lnk'] = 'Config';
$lang_gallery_admin_menu['albums_title'] = 'Go to album configuration';
$lang_gallery_admin_menu['albums_lnk'] = 'Albums';
$lang_gallery_admin_menu['categories_title'] = 'Go to category configuration';
$lang_gallery_admin_menu['categories_lnk'] = 'Categories';
$lang_gallery_admin_menu['users_title'] = 'Go to user configuration';
$lang_gallery_admin_menu['users_lnk'] = 'Users';
$lang_gallery_admin_menu['groups_title'] = 'Go to group configuration';
$lang_gallery_admin_menu['groups_lnk'] = 'Groups';
$lang_gallery_admin_menu['comments_title'] = 'Review all comments';
$lang_gallery_admin_menu['comments_lnk'] = 'Review Comments';
$lang_gallery_admin_menu['searchnew_title'] = 'Go to the batch add process';
$lang_gallery_admin_menu['searchnew_lnk'] = 'Batch add files';
$lang_gallery_admin_menu['util_title'] = 'Go to the admin tools';
$lang_gallery_admin_menu['util_lnk'] = 'Admin Tools';
$lang_gallery_admin_menu['key_lnk'] = 'Keyword Dictionary';
$lang_gallery_admin_menu['ban_title'] = 'Go to the banned users';
$lang_gallery_admin_menu['ban_lnk'] = 'Ban Users';
$lang_gallery_admin_menu['db_ecard_title'] = 'Review Ecards';
$lang_gallery_admin_menu['db_ecard_lnk'] = 'Display Ecards';
$lang_gallery_admin_menu['pictures_title'] = 'Sort my pictures';
$lang_gallery_admin_menu['pictures_lnk'] = 'Sort my pictures';
$lang_gallery_admin_menu['documentation_lnk'] = 'Documentation';
$lang_gallery_admin_menu['documentation_title'] = 'Coppermine manual';
$lang_gallery_admin_menu['phpinfo_lnk'] = 'phpinfo';
$lang_gallery_admin_menu['phpinfo_title'] = 'Contains technical information about your server. You may be asked to provide information from this when requesting support.';
$lang_gallery_admin_menu['update_database_lnk'] = 'Update database';
$lang_gallery_admin_menu['update_database_title'] = 'If you have replaced Coppermine files, added a modification or upgraded from a previous version of Coppermine, make sure to run the database update once. This will create the necessary tables and/or config values in your Coppermine database.';
$lang_gallery_admin_menu['view_log_files_lnk'] = 'View log files';
$lang_gallery_admin_menu['view_log_files_title'] = 'Coppermine can keep track of various actions users perform. You can browse those logs if you have enabled logging in Coppermine config.';
$lang_gallery_admin_menu['check_versions_lnk'] = 'Check versions';
$lang_gallery_admin_menu['check_versions_title'] = 'Check your file versions to find out if you have replaced all files after an upgrade, or if Coppermine source files have been updated after the release of a package.';
$lang_gallery_admin_menu['bridgemgr_lnk'] = 'Bridge Manager';
$lang_gallery_admin_menu['bridgemgr_title'] = 'Enable/disable integration (bridging) of Coppermine with another application (e.g. your BBS).';
$lang_gallery_admin_menu['pluginmgr_lnk'] = 'Plugin Manager';
$lang_gallery_admin_menu['pluginmgr_title'] = 'Plugin manager';
$lang_gallery_admin_menu['overall_stats_lnk'] = 'Overall Stats';
$lang_gallery_admin_menu['overall_stats_title'] = 'View overall hit stats by browser and operating system (if corresponding options are turned on in config).';
$lang_gallery_admin_menu['keywordmgr_lnk'] = 'Keyword manager';
$lang_gallery_admin_menu['keywordmgr_title'] = 'Manage keywords (if corresponding option is turned on in config).';
$lang_gallery_admin_menu['exifmgr_lnk'] = 'EXIF manager';
$lang_gallery_admin_menu['exifmgr_title'] = 'Manage EXIF display (if corresponding option is turned on in config).';
$lang_gallery_admin_menu['shownews_lnk'] = 'Show News';
$lang_gallery_admin_menu['shownews_title'] = 'Display the news from coppermine-gallery.net';

$lang_user_admin_menu['albmgr_title'] = 'Create and order my albums';
$lang_user_admin_menu['albmgr_lnk'] = 'Create / order my albums';
$lang_user_admin_menu['modifyalb_title'] = 'Go to modify my albums';
$lang_user_admin_menu['modifyalb_lnk'] = 'Modify my albums';
$lang_user_admin_menu['my_prof_title'] = 'Go to my personal profile';
$lang_user_admin_menu['my_prof_lnk'] = 'My profile';

$lang_cat_list['category'] = 'Category';
$lang_cat_list['albums'] = 'Albums';
$lang_cat_list['pictures'] = 'Files';

$lang_album_list['album_on_page'] = '%d albums on %d page(s)';

$lang_thumb_view['date'] = 'Date';
//Sort by filename and title
$lang_thumb_view['name'] = 'File Name';
$lang_thumb_view['sort_da'] = 'Sort by date ascending';
$lang_thumb_view['sort_dd'] = 'Sort by date descending';
$lang_thumb_view['sort_na'] = 'Sort by name ascending';
$lang_thumb_view['sort_nd'] = 'Sort by name descending';
$lang_thumb_view['sort_ta'] = 'Sort by title ascending';
$lang_thumb_view['sort_td'] = 'Sort by title descending';
$lang_thumb_view['position'] = 'Position';
$lang_thumb_view['sort_pa'] = 'Sort by position ascending';
$lang_thumb_view['sort_pd'] = 'Sort by position descending';
$lang_thumb_view['download_zip'] = 'Download as Zip file';
$lang_thumb_view['pic_on_page'] = '%d files on %d page(s)';
$lang_thumb_view['user_on_page'] = '%d users on %d page(s)';
$lang_thumb_view['enter_alb_pass'] = 'Enter Album Password';
$lang_thumb_view['invalid_pass'] = 'Invalid Password';
$lang_thumb_view['pass'] = 'Password';
$lang_thumb_view['submit'] = 'Submit';
$lang_thumb_view['zipdownload_copyright'] = 'Please respect copyrights - only use the files you downloaded as intended by the owner of the gallery';
$lang_thumb_view['zipdownload_username'] = 'This archive contains the zipped files from the favorites of %s';

$lang_img_nav_bar['thumb_title'] = 'Return to the thumbnail page';
$lang_img_nav_bar['pic_info_title'] = 'Display/hide file information';
$lang_img_nav_bar['slideshow_title'] = 'Slideshow';
$lang_img_nav_bar['ecard_title'] = 'Send this file as an e-card';
$lang_img_nav_bar['ecard_disabled'] = 'e-cards are disabled';
$lang_img_nav_bar['ecard_disabled_msg'] = 'You don\'t have permission to send ecards'; // js-alert
$lang_img_nav_bar['prev_title'] = 'See previous file';
$lang_img_nav_bar['next_title'] = 'See next file';
$lang_img_nav_bar['pic_pos'] = 'FILE %s/%s';
$lang_img_nav_bar['report_title'] = 'Report this file to the administrator';
$lang_img_nav_bar['go_album_end'] = 'Skip to end';
$lang_img_nav_bar['go_album_start'] = 'Return to start';

$lang_rate_pic['rate_this_pic'] = 'Rate this file ';
$lang_rate_pic['no_votes'] = '(No vote yet)';
$lang_rate_pic['rating'] = '(Current rating : %s / %s with %s votes)';
$lang_rate_pic['rubbish'] = 'Rubbish';
$lang_rate_pic['poor'] = 'Poor';
$lang_rate_pic['fair'] = 'Fair';
$lang_rate_pic['good'] = 'Good';
$lang_rate_pic['excellent'] = 'Excellent';
$lang_rate_pic['great'] = 'Great';
$lang_rate_pic['js_warning'] = 'Javascript must be enabled in order to vote';
$lang_rate_pic['already_voted'] = 'You have already voted for this pic.';
$lang_rate_pic['forbidden'] = 'You cannot rate your own files.';
$lang_rate_pic['rollover_to_rate'] = 'Rollover to rate this picture';

// ------------------------------------------------------------------------- //
// File include/functions.inc.php
// ------------------------------------------------------------------------- //

$lang_cpg_die['file'] = 'File: ';
$lang_cpg_die['line'] = 'Line: ';

$lang_display_thumbnails['dimensions'] = 'Dimensions=';
$lang_display_thumbnails['date_added'] = 'Date added=';

$lang_get_pic_data['n_comments'] = '%s comments';
$lang_get_pic_data['n_views'] = '%s views';
$lang_get_pic_data['n_votes'] = '(%s votes)';

$lang_cpg_debug_output['debug_info'] = 'Debug Info';
$lang_cpg_debug_output['debug_output'] = 'Debug Output';
$lang_cpg_debug_output['select_all'] = 'Select All';
$lang_cpg_debug_output['copy_and_paste_instructions'] = 'If you\'re going to request help on the Coppermine support board, copy-and-paste this debug output into your posting when requested, along with the error message you get (if any). Only post the debug_output on the support board if a supporter definitely asks for it! Make sure to replace any passwords from the query with *** before posting.';
$lang_cpg_debug_output['debug_output_explain'] = 'Note: This is for information only and does not mean there is an error with the gallery.';
$lang_cpg_debug_output['phpinfo'] = 'display phpinfo';
$lang_cpg_debug_output['notices'] = 'Notices';
$lang_cpg_debug_output['notices_help_admin'] = 'The notices displayed on this page appear because you (as gallery admin) deliberately enabled that feature in Coppermine\'s config. They don\'t necessarily mean that something is wrong with your gallery. In fact, they are a developer feature that only skilled coders should enable to track bugs. If notices display bothers you and/or you have no idea what those notices mean, turn the corresponding feature off in config.';
$lang_cpg_debug_output['notices_help_non_admin'] = 'The notices display has been deliberately enabled by the admin. It doesn\'t mean that something is wrong on your end. You can safely ignore the notices displayed here.';
$lang_cpg_debug_output['show_hide'] = 'show / hide';

$lang_language_selection['reset_language'] = 'Default language';
$lang_language_selection['choose_language'] = 'Choose your language';

$lang_theme_selection['reset_theme'] = 'Default theme';
$lang_theme_selection['choose_theme'] = 'Choose a theme';

$lang_version_alert['version_alert'] = 'Unsupported version!';
$lang_version_alert['no_stable_version'] = 'You are running Coppermine %s (%s) which is only meant for very experienced users - this version comes without support nor any warranties. Use it at your own risk or downgrade to the latest stable version if you need support!';
$lang_version_alert['gallery_offline'] = 'The gallery is currently offline and will be only visible for you as admin. Don\'t forget to switch it back online after finishing maintenance.';
$lang_version_alert['coppermine_news'] = 'News from coppermine-gallery.net';
$lang_version_alert['no_iframe'] = 'Your browser cannot display inline frames';
$lang_version_alert['hide'] = 'hide';
// for version update checks
$lang_version_alert['updates_available'] = 'There is a newer version of CPG available.';
$lang_version_alert['view_updates'] = 'View Updates';

$lang_create_tabs['previous'] = 'Previous';
$lang_create_tabs['next'] = 'Next';
$lang_create_tabs['jump_to_page'] = 'Jump to page';

$lang_get_remote_file_by_url['no_data_returned'] = 'No data returned using %s';
$lang_get_remote_file_by_url['curl'] = 'CURL';
$lang_get_remote_file_by_url['fsockopen'] = 'Socket connection (FSOCKOPEN)';
$lang_get_remote_file_by_url['fopen'] = 'fopen';
$lang_get_remote_file_by_url['curl_not_available'] = 'Curl is not available on your server';
$lang_get_remote_file_by_url['error_number'] = 'Error number: %s';
$lang_get_remote_file_by_url['error_message'] = 'Error message: %s';

$lang_alb_select_box['only_empty_albums'] = 'Show only empty albums';
$lang_alb_select_box['all_albums'] = 'Show all albums';

// ------------------------------------------------------------------------- //
// File include/mailer.inc.php
// ------------------------------------------------------------------------- //
$lang_mailer['authenticate'] = 'SMTP Error: Could not authenticate.';
$lang_mailer['connect_host'] = 'SMTP Error: Could not connect to SMTP host.';
$lang_mailer['data_not_accepted'] = 'SMTP Error: data not accepted.';
$lang_mailer['empty_message'] = 'Message body empty';
$lang_mailer['encoding'] = 'Unknown encoding: ';
$lang_mailer['execute'] = 'Could not execute: ';
$lang_mailer['file_access'] = 'Could not access file: ';
$lang_mailer['file_open'] = 'File Error: Could not open file: ';
$lang_mailer['from_failed'] = 'The following From address failed: ';
$lang_mailer['instantiate'] = 'Could not instantiate mail function.';
$lang_mailer['invalid_address'] = 'Invalid address: ';
$lang_mailer['mailer_not_supported'] = ' mailer is not supported.';
$lang_mailer['provide_address'] = 'You must provide at least one recipient email address.';
$lang_mailer['recipients_failed'] = 'SMTP Error: The following recipients failed: ';
$lang_mailer['signing'] = 'Signing Error: ';
$lang_mailer['smtp_connect_failed'] = 'SMTP connect() failed.';
$lang_mailer['smtp_error'] = 'SMTP server error: ';
$lang_mailer['variable_set'] = 'Cannot set or reset variable: ';
$lang_mailer['extension_missing'] = 'Extension missing: ';

// ------------------------------------------------------------------------- //
// File include/plugin_api.inc.php
// ------------------------------------------------------------------------- //
$lang_plugin_api['error_install'] = 'Couldn\'t install plugin \'%s\'';
$lang_plugin_api['error_uninstall'] = 'Couldn\'t uninstall plugin \'%s\'';
$lang_plugin_api['error_sleep'] = 'Couldn\'t switch off plugin \'%s\'';

// ------------------------------------------------------------------------- //
// File include/smilies.inc.php
// ------------------------------------------------------------------------- //
if (defined('SMILIES_PHP')) {
$lang_smilies_inc_php['Exclamation'] = 'Exclamation';
$lang_smilies_inc_php['Question'] = 'Question';
$lang_smilies_inc_php['Very Happy'] = 'Very Happy';
$lang_smilies_inc_php['Smile'] = 'Smile';
$lang_smilies_inc_php['Sad'] = 'Sad';
$lang_smilies_inc_php['Surprised'] = 'Surprised';
$lang_smilies_inc_php['Shocked'] = 'Shocked';
$lang_smilies_inc_php['Confused'] = 'Confused';
$lang_smilies_inc_php['Cool'] = 'Cool';
$lang_smilies_inc_php['Laughing'] = 'Laughing';
$lang_smilies_inc_php['Mad'] = 'Mad';
$lang_smilies_inc_php['Razz'] = 'Razz';
$lang_smilies_inc_php['Embarrassed'] = 'Embarrassed';
$lang_smilies_inc_php['Crying or Very sad'] = 'Crying or Very sad';
$lang_smilies_inc_php['Evil or Very Mad'] = 'Evil or Very Mad';
$lang_smilies_inc_php['Twisted Evil'] = 'Twisted Evil';
$lang_smilies_inc_php['Rolling Eyes'] = 'Rolling Eyes';
$lang_smilies_inc_php['Wink'] = 'Wink';
$lang_smilies_inc_php['Idea'] = 'Idea';
$lang_smilies_inc_php['Arrow'] = 'Arrow';
$lang_smilies_inc_php['Neutral'] = 'Neutral';
$lang_smilies_inc_php['Mr. Green'] = 'Mr. Green';
}

// ------------------------------------------------------------------------- //
// File albmgr.php
// ------------------------------------------------------------------------- //
if (defined('ALBMGR_PHP')) {
$lang_albmgr_php['title'] = 'Album Manager';
$lang_albmgr_php['alb_need_name'] = 'Albums need to have a name!'; // js-alert
$lang_albmgr_php['confirm_modifs'] = 'Are you sure you want to make these modifications?'; // js-alert
$lang_albmgr_php['no_change'] = 'You did not make any change!'; // js-alert
$lang_albmgr_php['new_album'] = 'New album';
$lang_albmgr_php['delete_album'] = 'Delete album';
$lang_albmgr_php['confirm_delete1'] = 'Are you sure you want to delete this album?'; // js-alert
$lang_albmgr_php['confirm_delete2'] = 'All files and comments it contains will be lost!'; // js-alert
$lang_albmgr_php['select_first'] = 'Select an album first'; // js-alert
$lang_albmgr_php['my_gallery'] = '* My gallery *';
$lang_albmgr_php['no_category'] = '* No category *';
$lang_albmgr_php['select_category'] = 'Select category';
$lang_albmgr_php['category_change'] = 'If you change the category, your changes will be lost!';
$lang_albmgr_php['page_change'] = 'If you follow this link, your changes will be lost!';
$lang_albmgr_php['cancel'] = 'Cancel';
$lang_albmgr_php['submit_reminder'] = 'Sorting changes are not saved until you click &quot;Apply changes&quot;.';
$lang_albmgr_php['upload_files'] = 'Upload files to this album'; // cpg1.6
}

// ------------------------------------------------------------------------- //
// File banning.php
// ------------------------------------------------------------------------- //

if (defined('BANNING_PHP')) {
$lang_banning_php['title'] = 'Ban Users';
$lang_banning_php['user_name'] = 'User Name';
$lang_banning_php['user_account'] = 'User Account';
$lang_banning_php['email_address'] = 'Email Address';
$lang_banning_php['ip_address'] = 'IP Address';
$lang_banning_php['expires'] = 'Expires';
$lang_banning_php['expiry_date'] = 'Expiry date';
$lang_banning_php['expired'] = 'Expired';
$lang_banning_php['edit_ban'] = 'Save Changes';
$lang_banning_php['add_new'] = 'Add New Ban';
$lang_banning_php['add_ban'] = 'Add';
$lang_banning_php['error_user'] = 'Cannot find user';
$lang_banning_php['error_specify'] = 'You need to specify either a user name or an IP address';
$lang_banning_php['error_ban_id'] = 'Invalid ban ID!';
$lang_banning_php['error_admin_ban'] = 'You cannot ban yourself!';
$lang_banning_php['error_server_ban'] = 'You were going to ban your own server? Tsk tsk, cannot do that...';
$lang_banning_php['skipping'] = 'Skipping that command.';
$lang_banning_php['lookup_ip'] = 'IP Address Lookup';
$lang_banning_php['select_date'] = 'select date';
$lang_banning_php['delete_comments'] = 'Delete comments';
$lang_banning_php['current'] = 'current';
$lang_banning_php['all'] = 'all';
$lang_banning_php['none'] = 'none';
$lang_banning_php['view'] = 'view';
$lang_banning_php['ban_id'] = 'Ban ID';
$lang_banning_php['existing_bans'] = 'Existing bans';
$lang_banning_php['no_banning_when_bridged'] = 'You are currently running your gallery bridged to another application. Use that bridge application\'s banning mechanism instead of the one built into Coppermine. Coppermine\'s built-in banning mechanisms hardly apply when bridged.';
$lang_banning_php['records_on_page'] = '%d records on %d page(s)';
$lang_banning_php['ascending'] = 'ascending';
$lang_banning_php['descending'] = 'descending';
$lang_banning_php['sort_by'] = 'Sort by';
$lang_banning_php['sorted_by'] = 'sorted by';
$lang_banning_php['ban_record_x_updated'] = 'Ban record %s has been updated';
$lang_banning_php['ban_record_x_deleted'] = 'Ban record %s has been deleted';
$lang_banning_php['new_ban_record_created'] = 'New ban record has been created';
$lang_banning_php['ban_record_x_already_exists'] = 'Ban record for %s already exists!';
$lang_banning_php['comment_deleted'] = '%s comment made by %s has been deleted';
$lang_banning_php['comments_deleted'] = '%s comments made by %s have been deleted';
$lang_banning_php['email_field_invalid'] = 'Enter a valid email address';
$lang_banning_php['ip_address_field_invalid'] = 'Enter a valid IP address (x.x.x.x)';
$lang_banning_php['expiry_field_invalid'] = 'Enter a valid expiration date (YYYY-MM-DD)';
$lang_banning_php['form_not_submit'] = 'The form hasn\'t been submitted - there are errors that you need to correct first!';
}

// ------------------------------------------------------------------------- //
// File bridgemgr.php
// ------------------------------------------------------------------------- //
if (defined('BRIDGEMGR_PHP')) {
$lang_bridgemgr_php['title'] = 'Bridge Wizard';
$lang_bridgemgr_php['back'] = 'back';
$lang_bridgemgr_php['next'] = 'next';
$lang_bridgemgr_php['start_wizard'] = 'Start bridging wizard';
$lang_bridgemgr_php['finish'] = 'Finish';
$lang_bridgemgr_php['no_action_needed'] = 'No action needed in this step. Just click \'next\' to continue.';
$lang_bridgemgr_php['reset_to_default'] = 'Reset to default value';
$lang_bridgemgr_php['choose_bbs_app'] = 'choose application to bridge Coppermine with';
$lang_bridgemgr_php['support_url'] = 'Go here for support on this application';
$lang_bridgemgr_php['settings_path'] = 'path(s) used by your bridge app';
$lang_bridgemgr_php['full_forum_url'] = 'URL of the bridge app';
$lang_bridgemgr_php['relative_path_of_forum_from_webroot'] = 'Absolute bridging app path';
$lang_bridgemgr_php['relative_path_to_config_file'] = 'Relative path to your bridge app\'s config file';
$lang_bridgemgr_php['cookie_prefix'] = 'Cookie prefix';
$lang_bridgemgr_php['special_settings'] = 'bridge app-specific settings';
$lang_bridgemgr_php['use_post_based_groups'] = 'Use bridge app custom groups?';
$lang_bridgemgr_php['use_post_based_groups_yes'] = 'yes';
$lang_bridgemgr_php['use_post_based_groups_no'] = 'no';
$lang_bridgemgr_php['error_title'] = 'You need to correct these errors before you can continue. Go to the previous screen.';
$lang_bridgemgr_php['error_specify_bbs'] = 'You have to specify what application you want to bridge your Coppermine install with.';
$lang_bridgemgr_php['finalize'] = 'enable/disable bridging';
$lang_bridgemgr_php['finalize_explanation'] = 'So far, the settings you specified have been written into the database, but bridge app integration hasn\'t been enabled. You can switch integration on/off later at any time. Make sure to remember the admin username and password from standalone Coppermine, you might need it later to be able to make any changes. If anything goes wrong, go to %s and disable bridging there, using your standalone (unbridged) admin account (usually the one you set up during Coppermine install).';
$lang_bridgemgr_php['your_bridge_settings'] = 'Your bridge settings';
$lang_bridgemgr_php['title_enable'] = 'Enable integration/bridging with %s';
$lang_bridgemgr_php['bridge_enable_yes'] = 'enable';
$lang_bridgemgr_php['bridge_enable_no'] = 'disable';
$lang_bridgemgr_php['error_must_not_be_empty'] = 'must not be empty';
$lang_bridgemgr_php['error_either_be'] = 'must either be %s or %s';
$lang_bridgemgr_php['error_bridge_file_not_exist'] = 'Bridge file does not exist: %s';
$lang_bridgemgr_php['error_folder_not_exist'] = '%s doesn\'t exist. Correct the value you entered for %s';
$lang_bridgemgr_php['error_cookie_not_readible'] = 'Coppermine can\'t read a cookie named %s. Correct the value you entered for %s, or go to your bridge app administration panel and make sure that the cookie path is readable for Coppermine.';
$lang_bridgemgr_php['error_mandatory_field_empty'] = 'You cannot leave the field %s blank - fill in the proper value.';
$lang_bridgemgr_php['error_no_trailing_slash'] = 'There mustn\'t be a trailing slash in the field %s.';
$lang_bridgemgr_php['error_trailing_slash'] = 'There must be a trailing slash in the field %s.';
$lang_bridgemgr_php['error_prefix_and_table'] = '%s and ';
$lang_bridgemgr_php['recovery_title'] = 'Bridge Manager: emergency recovery';
$lang_bridgemgr_php['recovery_explanation'] = 'If you came here to administer the bridging of your Coppermine gallery, you have to log in first as admin. If you cannot log in because bridging doesn\'t work as expected, you can disable bridging with this page. Entering your username and password will not log you in, it will only disable bridging. Refer to the documentation for details.';
$lang_bridgemgr_php['username'] = 'Username';
$lang_bridgemgr_php['password'] = 'Password';
$lang_bridgemgr_php['disable_submit'] = 'submit';
$lang_bridgemgr_php['recovery_success_title'] = 'Authorization successful';
$lang_bridgemgr_php['recovery_success_content'] = 'You have successfully disabled bridging. Your Coppermine install runs now in standalone mode.';
$lang_bridgemgr_php['recovery_success_advice_login'] = 'Log in as admin to edit your bridge settings and/or enable bridging again.';
$lang_bridgemgr_php['goto_login'] = 'Go to login page';
$lang_bridgemgr_php['goto_bridgemgr'] = 'Go to bridge manager';
$lang_bridgemgr_php['recovery_failure_title'] = 'Authorization failed';
$lang_bridgemgr_php['recovery_failure_content'] = 'You supplied the wrong credentials. You will have to supply the admin account data of the standalone version (usually the account you set up during Coppermine install).';
$lang_bridgemgr_php['try_again'] = 'Try again';
$lang_bridgemgr_php['recovery_wait_title'] = 'Wait time has not elapsed';
$lang_bridgemgr_php['recovery_wait_content'] = 'For security reasons this script does not allow failed logons in short succession, so you will have to wait a bit until you\'re allowed to try to authenticate.';
$lang_bridgemgr_php['wait'] = 'wait';
$lang_bridgemgr_php['browse'] = 'browse';
}

// ------------------------------------------------------------------------- //
// File calendar.php
// ------------------------------------------------------------------------- //
if (defined('CALENDAR_PHP')) {
$lang_calendar_php['title'] = 'Calendar';
$lang_calendar_php['clear_date'] = 'clear date';
$lang_calendar_php['files'] = 'files';
}

// ------------------------------------------------------------------------- //
// File catmgr.php
// ------------------------------------------------------------------------- //
if (defined('CATMGR_PHP')) {
$lang_catmgr_php['miss_param'] = 'Parameters required for \'%s\' operation not supplied!';
$lang_catmgr_php['unknown_cat'] = 'Selected category does not exist in database';
$lang_catmgr_php['usergal_cat_ro'] = 'User galleries category can\'t be deleted!';
$lang_catmgr_php['manage_cat'] = 'Manage categories';
$lang_catmgr_php['confirm_delete'] = 'Are you sure you want to DELETE this category'; // js-alert
$lang_catmgr_php['category'] = 'Categories';
$lang_catmgr_php['operations'] = 'Operations';
$lang_catmgr_php['move_into'] = 'Move into';
$lang_catmgr_php['update_create'] = 'Update/Create category';
$lang_catmgr_php['parent_cat'] = 'Parent category';
$lang_catmgr_php['cat_title'] = 'Category title';
$lang_catmgr_php['cat_thumb'] = 'Category thumbnail';
$lang_catmgr_php['cat_desc'] = 'Category description';
$lang_catmgr_php['categories_alpha_sort'] = 'Sort categories alphabetically (instead of custom sort order)';
$lang_catmgr_php['save_cfg'] = 'Save configuration';
$lang_catmgr_php['no_category'] = '* No category *';
$lang_catmgr_php['group_create_alb'] = 'Group(s) allowed to create albums in this category';
}

// ------------------------------------------------------------------------- //
// File contact.php
// ------------------------------------------------------------------------- //
if (defined('CONTACT_PHP')) {
$lang_contact_php['title'] = 'Contact';
$lang_contact_php['your_name'] = 'Your name';
$lang_contact_php['your_email'] = 'Your email address';
$lang_contact_php['subject'] = 'Subject';
$lang_contact_php['your_message'] = 'Your message';
$lang_contact_php['name_field_mandatory'] = 'Please enter your name'; // js-alert
$lang_contact_php['name_field_invalid'] = 'Please enter your actual name'; // js-alert
$lang_contact_php['email_field_mandatory'] = 'Please enter your email address'; // js-alert
$lang_contact_php['email_field_invalid'] = 'Please enter a valid email address'; // js-alert
$lang_contact_php['subject_field_mandatory'] = 'Please enter a meaningful subject'; // js-alert
$lang_contact_php['message_field_mandatory'] = 'Please enter your message'; // js-alert
$lang_contact_php['confirmation'] = 'Confirmation';
$lang_contact_php['email_headline'] = 'This email was sent at %s using the contact form at %s from the IP address %s';
$lang_contact_php['registered_user'] = 'registered user';
$lang_contact_php['guest'] = 'guest';
$lang_contact_php['unknown'] = 'unknown';
$lang_contact_php['user_info'] = 'The %s named %s with the email address %s said:';
$lang_contact_php['failed_sending_email'] = 'Failed to send email. Please try again later.';
$lang_contact_php['email_sent'] = 'Your email has been sent.';
}

// ------------------------------------------------------------------------- //
// File admin.php
// ------------------------------------------------------------------------- //
if (defined('ADMIN_PHP')) {
$lang_admin_php['title'] = 'Gallery Configuration';
$lang_admin_php['general_settings'] = 'General settings';
$lang_admin_php['language_charset_settings'] = 'Language &amp; Charset settings';
$lang_admin_php['themes_settings'] = 'Themes settings';
$lang_admin_php['album_list_view'] = 'Album list view';
$lang_admin_php['thumbnail_view'] = 'Thumbnail view';
$lang_admin_php['image_view'] = 'Image view';
$lang_admin_php['comment_settings'] = 'Comment settings';
$lang_admin_php['thumbnail_settings'] = 'Thumbnails settings';
$lang_admin_php['file_settings'] = 'File settings';
$lang_admin_php['image_watermarking'] = 'Image watermarking';
$lang_admin_php['registration'] = 'Registration';
$lang_admin_php['user_settings'] = 'User settings';
$lang_admin_php['custom_fields_user_profile'] = 'Custom fields for user profile (leave blank if unused). Use Profile 6 for long entries, such as biographies';
$lang_admin_php['custom_fields_image_description'] = 'Custom fields for image description (leave blank if unused)';
$lang_admin_php['cookie_settings'] = 'Cookies settings';
$lang_admin_php['email_settings'] = 'Email settings'; // cpg1.6
$lang_admin_php['logging_stats'] = 'Logging and statistics';
$lang_admin_php['maintenance_settings'] = 'Maintenance settings';
$lang_admin_php['manage_exif'] = 'Manage EXIF display';
$lang_admin_php['manage_plugins'] = 'Manage plugins';
$lang_admin_php['manage_keyword'] = 'Manage keywords';
$lang_admin_php['restore_cfg'] = 'Restore factory defaults';
$lang_admin_php['restore_cfg_confirm'] = 'Do you really want to restore the entire configuration to factory defaults? This cannot be undone!'; // js-alert
$lang_admin_php['save_cfg'] = 'Save new configuration';
$lang_admin_php['notes'] = 'Notes';
$lang_admin_php['info'] = 'Information';
$lang_admin_php['upd_success'] = 'Coppermine configuration was updated';
$lang_admin_php['restore_success'] = 'Coppermine default configuration restored';
$lang_admin_php['name_a'] = 'Name ascending';
$lang_admin_php['name_d'] = 'Name descending';
$lang_admin_php['title_a'] = 'Title ascending';
$lang_admin_php['title_d'] = 'Title descending';
$lang_admin_php['date_a'] = 'Date ascending';
$lang_admin_php['date_d'] = 'Date descending';
$lang_admin_php['pos_a'] = 'Position ascending';
$lang_admin_php['pos_d'] = 'Position descending';
$lang_admin_php['view_a'] = 'Views ascending'; // cpg1.6
$lang_admin_php['view_d'] = 'Views descending'; // cpg1.6
$lang_admin_php['th_any'] = 'Max Aspect';
$lang_admin_php['th_ht'] = 'Height';
$lang_admin_php['th_wd'] = 'Width';
$lang_admin_php['th_ex'] = 'Exact';
$lang_admin_php['debug_everyone'] = 'Everyone';
$lang_admin_php['debug_admin'] = 'Admin only';
$lang_admin_php['no_logs'] = 'Off';
$lang_admin_php['log_normal'] = 'Normal';
$lang_admin_php['log_all'] = 'All';
$lang_admin_php['view_logs'] = 'View logs';
$lang_admin_php['click_expand'] = 'click section name to expand';
$lang_admin_php['click_collapse'] = 'click section name to collapse';
$lang_admin_php['expand_all'] = 'Expand All';
$lang_admin_php['toggle_all'] = 'Toggle All';
$lang_admin_php['notice1'] = '(*) These settings mustn\'t be changed if you already have files in your database.';
$lang_admin_php['notice2'] = '(**) When changing this setting, only the files that are added from that point on are affected, so it is advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the &quot;<a href="util.php">admin tools</a> (resize pictures)&quot; utility from the admin menu.';
$lang_admin_php['notice3'] = '(***) All log files are written in English.';
$lang_admin_php['bbs_disabled'] = 'Function disabled when using bridging/integration';
$lang_admin_php['auto_resize_everyone'] = 'Everyone';
$lang_admin_php['auto_resize_user'] = 'User only';
$lang_admin_php['ascending'] = 'ascending';
$lang_admin_php['descending'] = 'descending';
$lang_admin_php['collapse_all'] = 'Collapse all';
$lang_admin_php['separate_page'] = 'on a separate page';
$lang_admin_php['inline'] = 'inline';
$lang_admin_php['guests_only'] = 'Guests only';
$lang_admin_php['wm_bottomright'] = 'Bottom right';
$lang_admin_php['wm_bottomleft'] = 'Bottom left';
$lang_admin_php['wm_topleft'] = 'Top left';
$lang_admin_php['wm_topright'] = 'Top right';
$lang_admin_php['wm_center'] = 'Center';
$lang_admin_php['wm_both'] = 'Both';
$lang_admin_php['wm_original'] = 'Original';
$lang_admin_php['wm_resized'] = 'Resized';
$lang_admin_php['gallery_name'] = 'Gallery name';
$lang_admin_php['gallery_description'] = 'Gallery description';
$lang_admin_php['gallery_admin_email'] = 'Gallery administrator email';
$lang_admin_php['ecards_more_pic_target'] = 'URL of your Coppermine gallery folder';
$lang_admin_php['ecards_more_pic_target_detail'] = '(with a trailing slash, no \'index.php\' or similar at the end)';
$lang_admin_php['home_target'] = 'URL of your home page';
$lang_admin_php['enable_zipdownload'] = 'Allow ZIP-download of favorites';
$lang_admin_php['enable_zipdownload_no_textfile'] = 'just the favorites';
$lang_admin_php['enable_zipdownload_additional_textfile'] = 'favorites and readme file';
$lang_admin_php['time_offset'] = 'Timezone difference relative to GMT';
$lang_admin_php['time_offset_detail'] = '(current time: %s)';
$lang_admin_php['enable_help'] = 'Enable help-icons';
$lang_admin_php['enable_help_description'] = 'help partially available in English only';
$lang_admin_php['clickable_keyword_search'] = 'Enable clickable keywords in search';
$lang_admin_php['keyword_separator'] = 'Keyword separator';
$lang_admin_php['keyword_convert'] = 'Convert keyword separator';
$lang_admin_php['enable_plugins'] = 'Enable plugins';
$lang_admin_php['purge_expired_bans'] = 'Automatically purge expired bans';
$lang_admin_php['only_empty_albums'] = 'Add button next to album drop-down box to display only empty albums';
$lang_admin_php['browse_batch_add'] = 'Browsable batch-add interface';
$lang_admin_php['batch_add_hide_existing_files'] = 'Hide already added files in batch-add interface';
$lang_admin_php['batch_proc_limit'] = 'Process concurrency for batch-add interface';
$lang_admin_php['display_thumbs_batch_add'] = 'Display preview thumbnails on batch-add interface';
$lang_admin_php['lang'] = 'Default language';
$lang_admin_php['language_autodetect'] = 'Autodetect language';
$lang_admin_php['charset'] = 'Character encoding';
// 'previous_next_tab'] = 'Display previous/next on tabbed pages';
$lang_admin_php['theme'] = 'Theme';
$lang_admin_php['custom_lnk_name'] = 'Custom menu link name';
$lang_admin_php['custom_lnk_url'] = 'Custom menu link URL';
$lang_admin_php['enable_menu_icons'] = 'Enable menu icons';
$lang_admin_php['show_bbcode_help'] = 'Display BBCode help';
$lang_admin_php['vanity_block'] = 'Show the vanity block on themes that are defined as XHTML and CSS compliant';
$lang_admin_php['highlight_multiple'] = 'To highlight multiple lines, hold the [Ctrl]-key down';
$lang_admin_php['custom_header_path'] = 'Path to custom header include';
$lang_admin_php['custom_footer_path'] = 'Path to custom footer include';
$lang_admin_php['browse_by_date'] = 'Enable browsing by date';
$lang_admin_php['display_redirection_page'] = 'Display redirection pages';
$lang_admin_php['main_table_width'] = 'Width of the main table';
$lang_admin_php['pixels_or_percent'] = 'pixels or %';
$lang_admin_php['subcat_level'] = 'Number of levels of categories to display';
$lang_admin_php['albums_per_page'] = 'Number of albums to display';
$lang_admin_php['album_list_cols'] = 'Number of columns for the album list';
$lang_admin_php['alb_list_thumb_size'] = 'Size of album thumbnails';
$lang_admin_php['main_page_layout'] = 'The content of the main page';
$lang_admin_php['first_level'] = 'Show first level album thumbnails in categories';
$lang_admin_php['categories_alpha_sort'] = 'Sort categories alphabetically';
$lang_admin_php['categories_alpha_sort_details'] = '(instead of custom sort order)';
$lang_admin_php['album_sort_order'] = 'Sort order for albums';
$lang_admin_php['link_pic_count'] = 'Show number of linked files';
$lang_admin_php['link_last_upload'] = 'Regard upload time of linked files in album info'; // cpg1.6
$lang_admin_php['thumbcols'] = 'Number of columns on thumbnail page';
$lang_admin_php['thumbrows'] = 'Number of rows on thumbnail page';
$lang_admin_php['max_tabs'] = 'Maximum number of tabs to display';
$lang_admin_php['tabs_dropdown'] = 'Show dropdown list of all pages next to tabs';
$lang_admin_php['caption_in_thumbview'] = 'Display file caption (in addition to title) below the thumbnail';
$lang_admin_php['views_in_thumbview'] = 'Display number of views below the thumbnail';
$lang_admin_php['display_comment_count'] = 'Display number of comments below the thumbnail';
$lang_admin_php['display_uploader'] = 'Display uploader name below the thumbnail';
// 'display_admin_uploader'] = 'Display name of admin uploaders below the thumbnail';
$lang_admin_php['display_filename'] = 'Display file name below the thumbnail';
$lang_admin_php['display_thumbnail_rating'] = 'Display rating below the thumbnail';
$lang_admin_php['alb_desc_thumb'] = 'Display album description';
$lang_admin_php['thumbnail_to_fullsize'] = 'Go directly from thumbnail to full-sized image';
$lang_admin_php['default_sort_order'] = 'Default sort order for files';
$lang_admin_php['custom_sortorder_thumbs'] = 'Display sort buttons on thumbnail page';
$lang_admin_php['min_votes_for_rating'] = 'Minimum number of votes for a file to appear in the \'top rated\' list';
$lang_admin_php['picture_table_width'] = 'Width of the table for file display';
$lang_admin_php['display_pic_info'] = 'File information is visible by default';
$lang_admin_php['picinfo_movie_download_link'] = 'Display movie download link in the file information area';
$lang_admin_php['max_img_desc_length'] = 'Max length for an image description';
$lang_admin_php['max_com_wlength'] = 'Max number of characters in a word';
$lang_admin_php['display_film_strip'] = 'Show film strip';
$lang_admin_php['max_film_strip_items'] = 'Number of items in film strip';
$lang_admin_php['slideshow_interval'] = 'Slideshow interval';
$lang_admin_php['milliseconds'] = 'milliseconds';
$lang_admin_php['slideshow_interval_detail'] = '1 second = 1000 milliseconds';
$lang_admin_php['slideshow_hits'] = 'Count hits in slideshow';
$lang_admin_php['ecard_captcha'] = 'Display captcha (visual confirmation) for sending ecards'; // cpg1.6
$lang_admin_php['ecard_flash'] = 'Allow Flash in Ecards';
$lang_admin_php['not_recommended'] = 'not recommended';
$lang_admin_php['recommended'] = 'recommended';
$lang_admin_php['transparent_overlay'] = 'Insert a transparent overlay to minimize image theft';
$lang_admin_php['old_style_rating'] = 'Go back to old rating system';
$lang_admin_php['old_style_rating_extra'] = 'This will disable the \'Number of rating stars to be used\' option';
$lang_admin_php['rating_stars_amount'] = 'Number of rating stars to be used when voting';
$lang_admin_php['rate_own_files'] = 'Users can rate their own files';
$lang_admin_php['filter_bad_words'] = 'Filter bad words in comments';
$lang_admin_php['enable_smilies'] = 'Allow smileys in comments';
$lang_admin_php['disable_comment_flood_protect'] = 'Allow several consecutive comments on one file from the same user';
$lang_admin_php['disable_comment_flood_protect_details'] = '(disable flood protection)';
$lang_admin_php['max_com_lines'] = 'Max number of lines in a comment';
$lang_admin_php['max_com_size'] = 'Maximum length of a comment';
$lang_admin_php['email_comment_notification'] = 'Notify admin of comments by email';
$lang_admin_php['comments_sort_descending'] = 'Sort order of comments';
$lang_admin_php['comments_per_page'] = 'Comments per page';
$lang_admin_php['comments_anon_pfx'] = 'Prefix for anonymous comments authors';
$lang_admin_php['comment_approval'] = 'Comments require approval';
$lang_admin_php['display_comment_approval_only'] = 'Only display comments needing approval on the &quot;Review Comments&quot; page';
$lang_admin_php['comment_placeholder'] = 'Display placeholder text to end users for comments waiting for admin approval';
$lang_admin_php['comment_user_edit'] = 'Allow users to edit their comments';
$lang_admin_php['comment_captcha'] = 'Display Captcha (Visual Confirmation) for adding comments';
$lang_admin_php['comment_akismet_enable'] = 'Akismet Options';
$lang_admin_php['comment_akismet_enable_description'] = 'What should be done if Akismet rejects a comment as spam?';
$lang_admin_php['comment_akismet_applicable_only'] = 'Options only apply if Akismet has been enabled by entering a valid API key';
$lang_admin_php['comment_akismet_enable_approval'] = 'Allow comments that fail to pass Akismet, but mark them unapproved';
$lang_admin_php['comment_akismet_drop_tell'] = 'Drop comment that fails to validate, and tell author that it was rejected';
$lang_admin_php['comment_akismet_drop_lie'] = 'Drop comment that fails to validate, but tell author (spammer) it has been added';
$lang_admin_php['comment_akismet_api_key'] = 'Akismet API key';
$lang_admin_php['comment_akismet_api_key_description'] = 'Leave empty to disable Akismet';
$lang_admin_php['comment_akismet_group'] = 'Apply Akismet for comments made by';
$lang_admin_php['comment_promote_registration'] = 'Ask guests to log in to post comments';
$lang_admin_php['thumb_width'] = 'Max dimension of a thumbnail (width, if you use "exact" in "Use dimension")';
$lang_admin_php['thumb_use'] = 'Use dimension';
$lang_admin_php['thumb_use_detail'] = '(width or height or max aspect for thumbnail)';
$lang_admin_php['thumb_height'] = 'Height of a thumbnail';
$lang_admin_php['thumb_height_detail'] = '(only applies if you use &quot;exact&quot; in &quot;Use dimension&quot;)';
$lang_admin_php['movie_audio_document'] = 'movie, audio, document';
$lang_admin_php['thumb_pfx'] = 'The prefix for thumbnails';
$lang_admin_php['enable_unsharp'] = 'Thumb Sharpening: enable Unsharp Mask';
$lang_admin_php['unsharp_amount'] = 'Thumb Sharpening amount';
$lang_admin_php['unsharp_radius'] = 'Thumb Sharpening radius';
$lang_admin_php['unsharp_threshold'] = 'Thumb Sharpening threshold';
$lang_admin_php['jpeg_qual'] = 'Quality for JPEG files';
$lang_admin_php['make_intermediate'] = 'Create intermediate pictures';
$lang_admin_php['picture_use'] = 'Use dimension';
$lang_admin_php['picture_use_detail'] = '(width or height or max aspect for an intermediate picture)';
$lang_admin_php['picture_use_thumb'] = 'Like thumbnail';
$lang_admin_php['picture_width'] = 'Max width or height of an intermediate picture';
$lang_admin_php['max_upl_size'] = 'Max size for uploaded files';
$lang_admin_php['kilobytes'] = 'KB';
$lang_admin_php['pixels'] = 'pixels';
$lang_admin_php['max_upl_width_height'] = 'Max width or height for uploaded pictures';
$lang_admin_php['auto_resize'] = 'Auto resize images that are larger than max width or height';
$lang_admin_php['fullsize_padding_x'] = 'Horizontal padding for full-size pop-up';
$lang_admin_php['fullsize_padding_y'] = 'Vertical padding for full-size pop-up';
$lang_admin_php['allow_private_albums'] = 'Albums can be private';
$lang_admin_php['allow_private_albums_note'] = '(Note: if you switch from \'yes\' to \'no\' any current private albums will be visible)';
$lang_admin_php['show_private'] = 'Show private album icon to unlogged user';
$lang_admin_php['forbiden_fname_char'] = 'Characters forbidden in filenames';
$lang_admin_php['silly_safe_mode'] = 'Enable &quot;silly safe mode&quot;';
$lang_admin_php['allowed_img_types'] = 'Allowed image types';
$lang_admin_php['allowed_mov_types'] = 'Allowed movie types';
$lang_admin_php['media_autostart'] = 'Movie playback autostart';
$lang_admin_php['allowed_snd_types'] = 'Allowed audio types';
$lang_admin_php['allowed_doc_types'] = 'Allowed document types';
$lang_admin_php['thumb_method'] = 'Method for resizing images';
$lang_admin_php['impath'] = 'Path to ImageMagick \'convert\' utility';
$lang_admin_php['impath_example'] = '(eg. /usr/bin/)';
$lang_admin_php['im_options'] = 'Additional command line options for ImageMagick';
$lang_admin_php['read_exif_data'] = 'Read EXIF data from JPEG files';
$lang_admin_php['read_iptc_data'] = 'Read IPTC data from JPEG files';
$lang_admin_php['fullpath'] = 'The album directory';
$lang_admin_php['userpics'] = 'The directory for user files';
$lang_admin_php['upload_create_album_directory'] = 'Create sub-directory for each album in users\' upload directories'; // cpg1.6
$lang_admin_php['normal_pfx'] = 'The prefix for intermediate pictures';
$lang_admin_php['default_dir_mode'] = 'Default mode for directories';
$lang_admin_php['default_file_mode'] = 'Default mode for files';
$lang_admin_php['enable_watermark'] = 'Watermark images';
$lang_admin_php['enable_thumb_watermark'] = 'Watermark custom thumbs';
$lang_admin_php['where_put_watermark'] = 'Where to place the watermark';
$lang_admin_php['which_files_to_watermark'] = 'Which files to watermark';
$lang_admin_php['watermark_file'] = 'Which file to use for watermark';
$lang_admin_php['watermark_transparency'] = 'Transparency for entire image';
$lang_admin_php['zero_2_hundred'] = '0-100';
$lang_admin_php['reduce_watermark'] = 'Downsize watermark if width of a picture is smaller than entered value. That is the 100% reference point. Resizing of the watermark is linear (0 to disable)';
$lang_admin_php['watermark_transparency_featherx'] = 'Set color transparent x';
$lang_admin_php['watermark_transparency_feathery'] = 'Set color transparent y';
$lang_admin_php['gd2_only'] = 'GD2 only';
$lang_admin_php['allow_user_registration'] = 'Allow new user registrations';
$lang_admin_php['global_registration_pw'] = 'Global password for registration';
$lang_admin_php['user_registration_disclaimer'] = 'Display disclaimer on user registration';
$lang_admin_php['registration_captcha'] = 'Display Captcha (Visual Confirmation) on registration page';
$lang_admin_php['reg_requires_valid_email'] = 'User registration requires email verification';
$lang_admin_php['reg_notify_admin_email'] = 'Notify admin of user registration by email';
$lang_admin_php['admin_activation'] = 'Admin activation of registrations';
$lang_admin_php['personal_album_on_registration'] = 'Create user album in personal gallery on registration';
$lang_admin_php['allow_unlogged_access'] = 'Allow unlogged users (guest or anonymous) access';
$lang_admin_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image';
$lang_admin_php['thumbnail_intermediate'] = 'thumbnail and intermediate image';
$lang_admin_php['thumbnail_only'] = 'thumbnail only';
$lang_admin_php['upload_mechanism'] = 'Default upload method';
$lang_admin_php['upload_swf'] = 'multiple files, Flash-driven';
$lang_admin_php['upload_single'] = 'simple - one file at a time';
$lang_admin_php['allow_user_upload_choice'] = 'Allow users to choose the upload method';
$lang_admin_php['editpics_ignore_newer_than'] = 'Show previously uploaded files at edit files form after HTML5/flash upload';
$lang_admin_php['allow_duplicate_emails_addr'] = 'Allow two users to have the same email address';
$lang_admin_php['upl_notify_admin_email'] = 'Notify admin of user upload awaiting approval';
$lang_admin_php['user_manager_hide_file_stats'] = 'Hide file count and disk space usage in user manager'; // cpg1.6
$lang_admin_php['allow_memberlist'] = 'Allow logged in users to view the memberlist';
$lang_admin_php['allow_email_change'] = 'Allow users to change email address in their profile';
$lang_admin_php['allow_user_account_delete'] = 'Allow users to delete their own user account';
$lang_admin_php['users_can_edit_pics'] = 'Allow users to retain control over their files in public galleries';
$lang_admin_php['allow_user_move_album'] = 'Allow users to move their albums from/to allowed categories';
$lang_admin_php['allow_user_album_keyword'] = 'Allow users to assign album keywords';
$lang_admin_php['allow_user_edit_after_cat_close'] = 'Allow users to edit their albums when in a locked category';
$lang_admin_php['album_uploads_default'] = 'Default value for album property "Visitors can upload files"'; // cpg1.6
$lang_admin_php['login_method_username'] = 'Username';
$lang_admin_php['login_method_email'] = 'Email address';
$lang_admin_php['login_method_both'] = 'Both';
$lang_admin_php['login_method'] = 'How do you want your users to be able to login';
$lang_admin_php['login_threshold'] = 'Number of failed login attempts until temporary ban';
$lang_admin_php['login_threshold_detail'] = '(to avoid brute force attacks)';
$lang_admin_php['login_expiry'] = 'Duration of a temporary ban after failed logins';
$lang_admin_php['minutes'] = 'minutes';
$lang_admin_php['report_post'] = 'Enable Report to Admin';
$lang_admin_php['user_profile1_name'] = 'Profile 1 name';
$lang_admin_php['user_profile2_name'] = 'Profile 2 name';
$lang_admin_php['user_profile3_name'] = 'Profile 3 name';
$lang_admin_php['user_profile4_name'] = 'Profile 4 name';
$lang_admin_php['user_profile5_name'] = 'Profile 5 name';
$lang_admin_php['user_profile6_name'] = 'Profile 6 name';
$lang_admin_php['user_field1_name'] = 'Field 1 name';
$lang_admin_php['user_field2_name'] = 'Field 2 name';
$lang_admin_php['user_field3_name'] = 'Field 3 name';
$lang_admin_php['user_field4_name'] = 'Field 4 name';
$lang_admin_php['cookie_name'] = 'Cookie name';
$lang_admin_php['cookie_path'] = 'Cookie path';
$lang_admin_php['smtp_host'] = 'SMTP Host (when left blank, sendmail will be used)';
$lang_admin_php['smtp_username'] = 'SMTP Username';
$lang_admin_php['smtp_password'] = 'SMTP Password';
$lang_admin_php['log_mode'] = 'Logging mode';
$lang_admin_php['log_mode_details'] = 'All log files are written in English.';
$lang_admin_php['log_ecards'] = 'Log ecards';
$lang_admin_php['log_ecards_detail'] = 'Note: logging can have legal impacts. The user should be informed on registration that ecards are being logged. It is recommended to provide a separate page with a privacy policy as well.';
$lang_admin_php['vote_details'] = 'Keep detailed vote statistics';
$lang_admin_php['hit_details'] = 'Keep detailed hit statistics';
$lang_admin_php['display_stats_on_index'] = 'Display statistics on index page';
$lang_admin_php['count_file_hits'] = 'Count file views';
$lang_admin_php['count_album_hits'] = 'Count album views';
$lang_admin_php['count_admin_hits'] = 'Count admin views';
$lang_admin_php['debug_mode'] = 'Enable debug mode';
$lang_admin_php['debug_notice'] = 'Display notices in debug mode';
$lang_admin_php['offline'] = 'Gallery is offline';
$lang_admin_php['display_coppermine_news'] = 'Display news from coppermine-gallery.net';
$lang_admin_php['display_coppermine_detail'] = 'will only be displayed for the admin';
$lang_admin_php['config_setting_invalid'] = 'The value you have set for &laquo;%s&raquo; is invalid, please review it.';
$lang_admin_php['config_setting_rangerr'] = 'The value you have set for &laquo;%s&raquo; is out of allowed range, please review it.';
$lang_admin_php['config_setting_ok'] = 'Your setting for &laquo;%s&raquo; has been saved.';
$lang_admin_php['contact_form_settings'] = 'Contact form settings';
$lang_admin_php['contact_form_guest_enable'] = 'Display contact form to anonymous visitors (guests)';
$lang_admin_php['contact_form_registered_enable'] = 'Display contact form to registered users';
$lang_admin_php['with_captcha'] = 'with captcha';
$lang_admin_php['without_captcha'] = 'without captcha';
$lang_admin_php['optional'] = 'optional';
$lang_admin_php['mandatory'] = 'mandatory';
$lang_admin_php['contact_form_guest_name_field'] = 'Display sender name field for guests';
$lang_admin_php['contact_form_guest_email_field'] = 'Display sender email field for guests';
$lang_admin_php['contact_form_subject_field'] = 'Display subject field';
$lang_admin_php['contact_form_subject_content'] = 'Subject line for emails generated by contact form';
$lang_admin_php['contact_form_sender_email'] = 'Use the sender\'s email address as &quot;from&quot; address';
$lang_admin_php['allow_no_link'] = 'allow, but don\'t display link';
$lang_admin_php['allow_show_link'] = 'allow and promote it by displaying a link';
$lang_admin_php['display_sidebar_user'] = 'Sidebar for registered users';
$lang_admin_php['display_sidebar_guest'] = 'Sidebar for guests';
$lang_admin_php['do_not_change'] = 'Don\'t change this unless you REALLY know what you\'re doing!';
$lang_admin_php['reset_to_default'] = 'Reset to default';
$lang_admin_php['no_change_needed'] = 'No change needed, config option already is set to default';
$lang_admin_php['enabled'] = 'enabled';
$lang_admin_php['disabled'] = 'disabled';
$lang_admin_php['none'] = 'none';
$lang_admin_php['warning_change'] = 'When changing this setting, only the files that are added from that point on are affected, so it\'s advisable that this setting is not changed if there are already files in the gallery. You can, however, apply the changes to the existing files with the "admin tools (resize pictures)" utility from the admin menu.';
$lang_admin_php['warning_exist'] = 'These settings mustn\'t be changed if you already have files in your database.';
$lang_admin_php['warning_dont_submit'] = 'If you are not sure about the impact that changing this setting will have, do not submit the form and review the documentation first.'; // js-alert
$lang_admin_php['warning_just_new_albums'] = 'This option applies just to new albums and doesn\'t affect existing albums.'; // cpg1.6
$lang_admin_php['menu_only'] = 'menu only';
$lang_admin_php['everywhere'] = 'everywhere';
$lang_admin_php['manage_languages'] = 'Manage languages';
$lang_admin_php['form_token_lifetime'] = 'Form token lifetime';
$lang_admin_php['seconds'] = 'Seconds';
$lang_admin_php['display_reset_boxes_in_config'] = 'Display reset boxes in config';
$lang_admin_php['upd_not_needed'] = 'Update not needed.';
}


// ------------------------------------------------------------------------- //
// File db_ecard.php
// ------------------------------------------------------------------------- //
if (defined('DB_ECARD_PHP')) {
$lang_db_ecard_php['title'] = 'Sent ecards';
$lang_db_ecard_php['ecard_sender'] = 'Sender';
$lang_db_ecard_php['ecard_recipient'] = 'Recipient';
$lang_db_ecard_php['ecard_date'] = 'Date';
$lang_db_ecard_php['ecard_display'] = 'Display ecard';
$lang_db_ecard_php['ecard_name'] = 'Name';
$lang_db_ecard_php['ecard_email'] = 'Email';
$lang_db_ecard_php['ecard_ip'] = 'IP';
$lang_db_ecard_php['ecard_ascending'] = 'ascending';
$lang_db_ecard_php['ecard_descending'] = 'descending';
$lang_db_ecard_php['ecard_sorted'] = 'Sorted';
$lang_db_ecard_php['ecard_by_date'] = 'by date';
$lang_db_ecard_php['ecard_by_sender_name'] = 'by sender\'s name';
$lang_db_ecard_php['ecard_by_sender_email'] = 'by sender\'s email';
$lang_db_ecard_php['ecard_by_sender_ip'] = 'by sender\'s IP address';
$lang_db_ecard_php['ecard_by_recipient_name'] = 'by recipient\'s name';
$lang_db_ecard_php['ecard_by_recipient_email'] = 'by recipient\'s email';
$lang_db_ecard_php['ecard_number'] = 'Displaying record %s to %s of %s';
$lang_db_ecard_php['ecard_goto_page'] = 'go to page';
$lang_db_ecard_php['ecard_records_per_page'] = 'Records per page';
$lang_db_ecard_php['check_all'] = 'Check All';
$lang_db_ecard_php['uncheck_all'] = 'Uncheck All';
$lang_db_ecard_php['ecards_delete_selected'] = 'Delete selected ecards';
$lang_db_ecard_php['ecards_delete_confirm'] = 'Are you sure you want to delete the records? Tick the checkbox!';
$lang_db_ecard_php['ecards_delete_sure'] = 'I\'m sure';
$lang_db_ecard_php['invalid_data'] = 'The data for the ecard you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File db_input.php
// ------------------------------------------------------------------------- //
if (defined('DB_INPUT_PHP')) {
$lang_db_input_php['empty_name_or_com'] = 'You need to type your name and a comment';
$lang_db_input_php['com_added'] = 'Your comment was added';
$lang_db_input_php['alb_need_title'] = 'You have to provide a title for the album!';
$lang_db_input_php['no_udp_needed'] = 'No update needed.';
$lang_db_input_php['alb_updated'] = 'The album was updated';
$lang_db_input_php['unknown_album'] = 'Selected album does not exist or you don\'t have permission to upload in this album';
$lang_db_input_php['no_pic_uploaded'] = 'No file was uploaded!<br />If you have really selected a file to upload, check that the server allows file uploads...';
$lang_db_input_php['err_mkdir'] = 'Failed to create directory %s!';
$lang_db_input_php['dest_dir_ro'] = 'Destination directory %s is not writable by the script!';
$lang_db_input_php['err_move'] = 'Impossible to move %s to %s!';
$lang_db_input_php['err_fsize_too_large'] = 'The size of file you have uploaded is too large (maximum allowed is %s x %s)!';
$lang_db_input_php['err_imgsize_too_large'] = 'The size of the file you have uploaded is too large (maximum allowed is %s KB)!';
$lang_db_input_php['err_invalid_img'] = 'The file you have uploaded is not a valid image!';
$lang_db_input_php['allowed_img_types'] = 'You can only upload %s images.';
$lang_db_input_php['err_insert_pic'] = 'The file \'%s\' can\'t be inserted in the album ';
$lang_db_input_php['upload_success'] = 'Your file was uploaded successfully.<br />It will be visible after admin approval.';
$lang_db_input_php['notify_admin_email_subject'] = '%s - Upload notification';
$lang_db_input_php['notify_admin_email_body'] = 'A picture has been uploaded by %s that needs your approval. Visit %s';
$lang_db_input_php['info'] = 'Information';
$lang_db_input_php['com_updated'] = 'Comment updated';
$lang_db_input_php['alb_updated'] = 'Album updated';
$lang_db_input_php['err_comment_empty'] = 'Your comment is empty!';
$lang_db_input_php['err_invalid_fext'] = 'Only files with the following extensions are accepted:'; // js-alert
$lang_db_input_php['no_flood'] = 'Sorry but you are already the author of the last comment posted for this file<br />Edit the comment you have posted if you want to modify it';
$lang_db_input_php['redirect_msg'] = 'You are being redirected.<br /><br />Click \'CONTINUE\' if the page does not refresh automatically';
$lang_db_input_php['upl_success'] = 'Your file was successfully added';
$lang_db_input_php['email_comment_subject'] = 'Comment posted on Coppermine Photo Gallery';
$lang_db_input_php['email_comment_body'] = 'Someone has posted a comment on your gallery. See it at';
$lang_db_input_php['album_not_selected'] = 'Album not selected';
$lang_db_input_php['com_author_error'] = 'A registered user is using this nickname. Login or use another one';
}

// ------------------------------------------------------------------------- //
// File delete.php
// ------------------------------------------------------------------------- //
if (defined('DELETE_PHP')) {
$lang_delete_php['orig_pic'] = 'original image';
$lang_delete_php['fs_pic'] = 'full size image';
$lang_delete_php['del_success'] = 'successfully deleted';
$lang_delete_php['ns_pic'] = 'normal size image';
$lang_delete_php['err_del'] = 'can\'t be deleted';
$lang_delete_php['thumb_pic'] = 'thumbnail';
$lang_delete_php['comment'] = 'comment';
$lang_delete_php['im_in_alb'] = 'image in album';
$lang_delete_php['alb_del_success'] = 'Album &laquo;%s&raquo; deleted';
$lang_delete_php['alb_mgr'] = 'Album Manager';
$lang_delete_php['err_invalid_data'] = 'Invalid data received in \'%s\'';
$lang_delete_php['create_alb'] = 'Creating album \'%s\'';
$lang_delete_php['update_alb'] = 'Updating album \'%s\' with title \'%s\' and index \'%s\'';
$lang_delete_php['del_pic'] = 'Delete file';
$lang_delete_php['del_alb'] = 'Delete album';
$lang_delete_php['del_user'] = 'Delete user';
$lang_delete_php['err_unknown_user'] = 'The selected user does not exist!';
$lang_delete_php['err_empty_groups'] = 'There\'s no group table, or the group table is empty!';
$lang_delete_php['comment_deleted'] = 'Comment was successfully deleted';
$lang_delete_php['npic'] = 'Picture';
$lang_delete_php['pic_mgr'] = 'Picture Manager';
$lang_delete_php['update_pic'] = 'Updating picture \'%s\' with filename \'%s\' and index \'%s\'';
$lang_delete_php['username'] = 'Username';
$lang_delete_php['anonymized_comments'] = '%s comment(s) anonymized';
$lang_delete_php['anonymized_uploads'] = '%s public upload(s) anonymized';
$lang_delete_php['deleted_comments'] = '%s comment(s) deleted';
$lang_delete_php['deleted_uploads'] = '%s public upload(s) deleted';
$lang_delete_php['user_deleted'] = 'user %s deleted';
$lang_delete_php['activate_user'] = 'Activate user';
$lang_delete_php['user_already_active'] = 'Account is already active';
$lang_delete_php['activated'] = 'Activated';
$lang_delete_php['deactivate_user'] = 'Deactivate user';
$lang_delete_php['user_already_inactive'] = 'Account is already inactive';
$lang_delete_php['deactivated'] = 'Deactivated';
$lang_delete_php['reset_password'] = 'Reset password(s)';
$lang_delete_php['password_reset'] = 'Password reset to %s';
$lang_delete_php['change_group'] = 'Change primary group';
$lang_delete_php['change_group_to_group'] = 'Changing from %s to %s';
$lang_delete_php['add_group'] = 'Add secondary group';
$lang_delete_php['add_group_to_group'] = 'Adding user %s to group %s. He\'s now member of %s as primary and of %s as secondary membergroup(s).';
$lang_delete_php['status'] = 'Status';
$lang_delete_php['updating_album'] = 'Updating album ';
$lang_delete_php['moved_picture_to_position'] = 'Moved picture %s to position %s';
}

// ------------------------------------------------------------------------- //
// File displayimage.php
// ------------------------------------------------------------------------- //
if (defined('DISPLAYIMAGE_PHP')){
$lang_display_image_php['confirm_del'] = 'Are you sure you want to DELETE this file?\\nComments will also be deleted.'; // js-alert
$lang_display_image_php['del_pic'] = 'Delete this file';
$lang_display_image_php['size'] = '%s x %s pixels';
$lang_display_image_php['views'] = '%s times';
$lang_display_image_php['slideshow'] = 'Slideshow';
$lang_display_image_php['stop_slideshow'] = 'Stop Slideshow';
$lang_display_image_php['view_fs'] = 'Click to view full size image';
$lang_display_image_php['edit_pic'] = 'Edit file information';
$lang_display_image_php['crop_pic'] = 'Crop and Rotate';
$lang_display_image_php['set_player'] = 'Change player';

$lang_picinfo['title'] = 'File information';
$lang_picinfo['Album name'] = 'Album name';
$lang_picinfo['Rating'] = 'Rating (%s votes)';
$lang_picinfo['Date Added'] = 'Date added';
$lang_picinfo['Dimensions'] = 'Dimensions';
$lang_picinfo['Displayed'] = 'Displayed';
$lang_picinfo['URL'] = 'URL';
$lang_picinfo['Make'] = 'Make';
$lang_picinfo['Model'] = 'Model';
$lang_picinfo['DateTime'] = 'Date Time';
$lang_picinfo['ISOSpeedRatings'] = 'ISO';
$lang_picinfo['MaxApertureValue'] = 'Max Aperture';
$lang_picinfo['FocalLength'] = 'Focal length';
$lang_picinfo['Comment'] = 'Comment';
$lang_picinfo['addFav'] = 'Add to Favorites';
$lang_picinfo['addFavPhrase'] = 'Favorites';
$lang_picinfo['remFav'] = 'Remove from Favorites';
$lang_picinfo['iptcTitle'] = 'IPTC Title';
$lang_picinfo['iptcCopyright'] = 'IPTC Copyright';
$lang_picinfo['iptcKeywords'] = 'IPTC Keywords';
$lang_picinfo['iptcCategory'] = 'IPTC Category';
$lang_picinfo['iptcSubCategories'] = 'IPTC Sub Categories';
$lang_picinfo['ColorSpace'] = 'Color Space';
$lang_picinfo['ExposureProgram'] = 'Exposure Program';
$lang_picinfo['Flash'] = 'Flash';
$lang_picinfo['MeteringMode'] = 'Metering Mode';
$lang_picinfo['ExposureTime'] = 'Exposure Time';
$lang_picinfo['ExposureBiasValue'] = 'Exposure Bias';
$lang_picinfo['ImageDescription'] = 'Image Description';
$lang_picinfo['Orientation'] = 'Orientation';
$lang_picinfo['xResolution'] = 'X Resolution';
$lang_picinfo['yResolution'] = 'Y Resolution';
$lang_picinfo['ResolutionUnit'] = 'Resolution Unit';
$lang_picinfo['Software'] = 'Software';
$lang_picinfo['YCbCrPositioning'] = 'YCbCrPositioning';
$lang_picinfo['ExifOffset'] = 'EXIF Offset';
$lang_picinfo['IFD1Offset'] = 'IFD1 Offset';
$lang_picinfo['FNumber'] = 'FNumber';
$lang_picinfo['ExifVersion'] = 'EXIF Version';
$lang_picinfo['DateTimeOriginal'] = 'DateTime Original';
$lang_picinfo['DateTimedigitized'] = 'DateTime digitized';
$lang_picinfo['ComponentsConfiguration'] = 'Components Configuration';
$lang_picinfo['CompressedBitsPerPixel'] = 'Compressed Bits Per Pixel';
$lang_picinfo['LightSource'] = 'Light Source';
$lang_picinfo['ISOSetting'] = 'ISO Setting';
$lang_picinfo['ColorMode'] = 'Color Mode';
$lang_picinfo['Quality'] = 'Quality';
$lang_picinfo['ImageSharpening'] = 'Image Sharpening';
$lang_picinfo['FocusMode'] = 'Focus Mode';
$lang_picinfo['FlashSetting'] = 'Flash Setting';
$lang_picinfo['ISOSelection'] = 'ISO Selection';
$lang_picinfo['ImageAdjustment'] = 'Image Adjustment';
$lang_picinfo['Adapter'] = 'Adapter';
$lang_picinfo['ManualFocusDistance'] = 'Manual Focus Distance';
$lang_picinfo['DigitalZoom'] = 'Digital Zoom';
$lang_picinfo['AFFocusPosition'] = 'AF Focus Position';
$lang_picinfo['Saturation'] = 'Saturation';
$lang_picinfo['NoiseReduction'] = 'Noise Reduction';
$lang_picinfo['FlashPixVersion'] = 'FlashPix Version';
$lang_picinfo['ExifImageWidth'] = 'EXIF Image Width';
$lang_picinfo['ExifImageHeight'] = 'EXIF Image Height';
$lang_picinfo['ExifInteroperabilityOffset'] = 'EXIF Interoperability Offset';
$lang_picinfo['FileSource'] = 'File Source';
$lang_picinfo['SceneType'] = 'Scene Type';
$lang_picinfo['CustomerRender'] = 'Customer Render';
$lang_picinfo['ExposureMode'] = 'Exposure Mode';
$lang_picinfo['WhiteBalance'] = 'White Balance';
$lang_picinfo['DigitalZoomRatio'] = 'Digital Zoom Ratio';
$lang_picinfo['SceneCaptureMode'] = 'Scene Capture Mode';
$lang_picinfo['GainControl'] = 'Gain Control';
$lang_picinfo['Contrast'] = 'Contrast';
$lang_picinfo['Sharpness'] = 'Sharpness';
$lang_picinfo['ManageExifDisplay'] = 'Manage EXIF Display';
$lang_picinfo['success'] = 'Information updated successfully.';
$lang_picinfo['show_details'] = 'Show details';
$lang_picinfo['hide_details'] = 'Hide details';
$lang_picinfo['download_URL'] = 'Direct Link';
$lang_picinfo['movie_player'] = 'Play the file in your standard application';

$lang_display_comments['comment_x_to_y_of_z'] = '%d to %d of %d';
$lang_display_comments['page'] = 'Page';
$lang_display_comments['edit_title'] = 'Edit this comment';
$lang_display_comments['delete_title'] = 'Delete this comment';
$lang_display_comments['confirm_delete'] = 'Are you sure you want to delete this comment?'; // js-alert
$lang_display_comments['add_your_comment'] = 'Add your comment';
$lang_display_comments['name'] = 'Name';
$lang_display_comments['comment'] = 'Comment';
$lang_display_comments['your_name'] = 'Your name';
$lang_display_comments['report_comment_title'] = 'Report this comment to the administrator';
$lang_display_comments['pending_approval'] = 'Comment will be visible after admin approval';
$lang_display_comments['unapproved_comment'] = 'Unapproved comment';
$lang_display_comments['pending_approval_message'] = 'Someone has posted a comment here. It will be visible after admin approval.';
$lang_display_comments['approve'] = 'Approve comment';
$lang_display_comments['disapprove'] = 'Mark comment unapproved';
$lang_display_comments['log_in_to_comment'] = 'Anonymous comments are not allowed here. %sLog in%s to post your comment'; // do not translate the %s placeholders - they will be used as wrappers for the link (<a>)
$lang_display_comments['default_username_message'] = 'Please provide your name for comment';
$lang_display_comments['comment_rejected'] = 'Your comment has been rejected';

$lang_fullsize_popup['click_to_close'] = 'Click image to close this window';
$lang_fullsize_popup['close_window'] = 'close window';
}

// ------------------------------------------------------------------------- //
// File ecard.php
// ------------------------------------------------------------------------- //

if (defined('ECARDS_PHP')) {
$lang_ecard_php['title'] = 'Send an e-card';
$lang_ecard_php['invalid_email'] = 'Warning: invalid email address:';
$lang_ecard_php['ecard_title'] = 'An e-card from %s for you';
$lang_ecard_php['error_not_image'] = 'Only images can be sent as an ecard.';
$lang_ecard_php['error_not_image_flash'] = 'Only images and flash files can be sent as an ecard.';
$lang_ecard_php['view_ecard'] = 'Alternative link if the e-card does not display correctly';
$lang_ecard_php['view_ecard_plaintext'] = 'To view the ecard, copy and paste this url into your browser\'s address bar:';
$lang_ecard_php['view_more_pics'] = 'View more pictures!';
$lang_ecard_php['send_success'] = 'Your ecard was sent';
$lang_ecard_php['send_failed'] = 'Sorry but the server can\'t send your e-card...';
$lang_ecard_php['from'] = 'From';
$lang_ecard_php['your_name'] = 'Your name';
$lang_ecard_php['your_email'] = 'Your email address';
$lang_ecard_php['to'] = 'To';
$lang_ecard_php['rcpt_name'] = 'Recipient name';
$lang_ecard_php['rcpt_email'] = 'Recipient email address';
$lang_ecard_php['greetings'] = 'Heading';
$lang_ecard_php['message'] = 'Message';
$lang_ecard_php['ecards_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_ecard_php['preview'] = 'Preview of the ecard';
$lang_ecard_php['preview_button'] = 'Preview';
$lang_ecard_php['submit_button'] = 'Send ecard';
$lang_ecard_php['preview_view_ecard'] = 'This will be the alternative link to the ecard once it has been generated. It won\'t work for previews.';
}

// ------------------------------------------------------------------------- //
// File report_file.php
// ------------------------------------------------------------------------- //

if (defined('REPORT_FILE_PHP')) {
$lang_report_php['title'] = 'Report to administrator';
$lang_report_php['invalid_email'] = '<strong>Warning</strong> : invalid email address!';
$lang_report_php['report_subject'] = 'A report from %s on a gallery %s';
$lang_report_php['view_report'] = 'Alternative link if the report does not display correctly';
$lang_report_php['view_report_plaintext'] = 'To view the report, copy and paste this url into your browser\'s address bar:';
$lang_report_php['view_more_pics'] = 'Gallery';
$lang_report_php['send_success'] = 'Your report was sent';
$lang_report_php['send_failed'] = 'Sorry but the server can\'t send your report...';
$lang_report_php['from'] = 'From';
$lang_report_php['your_name'] = 'Your name';
$lang_report_php['your_email'] = 'Your email address';
$lang_report_php['to'] = 'To';
$lang_report_php['administrator'] = 'Administrator/Mod';
$lang_report_php['subject'] = 'Subject';
$lang_report_php['comment_field_name'] = 'Reporting on comment by "%s"';
$lang_report_php['reason'] = 'Reason';
$lang_report_php['message'] = 'Message';
$lang_report_php['report_footer'] = 'Sent by %s from IP %s at %s (Gallery time)';
$lang_report_php['obscene'] = 'obscene';
$lang_report_php['offensive'] = 'offensive';
$lang_report_php['misplaced'] = 'off-topic/misplaced';
$lang_report_php['missing'] = 'missing';
$lang_report_php['issue'] = 'error/cannot view';
$lang_report_php['other'] = 'other';
$lang_report_php['refers_to'] = 'File report refers to';
$lang_report_php['reasons_list_heading'] = 'reason(s) for report:';
$lang_report_php['no_reason_given'] = 'no reason was given';
$lang_report_php['go_comment'] = 'Go to comment';
$lang_report_php['view_comment'] = 'View full report with comment';
$lang_report_php['type_file'] = 'file';
$lang_report_php['type_comment'] = 'comment';
$lang_report_php['invalid_data'] = 'The data for the report you are trying to access has been corrupted by your mail client. Check the link is complete.';
}

// ------------------------------------------------------------------------- //
// File editpics.php
// ------------------------------------------------------------------------- //

if (defined('EDITPICS_PHP')) {
$lang_editpics_php['pic_info'] = 'File info';
$lang_editpics_php['desc'] = 'Description';
$lang_editpics_php['approval'] = 'Approval';
$lang_editpics_php['approved'] = 'Approved';
$lang_editpics_php['unapproved'] = 'Unapproved';
$lang_editpics_php['new_keyword'] = 'New keyword';
$lang_editpics_php['new_keywords'] = 'New keywords found';
$lang_editpics_php['existing_keyword'] = 'Existing keyword';
$lang_editpics_php['pic_info_str'] = '%s &times; %s - %s KB - %s views - %s votes';
$lang_editpics_php['approve'] = 'Approve file';
$lang_editpics_php['postpone_app'] = 'Postpone approval';
$lang_editpics_php['del_pic'] = 'Delete file';
$lang_editpics_php['del_all'] = 'Delete ALL files';
$lang_editpics_php['read_exif'] = 'Read EXIF info again';
$lang_editpics_php['reset_view_count'] = 'Reset view counter';
$lang_editpics_php['reset_all_view_count'] = 'Reset ALL view counters';
$lang_editpics_php['reset_votes'] = 'Reset votes';
$lang_editpics_php['reset_all_votes'] = 'Reset ALL votes';
$lang_editpics_php['del_comm'] = 'Delete comments';
$lang_editpics_php['del_all_comm'] = 'Delete ALL comments';
$lang_editpics_php['upl_approval'] = 'Upload approval';
$lang_editpics_php['edit_pics'] = 'Edit files';
$lang_editpics_php['edit_pic'] = 'Edit file';
$lang_editpics_php['see_next'] = 'See next files';
$lang_editpics_php['see_prev'] = 'See previous files';
$lang_editpics_php['n_pic'] = '%s files';
$lang_editpics_php['n_of_pic_to_disp'] = 'Number of files to display';
$lang_editpics_php['crop_title'] = 'Coppermine Picture Editor';
$lang_editpics_php['preview'] = 'Preview';
$lang_editpics_php['save'] = 'Save picture';
$lang_editpics_php['save_thumb'] = 'Save as thumbnail';
$lang_editpics_php['gallery_icon'] = 'Make this my icon';
$lang_editpics_php['sel_on_img'] = 'The selection has to be entirely on the image!'; // js-alert
$lang_editpics_php['album_properties'] = 'Album properties';
$lang_editpics_php['parent_category'] = 'Parent category';
$lang_editpics_php['thumbnail_view'] = 'Thumbnail view';
$lang_editpics_php['select_unselect'] = 'select/unselect all';
$lang_editpics_php['file_exists'] = 'Destination file \'%s\' already exists.';
$lang_editpics_php['rename_failed'] = 'Failed to rename \'%s\' to \'%s\'.';
$lang_editpics_php['src_file_missing'] = 'Source file \'%s\' is missing.';
$lang_editpics_php['mime_conv'] = 'Cannot convert file from \'%s\' to \'%s\'';
$lang_editpics_php['forb_ext'] = 'Forbidden file extension.';
$lang_editpics_php['error_editor_class'] = 'Editor class for your resize method not implemented';
$lang_editpics_php['error_document_size'] = 'Document has no width or height'; // js-alert
$lang_editpics_php['success_picture'] = 'Picture successfully saved - you can %sclose%s this window now'; // do not translate "%s" here
$lang_editpics_php['success_thumb'] = 'Thumbnail successfully saved - you can %sclose%s this window now'; // do not translate "%s" here
$lang_editpics_php['rotate'] = 'Rotate';
$lang_editpics_php['mirror'] = 'Mirror';
$lang_editpics_php['scale'] = 'Scale';
$lang_editpics_php['new_width'] = 'New width';
$lang_editpics_php['new_height'] = 'New height';
$lang_editpics_php['enable_clipping'] = 'Enable clipping, apply to crop';
$lang_editpics_php['jpeg_quality'] = 'JPEG Output Quality';
$lang_editpics_php['or'] = 'OR';
$lang_editpics_php['approve_pic'] = 'Approve file';
$lang_editpics_php['approve_all'] = 'Approve ALL files';
$lang_editpics_php['error_empty'] = 'Album is empty';
$lang_editpics_php['error_approval_empty'] = 'No more pictures to approve';
$lang_editpics_php['error_linked_only'] = 'Album only contains linked files, which you cannot edit here';
$lang_editpics_php['note_approve_public'] = 'Files moved to a public album must be approved by an admin.';
$lang_editpics_php['note_approve_private'] = 'Files moved to a private gallery album must be approved by an admin.' ;
$lang_editpics_php['note_edit_control'] = 'Files moved to a public album cannot be edited.';
$lang_editpics_php['confirm_move'] = 'Are you sure you want to move this file?'; //js-alert
$lang_editpics_php['success_changes'] = 'Changes successfully saved';
}

// ------------------------------------------------------------------------- //
// File forgot_passwd.php
// ------------------------------------------------------------------------- //

if (defined('FORGOT_PASSWD_PHP')) {
$lang_forgot_passwd_php['forgot_passwd'] = 'Password reminder';
$lang_forgot_passwd_php['err_already_logged_in'] = 'You are already logged in!';
$lang_forgot_passwd_php['enter_email'] = 'Enter your email address';
$lang_forgot_passwd_php['submit'] = 'go';
$lang_forgot_passwd_php['illegal_session'] = 'Forgot password session invalid or has expired.';
$lang_forgot_passwd_php['failed_sending_email'] = 'The password reminder email can\'t be sent!';
$lang_forgot_passwd_php['email_sent'] = 'An email with your username and new password was sent to %s';
$lang_forgot_passwd_php['verify_email_sent'] = 'An email has been sent to %s. Please check your email to complete the process.';
$lang_forgot_passwd_php['err_unk_user'] = 'Selected user does not exist!';
$lang_forgot_passwd_php['account_verify_subject'] = '%s - New password request';
$lang_forgot_passwd_php['passwd_reset_subject'] = '%s - Your new password';
$lang_forgot_passwd_php['account_verify_email'] = <<< EOT
You have requested a new password. If you would like to proceed with having a new password sent to you, click on the following link:

<a href="{VERIFY_LINK}">{VERIFY_LINK}</a>


Regards,

The management of {SITE_NAME}

EOT;

$lang_forgot_passwd_php['reset_email'] = <<< EOT
Here is the new password you requested:

Username: {USER_NAME}
Password: {PASSWORD}

Go to <a href="{SITE_LINK}">{SITE_LINK}</a> to log in.


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File groupmgr.php
// ------------------------------------------------------------------------- //
if (defined('GROUPMGR_PHP')) {
$lang_groupmgr_php['group_manager'] = 'Group manager';
$lang_groupmgr_php['group_name'] = 'Group';
$lang_groupmgr_php['permissions'] = 'Permissions';
$lang_groupmgr_php['public_albums'] = 'Public albums upload';
$lang_groupmgr_php['personal_gallery'] = 'Personal gallery';
$lang_groupmgr_php['disk_quota'] = 'Quota';
$lang_groupmgr_php['rating'] = 'Rating';
$lang_groupmgr_php['ecards'] = 'Ecards';
$lang_groupmgr_php['comments'] = 'Comments';
$lang_groupmgr_php['allowed'] = 'Allowed';
$lang_groupmgr_php['approval'] = 'Approval';
$lang_groupmgr_php['create_new_group'] = 'Create new group';
$lang_groupmgr_php['del_groups'] = 'Delete selected group(s)';
$lang_groupmgr_php['confirm_del'] = 'Warning, when you delete a group, users that belong to this group will be transferred to the \'Registered\' group!\n\nDo you want to proceed?'; // js-alert
$lang_groupmgr_php['title'] = 'Manage user groups';
$lang_groupmgr_php['reset_to_default'] = 'Reset to default name (%s) - recommended!';
$lang_groupmgr_php['error_group_empty'] = 'Database group table was empty!<br />Default groups created, please reload this page';
$lang_groupmgr_php['explain_greyed_out_title'] = 'Why is this row grayed out?';
$lang_groupmgr_php['explain_guests_greyed_out_text'] = 'You cannot change the properties of this group because the access level of this group is NONE. All unlogged users (members of the group %s) can\'t do anything but login; therefore group settings don\'t apply for them. Change the access level here or on the Gallery Configuration page under "User Settings", "Allow unlogged users access".';
$lang_groupmgr_php['group_assigned_album'] = 'assigned album(s)';
$lang_groupmgr_php['access_level'] = 'Access level';
$lang_groupmgr_php['thumbnail_intermediate_full'] = 'thumbnail, intermediate, and full-size image';
$lang_groupmgr_php['thumbnail_intermediate'] = 'thumbnail and intermediate image';
$lang_groupmgr_php['thumbnail_only'] = 'thumbnail only';
$lang_groupmgr_php['none'] = 'none';
}

// ------------------------------------------------------------------------- //
// File index.php
// ------------------------------------------------------------------------- //
if (defined('INDEX_PHP')){
$lang_index_php['welcome'] = 'Welcome!';

$lang_album_admin_menu['confirm_delete'] = 'Are you sure you want to DELETE this album?\\nAll files and comments will also be deleted.'; // js-alert
$lang_album_admin_menu['delete'] = 'Delete';
$lang_album_admin_menu['modify'] = 'Properties';
$lang_album_admin_menu['edit_pics'] = 'Edit Files';
$lang_album_admin_menu['cat_locked'] = 'This album has been locked for editing';

$lang_list_categories['home'] = 'Home';
$lang_list_categories['stat1'] = '[pictures] files in [albums] albums and [cat] categories with [comments] comments viewed [views] times'; // do not translate the stuff in square brackets
$lang_list_categories['stat2'] = '[pictures] files in [albums] albums viewed [views] times'; // do not translate the stuff in square brackets
$lang_list_categories['xx_s_gallery'] = '%s\'s Gallery';
$lang_list_categories['stat3'] = '[pictures] files in [albums] albums with [comments] comments viewed [views] times'; // do not translate the stuff in square brackets

$lang_list_users['user_list'] = 'User list';
$lang_list_users['no_user_gal'] = 'There are no user galleries';
$lang_list_users['n_albums'] = '%s album(s)';
$lang_list_users['n_pics'] = '%s file(s)';

$lang_list_albums['n_pictures'] = '%s files';
$lang_list_albums['last_added'] = ', last one added on %s';
$lang_list_albums['n_link_pictures'] = '%s linked files';
$lang_list_albums['total_pictures'] = '%s files total';
$lang_list_albums['alb_hits'] = 'Album viewed %s times';
$lang_list_albums['from_category'] = ' - From Category: ';
}

// ------------------------------------------------------------------------- //
// File install.php
// ------------------------------------------------------------------------- //

if (defined('INSTALL_PHP')) {
$lang_install['already_succ'] = 'The installer has already been successfully run once and is now locked.';
$lang_install['already_succ_explain'] = 'If you want to run the installer again, you first need to delete the \'include/config.inc.php\' file that was created in the directory where you put Coppermine. You can do this with any FTP program';
$lang_install['cant_read_tmp_conf'] = 'The installer can\'t read the temporary config file %s.';
$lang_install['cant_write_tmp_conf'] = 'The installer can\'t write the temporary config file %s.';
$lang_install['review_permissions'] = 'Please review directory permissions.';
$lang_install['change_lang'] = 'Change language';
$lang_install['check_path'] = 'Check path';
$lang_install['continue'] = 'Next step';
$lang_install['conv_said'] = 'The convert program said:';
$lang_install['license_info'] = 'Coppermine is a picture/multimedia gallery package that is released under GNU GPL v3. By installing, you agree to be bound to Coppermine\'s license:';
$lang_install['cpg_info_frames'] = 'Your browser appears incapable of displaying inline frames. You can review the license within the docs folder that ships with your Coppermine package.';
$lang_install['license'] = 'Coppermine license agreement';
$lang_install['create_table'] = 'Creating table \'%s\'';
$lang_install['db_populating'] = 'Trying to insert data in the database.';
$lang_install['db_alr_populated'] = 'Already inserted required data in the database.';
$lang_install['dir_ok'] = 'Directory found';
$lang_install['directory'] = 'Directory';
$lang_install['email'] = 'Email address';
$lang_install['email_no_match'] = 'Email addresses do not match or are invalid.';
$lang_install['email_verif'] = 'Verify email';
$lang_install['err_cpgnuke'] = '<h1>ERROR</h1>You seem to be trying to install the standalone Coppermine into your Nuke portal.<br />This version can only be used as standalone!<br />Some server setups might display this warning even though you don\'t have a nuke portal installed - if this is the case for you, <a href="%s?continue_anyway=1">continue</a> with the install. If you are using a nuke portal, you might want to take a look into <a href=\"http://www.cpgnuke.com/\">CpgNuke</a> or use one of the (unsupported)<a href=\"http://sourceforge.net/project/showfiles.php?group_id=89658&amp;package_id=95984\">Coppermine ports</a> - do not continue!';
$lang_install['error'] = 'ERROR';
$lang_install['error_need_corr'] = 'The following errors were encountered and need to be corrected first:';
$lang_install['finish'] = 'Finish installation';
$lang_install['gd_note'] = '<strong>Important :</strong> older versions of the GD graphic library support only JPEG and PNG images. If this is the case for you, then the script will not be able to create thumbnails for GIF images.';
$lang_install['go_to_main'] = 'Go to the main page';
$lang_install['im_no_convert_ex'] = 'The installer found the ImageMagick \'convert\' program in \'%s\', however it can\'t be executed by the script.<br />You may consider using GD instead of ImageMagick.';
$lang_install['im_not_found'] = 'The installer tried to find ImageMagick, but could not determine its existence or there was an error. <br />Coppermine can use the <a href="http://www.imagemagick.org/">ImageMagick</a> \'convert\' program to create thumbnails. Quality of images produced by ImageMagick is equivalent to GD2.<br />If ImageMagick is installed on your system and you want to use it, <br />you need to input the full path to the \'convert\' program below. <br />On Windows the path should look something like \'c:/ImageMagick/\' and should not contain any space, on Unix is it something like \'/usr/bin/\'.<br />If you have no idea wether you have ImageMagick or not, leave this field empty - the installer will then try to use GD2 by default (which is what most users have). <br />You can change this later as well (in Coppermine\'s config screen), so don\'t be afraid if you\'re not sure what to enter here - leave it blank.';
$lang_install['im_packages'] = 'Your server supports the following image package(s)';
$lang_install['im_path'] = 'Path to ImageMagick:';
$lang_install['im_path_space'] = 'The path to ImageMagick (\'%s\') contains at least one space. This will cause problems in the script.<br />You must move ImageMagick to another directory.';
$lang_install['installation'] = 'installation';
$lang_install['installer_locked'] = 'The installer is locked';
$lang_install['installer_selected'] = 'The installer selected';
$lang_install['inv_im_path'] = 'The installer cannot find the \'%s\' directory you have specified for ImageMagick or it does not have permission to access it. Check that your typing is correct and that you have access to the specified directory.';
$lang_install['lets_go'] = 'Let\'s Go!';
$lang_install['dbase_create_btn'] = 'Create';
$lang_install['dbase_create_db'] = 'Create new database';
$lang_install['dbase_db_name'] = 'Database name';
$lang_install['dbase_error'] = 'Database error: ';
$lang_install['dbase_host'] = 'Database host<br />(localhost is usually OK)';
$lang_install['dbase_username'] = 'Database username';
$lang_install['dbase_password'] = 'Database password';
$lang_install['dbase_no_create_db'] = 'Could not create database.';
$lang_install['dbase_no_sel_dbs'] = 'Could not retrieve available databases';
$lang_install['dbase_succ'] = 'Successful connection with database';
$lang_install['dbase_tbl_pref'] = 'Table prefix';
$lang_install['dbase_test_connection'] = 'Test connection';
$lang_install['dbase_wrong_db'] = 'Could not locate a database called \'%s\' please check the value entered for this';
$lang_install['n_a'] = 'N/A';
$lang_install['no_admin_email'] = 'You have to enter an admin email address';
$lang_install['no_admin_password'] = 'You have to enter an admin password';
$lang_install['no_admin_username'] = 'You have to enter an admin username';
$lang_install['no_dir'] = 'Directory not available';
$lang_install['no_gd'] = 'Your installation of PHP does not seem to include the \'GD\' graphic library extension and you have not indicated that you want to use ImageMagick. Coppermine has been configured to use GD2 because the automatic GD detection sometimes fails. If GD is installed on your system, the script should work else you will need to install ImageMagick.';
$lang_install['no_dbase_conn'] = 'Could not create a %s connection, please check the %s details entered';
$lang_install['no_dbase_support'] = 'PHP does not have %s support enabled.';
$lang_install['no_thumb_method'] = 'You have to choose an image manipulation application (GD/IM)';
$lang_install['nok'] = 'Not OK';
$lang_install['not_here_yet'] = 'Nothing here yet, please click %shere%s to go back.';
$lang_install['ok'] = 'OK';
$lang_install['on_q'] = 'on query';
$lang_install['or'] = 'or';
$lang_install['pass_err'] = 'Passwords don\'t match, you used illegal characters or didn\'t provide one.';
$lang_install['password'] = 'Password';
$lang_install['password_verif'] = 'Verify Password';
$lang_install['perm_error'] = 'The permissions of \'%s\' are set to %s, please set them to';
$lang_install['perm_ok'] = 'The permissions on certain directories have been checked, and seem to be ok. <br />Please proceed to the next step.';
$lang_install['perm_not_ok'] = 'The permissions on certain directories are not set correctly.<br />Please change the permissions of the directories below that are marked "Not OK".';
$lang_install['please_go_back'] = 'Please %sclick here%s to go back and fix this problem before proceeding.';
$lang_install['populate_db'] = 'Populate database';
$lang_install['ready_to_roll'] = '<a href="index.php">Coppermine</a> is now properly configured and ready to use.<br /><a href="login.php">Login</a> using the information you provided for your admin account.';
$lang_install['sect_create_adm'] = 'This section requires information to create your Coppermine administration account. Use only alphanumeric characters. Enter the data carefully!';
$lang_install['sect_dbase_info'] = 'This section requires information on how to access your database.<br />If you don\'t know how to fill them, check with your webhost support.';
$lang_install['sect_dbase_sel_db'] = 'Here you have to choose which database you want to use for Coppermine.<br />If your database account has the needed privileges, you can create a new database from within the installer or you can use an existing database. If you don\'t like both options, you will have to create a database first outside the Coppermine installer, then return here then select the new database from the dropdown box below. You can also change the table prefix (don\'t use dots though), but keeping the default prefix is recommended.';
$lang_install['select_lang'] = 'Select default language: ';
$lang_install['sql_file_not_found'] = 'The file \'%s\' could not be found. Check that you have uploaded all Coppermine files to your server.';
$lang_install['status'] = 'Status';
$lang_install['subdir_called'] = 'A subdirectory called \'%s\' should normally exist in the directory where you uploaded Coppermine.<br />The installer can\'t find this directory. Check that you have uploaded all Coppermine files to your server.';
$lang_install['title_admin'] = 'Create Coppermine administrator';
$lang_install['title_dir_check'] = 'Checking directory permissions';
$lang_install['title_file_check'] = 'Checking installation files';
$lang_install['title_finished'] = 'Installation completed';
$lang_install['title_imp'] = 'Image package selection';
$lang_install['title_imp_test'] = 'Testing image library';
$lang_install['title_dbase_type'] = 'Select Database Engine to use';
$lang_install['title_dbase_db_sel'] = '%s database selection';
$lang_install['title_dbase_pop'] = 'Creating database structure';
$lang_install['title_dbase_user'] = 'Database user authentication';
$lang_install['title_welcome'] = 'Welcome to Coppermine installation';
$lang_install['tmp_conf_error'] = 'Unable to write the temporary config file - make sure the \'include\' folder is writable for the script.';
$lang_install['tmp_conf_ser_err'] = 'A serious error occurred in the installer, try reloading your page or start over by removing the \'include/config.tmp\' file.';
$lang_install['try_again'] = 'Try again!';
$lang_install['unable_write_config'] = 'Unable to write config file';
$lang_install['user_err'] = 'Admin username must contain only alphanumeric characters and can\'t be empty.';
$lang_install['username'] = 'Username';
$lang_install['your_admin_account'] = 'Your admin account';
$lang_install['no_cookie'] = 'Your browser did not accept our cookie. It is recommended to accept cookies.';
$lang_install['no_javascript'] = 'Your browser doesn\'t seem to have Javascript enabled - it is highly recommended to enable it.';
$lang_install['register_globals_detected'] = 'It seems your PHP configuration has \'register_globals\' enabled - you should disable this for security reasons.';
$lang_install['more'] = 'more';
$lang_install['version_undetected'] = 'The script could not determine the version of %s your server is using. Be sure it is at least version %s.';
$lang_install['version_incompatible'] = 'The script detected an incompatible version (%s) of %s on your server.<br />Make sure to use a compatible version (%s or better) before continuing!';
$lang_install['read_gif'] = 'Read/write .gif file';
$lang_install['read_png'] = 'Read/write .png file';
$lang_install['read_jpg'] = 'Read/write .jpg file';
$lang_install['write_error'] = 'Could not write generated image to disk.';
$lang_install['read_error'] = 'Could not read the source image.';
$lang_install['combine_error'] = 'Could not combine the source images';
$lang_install['text_error'] = 'Could not add text to the source image';
$lang_install['scale_error'] = 'Could not scale the source image';
$lang_install['pixels'] = 'pixels';
$lang_install['combine'] = 'Combine 2 images';
$lang_install['text'] = 'Write text on image';
$lang_install['scale'] = 'Scale an image';
$lang_install['generated_image'] = 'Generated image';
$lang_install['reference_image'] = 'Reference image';
$lang_install['imp_test_error'] = 'There was an error in one or more of the tests, please make sure you selected the appropriate Image Processing Package and it is configured correctly!';
$lang_install['writable'] = 'Writable';
$lang_install['not_writable'] = 'Not writable';
$lang_install['not_exist'] = 'Does not exist';
// 1.6 dbabstract
$lang_install['not_available'] = 'not available';
$lang_install['version_too_old'] = 'version too old';
// 1.6.08 XML check
$lang_install['no_xml_parser'] = 'PHP must be enabled for XML parsing';
}

// ------------------------------------------------------------------------- //
// File keywordmgr.php
// ------------------------------------------------------------------------- //
if (defined('KEYWORDMGR_PHP')) {
$lang_keywordmgr_php['title'] = 'Manage keywords';
$lang_keywordmgr_php['search'] = 'Search';
$lang_keywordmgr_php['keyword_test_search'] = 'Search for %s in new window';
$lang_keywordmgr_php['keyword_del'] = 'Delete the keyword %s';
$lang_keywordmgr_php['confirm_delete'] = 'Are you sure you want to delete the keyword %s from the whole gallery?'; // js-alert
$lang_keywordmgr_php['change_keyword'] = 'Change keyword';
}

// ------------------------------------------------------------------------- //
// File langmgr.php
// ------------------------------------------------------------------------- //
if (defined('LANGMGR_PHP')) {
$lang_langmgr_php['title'] = 'Language manager';
$lang_langmgr_php['english_language_name'] = 'English';
$lang_langmgr_php['native_language_name'] = 'Native';
$lang_langmgr_php['custom_language_name'] = 'Custom';
$lang_langmgr_php['language_name'] = 'Language name';
$lang_langmgr_php['language_file'] = 'Language file';
$lang_langmgr_php['flag'] = 'Flag';
$lang_langmgr_php['file_available'] = 'Available';
$lang_langmgr_php['enabled'] = 'Enabled';
$lang_langmgr_php['complete'] = 'Complete';
$lang_langmgr_php['default'] = 'Default';
$lang_langmgr_php['missing'] = 'missing';
$lang_langmgr_php['broken'] = 'appears to be broken or inaccessible';
$lang_langmgr_php['exists_in_db_and_file'] = 'exists in database and as file';
$lang_langmgr_php['exists_as_file_only'] = 'exists as file only';
$lang_langmgr_php['pick_a_flag'] = 'Pick one';
$lang_langmgr_php['replace_x_with_y'] = 'Replace %s with %s';
$lang_langmgr_php['tanslator_information'] = 'Translator information';
$lang_langmgr_php['cpg_version'] = 'Coppermine version';
$lang_langmgr_php['hide_details'] = 'Hide details';
$lang_langmgr_php['show_details'] = 'Show details';
$lang_langmgr_php['loading'] = 'Loading';
$lang_langmgr_php['english_missing'] = 'The English language file is missing although it should never be removed. You need to restore it immediately.';
$lang_langmgr_php['enable_at_least_one'] = 'You need to enable at least one language for the gallery to work';
$lang_langmgr_php['enable_default'] = 'You chose a default language that is not enabled. Pick another default language or enable the language you selected as default!';
$lang_langmgr_php['available_default'] = 'You chose a default language that is not even available. Pick another default language!';
$lang_langmgr_php['version_does_not_match'] = 'The version of this file does not match your Coppermine version. Use with caution and test thoroughly!';
$lang_langmgr_php['no_version'] = 'No version information could be retrieved. It\'s very likely that this language file doesn\'t work at all or isn\'t an actual language file.';
$lang_langmgr_php['filesize'] = 'Filesize %s is implausible';
$lang_langmgr_php['content_missing'] = 'The file doesn\'t seem to contain the needed data, so it\'s probably not a valid language file.';
$lang_langmgr_php['status'] = 'Status';
$lang_langmgr_php['default_language'] = 'Default language set to %s';
}

// ------------------------------------------------------------------------- //
// File login.php
// ------------------------------------------------------------------------- //
if (defined('LOGIN_PHP')) {
$lang_login_php['login'] = 'Login';
$lang_login_php['enter_login_pswd'] = 'Enter your username and password to login';
$lang_login_php['username'] = 'Username';
$lang_login_php['email'] = 'Email Address';
$lang_login_php['both'] = 'Username / Email Address';
$lang_login_php['password'] = 'Password';
$lang_login_php['remember_me'] = 'Remember me';
$lang_login_php['welcome'] = 'Welcome %s ...';
$lang_login_php['err_login'] = 'Login failed. Try again.';
$lang_login_php['err_already_logged_in'] = 'You are already logged in!';
$lang_login_php['forgot_password_link'] = 'I forgot my password';
$lang_login_php['cookie_warning'] = 'Warning your browser does not accept script\'s cookies';
$lang_login_php['send_activation_link'] = 'Missed activation link?';
$lang_login_php['force_login'] = 'You must login to view this page';
$lang_login_php['force_login_title'] = 'Login to continue';
}

// ------------------------------------------------------------------------- //
// File logout.php
// ------------------------------------------------------------------------- //

if (defined('LOGOUT_PHP')) {
$lang_logout_php['logout'] = 'Logout';
$lang_logout_php['bye'] = 'Bye bye %s ...';
$lang_logout_php['err_not_logged_in'] = 'You are not logged in!';
}

// ------------------------------------------------------------------------- //
// File minibrowser.php
// ------------------------------------------------------------------------- //
if (defined('MINIBROWSER_PHP')) {
$lang_minibrowser_php['up'] = 'up one level';
$lang_minibrowser_php['current_path'] = 'current path';
$lang_minibrowser_php['select_directory'] = 'please select a directory';
$lang_minibrowser_php['click_to_close'] = 'Click image to close this window';
$lang_minibrowser_php['folder'] = 'Folder';
}

// ------------------------------------------------------------------------- //
// File mode.php
// ------------------------------------------------------------------------- //
if (defined('MODE_PHP')) {
$lang_mode_php[0] = 'Turning display of admin controls off...';
$lang_mode_php[1] = 'Turning display of admin controls on...';
$lang_mode_php['news_hide'] = 'Hiding news...';
$lang_mode_php['news_show'] = 'Showing news...';
}

// ------------------------------------------------------------------------- //
// File modifyalb.php
// ------------------------------------------------------------------------- //
if (defined('MODIFYALB_PHP')) {
$lang_modifyalb_php['upd_alb_n'] = 'Update album %s';
$lang_modifyalb_php['related_tasks'] = 'Related tasks';
$lang_modifyalb_php['choose_album'] = 'Choose album';
$lang_modifyalb_php['general_settings'] = 'General settings';
$lang_modifyalb_php['alb_title'] = 'Album title';
$lang_modifyalb_php['alb_cat'] = 'Album category';
$lang_modifyalb_php['alb_desc'] = 'Album description';
$lang_modifyalb_php['alb_keyword'] = 'Album keyword';
$lang_modifyalb_php['alb_thumb'] = 'Album thumbnail';
$lang_modifyalb_php['alb_perm'] = 'Permissions for this album';
$lang_modifyalb_php['can_view'] = 'Album can be viewed by';
$lang_modifyalb_php['can_upload'] = 'Visitors can upload files';
$lang_modifyalb_php['can_post_comments'] = 'Visitors can post comments';
$lang_modifyalb_php['can_rate'] = 'Visitors can rate files';
$lang_modifyalb_php['user_gal'] = 'User Gallery';
$lang_modifyalb_php['my_gal'] = '* My Gallery *';
$lang_modifyalb_php['no_cat'] = '* No category *';
$lang_modifyalb_php['alb_empty'] = 'Album is empty';
$lang_modifyalb_php['last_uploaded'] = 'Last uploaded';
$lang_modifyalb_php['public_alb'] = 'Everybody (public album)';
$lang_modifyalb_php['me_only'] = 'Me only';
$lang_modifyalb_php['owner_only'] = 'Album owner (%s) only';
$lang_modifyalb_php['group_only'] = 'Members of the \'%s\' group';
$lang_modifyalb_php['err_no_alb_to_modify'] = 'No album you can modify in the database.';
$lang_modifyalb_php['update'] = 'Update album';
$lang_modifyalb_php['reset_album'] = 'Reset album';
$lang_modifyalb_php['reset_views'] = 'Reset views counter to &quot;0&quot; in %s';
$lang_modifyalb_php['reset_rating'] = 'Reset ratings on all files in %s';
$lang_modifyalb_php['delete_comments'] = 'Delete all comments made in %s';
$lang_modifyalb_php['delete_files'] = '%sIrreversibly%s delete all files in %s';
$lang_modifyalb_php['views'] = 'views';
$lang_modifyalb_php['votes'] = 'votes';
$lang_modifyalb_php['comments'] = 'comments';
$lang_modifyalb_php['files'] = 'files';
$lang_modifyalb_php['submit_reset'] = 'submit changes';
$lang_modifyalb_php['reset_views_confirm'] = 'I\'m sure';
$lang_modifyalb_php['notice1'] = '(*) depending on %sgroups%s settings'; // do not translate the %s placeholders
$lang_modifyalb_php['can_moderate'] = 'Album can be moderated by';
$lang_modifyalb_php['admins_only'] = 'Admins only';
$lang_modifyalb_php['alb_password'] = 'Album password (New password)';
$lang_modifyalb_php['alb_password_hint'] = 'Album password hint';
$lang_modifyalb_php['edit_files'] = 'Edit files';
$lang_modifyalb_php['parent_category'] = 'Parent category';
$lang_modifyalb_php['thumbnail_view'] = 'Thumbnail view';
$lang_modifyalb_php['random_image'] = 'Random Image';
$lang_modifyalb_php['password_protect'] = 'Password protect this album (Tick for yes)';
}

// ------------------------------------------------------------------------- //
// File phpinfo.php
// ------------------------------------------------------------------------- //
if (defined('PHPINFO_PHP')) {
$lang_phpinfo_php['php_info'] = 'PHP info';
$lang_phpinfo_php['explanation'] = 'This is the output generated by the PHP function <a href="http://www.php.net/phpinfo">phpinfo()</a>, displayed within Coppermine.';
$lang_phpinfo_php['no_link'] = 'Having others see your phpinfo can be a security risk, that\'s why this page is only visible when you\'re logged in as admin. You cannot post a link to this page for others, they will be denied access.';
}

// ------------------------------------------------------------------------- //
// File picmgr.php
// ------------------------------------------------------------------------- //
if (defined('PICMGR_PHP')) {
$lang_picmgr_php['pic_mgr'] = 'Picture Manager';
$lang_picmgr_php['confirm_modifs'] = 'Really perform the modifications?'; // js-alert
$lang_picmgr_php['no_change'] = 'You did not make any change!';
$lang_picmgr_php['no_album'] = '* No album *';
$lang_picmgr_php['explanation_header'] = 'The custom sort order you can specify on this page will only be taken into account if';
$lang_picmgr_php['explanation1'] = 'the admin has set the "Default sort order for files" in the config to "Position descending" or "Position ascending" (global setting for all users who haven\'t chosen another sort option individually)';
$lang_picmgr_php['explanation2'] = 'the user has chosen "Position descending" or "Position ascending" on the thumbnail page (per user setting)';
$lang_picmgr_php['change_album'] = 'If you change the album, your changes will be lost!'; // js-alert
$lang_picmgr_php['submit_reminder'] = 'Sorting changes are not saved until you click &quot;Apply changes&quot;.';
}


// ------------------------------------------------------------------------- //
// File pluginmgr.php
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP')){
$lang_pluginmgr_php['confirm_uninstall'] = 'Are you sure you want to UNINSTALL this plugin?';
$lang_pluginmgr_php['confirm_remove'] = 'NOTE: Plugin API is disabled. Do you want to MANUALLY REMOVE this plugin, ignoring any cleanup actions?';
$lang_pluginmgr_php['confirm_delete'] = 'Are you sure you want to DELETE this plugin?';
$lang_pluginmgr_php['pmgr'] = 'Plugin Manager';
$lang_pluginmgr_php['explanation'] = 'Install / uninstall / manage plugins using this page.';
$lang_pluginmgr_php['plugin_enabled'] = 'Plugin API enabled';
$lang_pluginmgr_php['name'] = 'Name';
$lang_pluginmgr_php['author'] = 'Author';
$lang_pluginmgr_php['desc'] = 'Description';
$lang_pluginmgr_php['vers'] = 'v';
$lang_pluginmgr_php['i_plugins'] = 'Installed Plugins';
$lang_pluginmgr_php['n_plugins'] = 'Plugins Not installed';
$lang_pluginmgr_php['none_installed'] = 'None Installed';
$lang_pluginmgr_php['operation'] = 'Operation';
$lang_pluginmgr_php['not_plugin_package'] = 'The file uploaded is not a plugin package.';
$lang_pluginmgr_php['copy_error'] = 'There was an error copying the package to the plugins folder.';
$lang_pluginmgr_php['upload'] = 'Upload';
$lang_pluginmgr_php['configure_plugin'] = 'Configure plugin';
$lang_pluginmgr_php['cleanup_plugin'] = 'Cleanup plugin';
$lang_pluginmgr_php['extra'] = 'Extra';
$lang_pluginmgr_php['install_info'] = 'Install information';
$lang_pluginmgr_php['plugin_disabled_note'] = 'Plugin API is disabled, so that operation is not allowed.';
$lang_pluginmgr_php['install'] = 'install';
$lang_pluginmgr_php['uninstall'] = 'uninstall';
$lang_pluginmgr_php['minimum_requirements_not_met'] = 'Minimum requirements not met';
$lang_pluginmgr_php['confirm_version'] = 'Could not determine the version requirements for this plugin. This is usually an indicator that the plugin was not designed for your version of Coppermine and might therefore crash your gallery. Continue anyway (not recommended)?'; // js-alert
$lang_pluginmgr_php['announcement_thread'] = 'Announcement thread'; // cpg1.6

$lang_pluginmgr_php['plugin_action'] = 'Action';	// cpg1.6
$lang_pluginmgr_php['saved_config'] = 'The configuration for &laquo;%s&raquo; has been saved.';	// cpg1.6
$lang_pluginmgr_php['enable'] = 'Enable';	// cpg1.6
$lang_pluginmgr_php['disable'] = 'Disable';	// cpg1.6
}

// ------------------------------------------------------------------------- //
// File ratepic.php
// ------------------------------------------------------------------------- //
if (defined('RATEPIC_PHP')) {
$lang_rate_pic_php['already_rated'] = 'Sorry but you have already rated this file';
$lang_rate_pic_php['rate_ok'] = 'Your vote was accepted';
$lang_rate_pic_php['forbidden'] = 'You cannot rate your own files.';
$lang_rate_pic_php['fav_added'] = 'Picture has been added to favorites'; // cpg1.6
$lang_rate_pic_php['fav_removed'] = 'Picture has been removed from favorites'; // cpg1.6
}

// ------------------------------------------------------------------------- //
// File register.php & profile.php
// ------------------------------------------------------------------------- //
if (defined('REGISTER_PHP') || defined('PROFILE_PHP')) {
$lang_register_php['disclaimer'] = <<< EOT
While the administrators of {SITE_NAME} will attempt to remove or edit any generally objectionable material as quickly as possible, it is impossible to review every post. Therefore you acknowledge that all posts made to this site express the views and opinions of the author and not the administrators or webmaster (except for posts by these people) and hence will not be held liable.<br />
<br />
You agree not to post any abusive, obscene, vulgar, slanderous, hateful, threatening, sexually-oriented or any other material that may violate any applicable laws. You agree that the webmaster, administrator and moderators of {SITE_NAME} have the right to remove or edit any content at any time should they see fit. As a user you agree to any information you have entered above being stored in a database. While this information will not be disclosed to any third party without your consent the webmaster and administrator cannot be held responsible for any hacking attempt that may lead to the data being compromised.<br />
<br />
This site uses cookies to store information on your local computer. These cookies serve only to improve your viewing pleasure. The email address is used only for confirming your registration details and password.<br />
<br />
By clicking 'I agree' below you agree to be bound by these conditions.
EOT;
$lang_register_php['page_title'] = 'User registration';
$lang_register_php['term_cond'] = 'Terms and conditions';
$lang_register_php['i_agree'] = 'I agree';
$lang_register_php['submit'] = 'Submit registration';
$lang_register_php['err_user_exists'] = 'The username you have entered already exists, please choose a different one';
$lang_register_php['err_global_pw'] = 'Invalid global registration password';
$lang_register_php['err_global_pass_same'] = 'Your password should be different from the global password';
$lang_register_php['err_duplicate_email'] = 'Another user has already registered with the email address you entered';
$lang_register_php['err_disclaimer'] = 'You need to agree to the disclaimer';
$lang_register_php['enter_info'] = 'Input registration information';
$lang_register_php['required_info'] = 'Required information';
$lang_register_php['optional_info'] = 'Optional information';
$lang_register_php['username'] = 'Username';
$lang_register_php['password'] = 'Password';
$lang_register_php['password_again'] = 'Re-enter password';
$lang_register_php['global_registration_pw'] = 'Global registration password';
$lang_register_php['email'] = 'Email';
$lang_register_php['location'] = 'Location';
$lang_register_php['interests'] = 'Interests';
$lang_register_php['website'] = 'Home page';
$lang_register_php['occupation'] = 'Occupation';
$lang_register_php['error'] = 'ERROR';
$lang_register_php['confirm_email_subject'] = '%s - Registration confirmation';
$lang_register_php['information'] = 'Information';
$lang_register_php['failed_sending_email'] = 'The registration confirmation email can\'t be send!';
$lang_register_php['thank_you'] = 'Thank you for registering.<br />An email with information on how to activate your account was sent to the email address you provided.';
$lang_register_php['acct_created'] = 'Your account has been created and you can now login with your username and password';
$lang_register_php['acct_active'] = 'Your account is now active and you can login with your username and password';
$lang_register_php['acct_already_act'] = 'Account is already active!';
$lang_register_php['acct_act_failed'] = 'This account can\'t be activated!';
$lang_register_php['err_unk_user'] = 'Selected user does not exist!';
$lang_register_php['x_s_profile'] = '%s\'s profile';
$lang_register_php['group'] = 'Group';
$lang_register_php['reg_date'] = 'Joined';
$lang_register_php['disk_usage'] = 'Disk usage';
$lang_register_php['change_pass'] = 'Change password';
$lang_register_php['current_pass'] = 'Current password';
$lang_register_php['new_pass'] = 'New password';
$lang_register_php['new_pass_again'] = 'New password again';
$lang_register_php['err_curr_pass'] = 'Current password is incorrect';
$lang_register_php['change_pass'] = 'Change my password';
$lang_register_php['update_success'] = 'Your profile was updated';
$lang_register_php['pass_chg_success'] = 'Your password was changed';
$lang_register_php['pass_chg_error'] = 'Your password was not changed';
$lang_register_php['notify_admin_email_subject'] = '%s - Registration notification';
$lang_register_php['last_uploads'] = 'Last uploaded file';
$lang_register_php['last_uploads_detail'] = 'Click to see all uploads by %s';
$lang_register_php['last_comments'] = 'Last comment';
$lang_register_php['you'] = 'you';
$lang_register_php['last_comments_detail'] = 'Click to see all comments made by %s';
$lang_register_php['notify_admin_email_body'] = 'A new user with the username "%s" has registered in your gallery';
$lang_register_php['pic_count'] = 'Files uploaded';
$lang_register_php['notify_admin_request_email_subject'] = '%s - Registration request';
$lang_register_php['thank_you_admin_activation'] = 'Thank you.<br />Your request for account activation was sent to the admin. You will receive an email if approved.';
$lang_register_php['acct_active_admin_activation'] = 'The account is now active and an email has been sent to the user.';
$lang_register_php['notify_user_email_subject'] = '%s - Activation notification';
$lang_register_php['delete_my_account'] = 'Delete my user account';
$lang_register_php['warning_delete'] = 'Warning: deleting your account cannot be undone. The %sfiles you uploaded%s into public albums and %syour comments%s do not get deleted when deleting your user account! However, the files you uploaded into your personal gallery will be deleted.'; // The %s-placeholders mustn't be removed, they will later be replaced by the wrappers for the links
$lang_register_php['i_am_sure'] = 'I\'m sure that I want to delete my user account';
$lang_register_php['really_delete'] = 'Do you really want to delete your user account?'; // js-alert
$lang_register_php['edit_xs_profile'] = 'Edit the profile of %s';
$lang_register_php['edit_my_profile'] = 'Edit my profile';
$lang_register_php['none'] = 'none';
$lang_register_php['user_name_banned'] = 'The username you have chosen is not allowed/banned. Choose another user name';
$lang_register_php['email_address_banned'] = 'You are banned from this gallery. You are not allowed to re-register. Go away!';
$lang_register_php['email_warning1'] = 'The email address field mustn\'t be empty!';
$lang_register_php['email_warning2'] = 'The email address you entered is not valid. Review!';
$lang_register_php['username_warning1'] = 'The username field mustn\'t be empty!';
$lang_register_php['username_warning2'] = 'Username must be at least two characters long!';
$lang_register_php['password_warning1'] = 'The password must be at least two characters long!';
$lang_register_php['password_warning2'] = 'Username and password must be different!';
$lang_register_php['password_verification_warning1'] = 'The two passwords do not match, please enter them again!';
$lang_register_php['form_not_submit'] = 'The form hasn\'t been submit - there are errors that you need to correct first!';
$lang_register_php['banned'] = 'Banned!';

$lang_register_php['confirm_email'] = <<< EOT
Thank you for registering at {SITE_NAME}

In order to activate your account with username "{USER_NAME}", you need to click on the link below or copy and paste it in your web browser.
<a href="{ACT_LINK}">{ACT_LINK}</a>

Regards,

The management of {SITE_NAME}

EOT;

$lang_register_approve_email = <<< EOT
A new user with the username "{USER_NAME}" has registered in your gallery.
In order to activate the account, you need to click on the link below or copy and paste it in your web browser.

<a href="{ACT_LINK}">{ACT_LINK}</a>

EOT;

$lang_register_php['activated_email'] = <<< EOT
Your account has been approved and activated.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}"


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File reviewcom.php
// ------------------------------------------------------------------------- //
if (defined('REVIEWCOM_PHP')) {
$lang_reviewcom_php['title'] = 'Review comments';
$lang_reviewcom_php['no_comment'] = 'There are no comments to review';
$lang_reviewcom_php['n_comm_del'] = '%s comment(s) deleted';
$lang_reviewcom_php['n_comm_disp'] = 'Number of comments to display';
$lang_reviewcom_php['see_prev'] = 'See previous';
$lang_reviewcom_php['see_next'] = 'See next';
$lang_reviewcom_php['del_comm'] = 'Delete selected comments';
$lang_reviewcom_php['user_name'] = 'Name';
$lang_reviewcom_php['date'] = 'Date';
$lang_reviewcom_php['comment'] = 'Comment';
$lang_reviewcom_php['file'] = 'File';
$lang_reviewcom_php['name_a'] = 'User name ascending';
$lang_reviewcom_php['name_d'] = 'User name descending';
$lang_reviewcom_php['date_a'] = 'Date ascending';
$lang_reviewcom_php['date_d'] = 'Date descending';
$lang_reviewcom_php['comment_a'] = 'Comment message ascending';
$lang_reviewcom_php['comment_d'] = 'Comment message descending';
$lang_reviewcom_php['file_a'] = 'File ascending';
$lang_reviewcom_php['file_d'] = 'File descending';
$lang_reviewcom_php['approval_a'] = 'Approval ascending';
$lang_reviewcom_php['approval_d'] = 'Approval descending';
$lang_reviewcom_php['ip_a'] = 'IP address ascending';
$lang_reviewcom_php['ip_d'] = 'IP address descending';
$lang_reviewcom_php['akismet_a'] = 'Akismet rating (valid comments at the bottom)';
$lang_reviewcom_php['akismet_d'] = 'Akismet rating (valid comments at the top)';
$lang_reviewcom_php['n_comm_appr'] = '%s approved comment(s)';
$lang_reviewcom_php['n_comm_unappr'] = '%s unapproved comment(s)';
$lang_reviewcom_php['configuration_changed'] = 'Approval config changed';
$lang_reviewcom_php['only_approval'] = 'only display comments needing approval';
$lang_reviewcom_php['approval'] = 'Approved';
$lang_reviewcom_php['save_changes'] = 'Save changes';
$lang_reviewcom_php['n_confirm_delete'] = 'Do you really want to delete the selected comment(s)?';
$lang_reviewcom_php['with_selected'] = 'With selected';
$lang_reviewcom_php['delete'] = 'delete';
$lang_reviewcom_php['approve'] = 'approve';
$lang_reviewcom_php['disapprove'] = 'mark unapproved';
$lang_reviewcom_php['do_nothing'] = 'do nothing';
$lang_reviewcom_php['comment_approved'] = 'Comment approved';
$lang_reviewcom_php['comment_unapproved'] = 'Comment marked unapproved';
$lang_reviewcom_php['ban_and_delete'] = 'Ban user and delete comment(s)';
$lang_reviewcom_php['akismet_status'] = 'Akismet said';
$lang_reviewcom_php['is_spam'] = 'is spam';
$lang_reviewcom_php['is_not_spam'] = 'is not spam';
$lang_reviewcom_php['akismet'] = 'Akismet';
$lang_reviewcom_php['akismet_count'] = 'Akismet has found %s spam messages for you until now';
$lang_reviewcom_php['akismet_test_result'] = 'Test result for your Akismet API key %s';
$lang_reviewcom_php['invalid'] = 'invalid';
$lang_reviewcom_php['missing_gallery_url'] = 'You need to specify a gallery URL in Coppermine\'s config';
$lang_reviewcom_php['unable_to_connect'] = 'Unable to connect to akismet.com';
$lang_reviewcom_php['not_found'] = 'The target URL was not found. Maybe the site structure of akismet.com has changed.';
$lang_reviewcom_php['unknown_error'] = 'Unknown error';
$lang_reviewcom_php['error_message'] = 'The error message returned was';
$lang_reviewcom_php['ip_address'] = 'IP address';
}

// ------------------------------------------------------------------------- //
// File sidebar.php
// ------------------------------------------------------------------------- //
if (defined('SIDEBAR_PHP')) {
$lang_sidebar_php['sidebar'] = 'Side Bar';
$lang_sidebar_php['install'] = 'install';
$lang_sidebar_php['install_explain'] = 'Among the many smart access methods to get to information quickly on the site, we provide sidebars for the most popular browsers used on different operating systems to access pages easily. Here you can find setup and uninstall information for the browsers supported.';
$lang_sidebar_php['os_browser_detect'] = 'Detecting your OS and browser';
$lang_sidebar_php['os_browser_detect_explain'] = 'The script is trying to detect your operating system and browser version - please wait a second. If auto-detection fails, you might want to %sunhide%s all possible sidebar install options manually.';
$lang_sidebar_php['mozilla'] = 'Mozilla, Firefox, Netscape 6+, Konqueror 3.2+';
$lang_sidebar_php['mozilla_explain'] = 'If you use Mozilla 0.9.4 or later, you can %sadd our sidebar to your set%s. You can uninstall this sidebar using the "Customize Sidebar" dialog in Mozilla.';
$lang_sidebar_php['ie_mac'] = 'Internet Explorer 5 and above on Mac OS';
$lang_sidebar_php['ie_mac_explain'] = 'If you use Internet Explorer 5 or above on MacOS, %sopen our sidebar page%s in a separate window. In that window, open the "Page Holder" tab on the left side of the window. Click "Add". If you want to keep it for future use, click on "Favorites" and select "Add to Page Holder Favorites".';
$lang_sidebar_php['ie_win'] = 'Internet Explorer 5 and above on Windows';
$lang_sidebar_php['ie_win_explain'] = 'If you use Internet Explorer 5 or above on Windows, you can add the Side Bar to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed in place of your usual search bar by right-clicking %shere%s and selecting "Add to favorites" from the context menu. This link does not install our bar as your default search bar, so no modification is made to your system.';
$lang_sidebar_php['ie7_win'] = 'Internet Explorer 7 on Windows XP/Vista';
$lang_sidebar_php['ie7_win_explain'] = 'If you use Internet Explorer 7 on Windows, you can add a navigation pop-up to your Links toolbar or you can add it to your favorites and clicking on it you can see our bar displayed as a pop-up window by right-clicking %shere%s and selecting "Add to favorites" from the context menu. In previous versions of IE, it was possible to add an actual side bar, but in IE7 you cannot accomplish this without applying complicated registry hacks. It is recommended to use another browser if you want to use an actual sidebar.';
$lang_sidebar_php['opera'] = 'Opera 6 and above';
$lang_sidebar_php['opera_explain'] = 'If you are using Opera, you can %sclick on this link to add our sidebar to your set%s. Tick "Show in panel" then. You can uninstall the sidebar by right clicking on it\'s tab and choosing "Delete" from the context menu.';
$lang_sidebar_php['additional_options'] = 'Additional options';
$lang_sidebar_php['additional_options_explain'] = 'If you have another browser than the one mentioned above, then click %shere%s to display all possible sidebar options.';
$lang_sidebar_php['cannot_add_sidebar'] = 'Sidebar cannot be added! Your browser does not support this method!'; // js-alert
$lang_sidebar_php['search'] = 'Search';
$lang_sidebar_php['reload'] = 'Reload';
}


// ------------------------------------------------------------------------- //
// File search.php
// ------------------------------------------------------------------------- //
if (defined('SEARCH_PHP')){
$lang_search_php['title'] = 'Search';
$lang_search_php['submit_search'] = 'search';
$lang_search_php['keyword_list_title'] = 'Keyword list';
$lang_search_php['keyword_msg'] = 'The above list is not all inclusive. It does not include words from file titles or descriptions. Try a full-text search.';
$lang_search_php['edit_keywords'] = 'Edit keywords';
$lang_search_php['search in'] = 'Search in:';
$lang_search_php['ip_address'] = 'IP address';
$lang_search_php['imgfields'] = 'Search files';
$lang_search_php['albcatfields'] = 'Search albums and categories';
$lang_search_php['age'] = 'Age';
$lang_search_php['newer_than'] = 'Newer than';
$lang_search_php['older_than'] = 'Older than';
$lang_search_php['days'] = 'days';
$lang_search_php['all_words'] = 'Match all words (AND)';
$lang_search_php['any_words'] = 'Match any words (OR)';
$lang_search_php['regex'] = 'Match regular expressions';
$lang_search_php['album_title'] = 'Album titles';
$lang_search_php['category_title'] = 'Category titles';
}

// ------------------------------------------------------------------------- //
// File searchnew.php
// ------------------------------------------------------------------------- //
if (defined('SEARCHNEW_PHP')) {
$lang_search_new_php['page_title'] = 'Search new files';
$lang_search_new_php['select_dir'] = 'Select directory';
$lang_search_new_php['select_dir_msg'] = 'This function allows you to add a batch of files that you have uploaded to your server by FTP.<br />Select the directory where you have uploaded your files.';
$lang_search_new_php['no_pic_to_add'] = 'There is no file to add';
$lang_search_new_php['need_one_album'] = 'You need at least one album to use this function';
$lang_search_new_php['warning'] = 'Warning';
$lang_search_new_php['change_perm'] = 'the script can\'t write in this directory, you need to change its mode to 755 or 777 before trying to add the files!';
$lang_search_new_php['target_album'] = '<strong>Put files of &quot;</strong>%s<strong>&quot; into </strong>%s';
$lang_search_new_php['folder'] = 'Folder';
$lang_search_new_php['image'] = 'file';
$lang_search_new_php['result'] = 'Result';
$lang_search_new_php['dir_ro'] = 'Not writable. ';
$lang_search_new_php['dir_cant_read'] = 'Not readable. ';
$lang_search_new_php['insert'] = 'Adding new files to the gallery';
$lang_search_new_php['list_new_pic'] = 'List of new files';
$lang_search_new_php['insert_selected'] = 'Insert selected files';
$lang_search_new_php['no_pic_found'] = 'No new file was found';
$lang_search_new_php['be_patient'] = 'Please be patient, the script needs time to add the files';
$lang_search_new_php['no_album'] = 'no album selected';
$lang_search_new_php['no_file'] = 'no file selected'; // cpg1.6
$lang_search_new_php['result_icon'] = 'click for details or to reload';
$lang_search_new_php['notes'] = <<< EOT
    <ul>
        <li>%s: the file was successfully added</li>
        <li>%s: the file is a duplicate and is already in the database</li>
        <li>%s: the file could not be added, check your configuration and the permission of directories where the files are located</li>
        <li>%s: you need to select an album first</li>
        <li>%s: the file is broken or inacessible</li>
        <li>%s: unknown file type</li>
        <li>%s: the file is actually a GIF image</li>
        <li>If the icons do not appear click on the broken file to see any error message produced by PHP</li>
        <li>If your browser timeouts, hit the reload button</li>
    </ul>
EOT;
// Translator note: Do not translate the %s placeholders - they are being replaced with icons
$lang_search_new_php['check_all'] = 'Check All';
$lang_search_new_php['uncheck_all'] = 'Uncheck All';
$lang_search_new_php['no_folders'] = 'There are no folders inside the "albums" folder yet. Make sure to create at least one custom folder within "albums" folder and ftp-upload your files there. You mustn\'t upload to the "userpics" nor "edit" folders, they are reserved for http uploads and internal purposes.';
$lang_search_new_php['browse_batch_add'] = 'Browsable interface';
$lang_search_new_php['display_thumbs_batch_add'] = 'Display preview thumbnails';
$lang_search_new_php['edit_pics'] = 'Edit files';
$lang_search_new_php['edit_properties'] = 'Album properties';
$lang_search_new_php['view_thumbs'] = 'Thumbnail view';
$lang_search_new_php['add_more_folder'] = 'Batch-add more files from the folder %s';
}

// ------------------------------------------------------------------------- //
//File send_activation.php
// ------------------------------------------------------------------------- //
if (defined('SEND_ACTIVATION_PHP')) {
$lang_send_activation_php['err_already_logged_in'] = 'You are already logged in!';
$lang_send_activation_php['activation_not_required'] = 'This website does not require activation by email';
$lang_send_activation_php['err_unk_user'] = 'Selected user does not exist!';
$lang_send_activation_php['resend_act_link'] = 'Resend activation link';
$lang_send_activation_php['enter_email'] = 'Enter your email address';
$lang_send_activation_php['submit'] = 'Go';
$lang_send_activation_php['failed_sending_email'] = 'Failed to send email with activation link';
$lang_send_activation_php['activation_email_sent'] = 'An email with activation link sent to %s. Please check your email to complete the process';
}

// ------------------------------------------------------------------------- //
// File stat_details.php
// ------------------------------------------------------------------------- //

if (defined('STAT_DETAILS_PHP')) {
$lang_stat_details_php['show_hide'] = 'show/hide this column';
$lang_stat_details_php['title'] = 'Statistic details';
$lang_stat_details_php['vote'] = 'Vote Details';
$lang_stat_details_php['hits'] = 'Hit Details';
$lang_stat_details_php['stats'] = 'Vote Statistics';
$lang_stat_details_php['users'] = 'User Statistics';
$lang_stat_details_php['sdate'] = 'Date';
$lang_stat_details_php['rating'] = 'Rating';
$lang_stat_details_php['search_phrase'] = 'Search phrase';
$lang_stat_details_php['referer'] = 'Referer';
$lang_stat_details_php['browser'] = 'Browser';
$lang_stat_details_php['os'] = 'Operating System';
$lang_stat_details_php['ip'] = 'IP';
$lang_stat_details_php['uid'] = 'User';
$lang_stat_details_php['sort_by_xxx'] = 'Sort by %s';
$lang_stat_details_php['ascending'] = 'ascending';
$lang_stat_details_php['descending'] = 'descending';
$lang_stat_details_php['internal'] = 'int';
$lang_stat_details_php['close'] = 'close';
$lang_stat_details_php['hide_internal_referers'] = 'hide internal referers';
$lang_stat_details_php['date_display'] = 'Date display';
$lang_stat_details_php['records_per_page'] = 'records per page';
$lang_stat_details_php['submit'] = 'submit / refresh';
$lang_stat_details_php['overall_stats'] = 'Overall Statistics';
$lang_stat_details_php['stats_by_os'] = 'Stats by operating systems';
$lang_stat_details_php['number_of_hits'] = 'Number of hits';
$lang_stat_details_php['total'] = 'Total';
$lang_stat_details_php['stats_by_browser'] = 'Stats by browser';
$lang_stat_details_php['overall_stats_config'] = 'Overall stats configuration';
$lang_stat_details_php['hit_details'] = 'Keep detailed hit statistics';
$lang_stat_details_php['hit_details_explanation'] = 'Keep detailed hit statistics';
$lang_stat_details_php['vote_details'] = 'Keep detailed voting statistics';
$lang_stat_details_php['vote_details_explanation'] = 'Keep detailed voting statistics';
$lang_stat_details_php['empty_hits_table'] = 'Empty all hit stats';
$lang_stat_details_php['empty_hits_table_confirm'] = 'Are you absolutely sure that you want to delete ALL hit stat records for your ENTIRE gallery? This cannot be undone!'; // js-alert
$lang_stat_details_php['empty_votes_table'] = 'Empty all voting stats';
$lang_stat_details_php['empty_votes_table_confirm'] = 'Are you absolutely sure that you want to delete ALL voting records for your ENTIRE gallery? This cannot be undone!'; // js-alert
$lang_stat_details_php['submit'] = 'Submit';
$lang_stat_details_php['upd_success'] = 'Coppermine configuration was updated';
$lang_stat_details_php['votes'] = 'votes';
$lang_stat_details_php['reset_votes_individual'] = 'Reset selected vote(s)';
$lang_stat_details_php['reset_votes_individual_confirm'] = 'Are you sure that you want to delete the selected votes? This cannot be undone!';
$lang_stat_details_php['back_to_intermediate'] = 'Back to intermediate file view';
$lang_stat_details_php['records_on_page'] = '%s records on %s page(s)';
$lang_stat_details_php['guest'] = 'Guest';
$lang_stat_details_php['not_implemented'] = 'not implemented yet';
}

// ------------------------------------------------------------------------- //
// File upload.php
// ------------------------------------------------------------------------- //

if (defined('UPLOAD_PHP')) {
$lang_upload_php['title'] = 'Upload file';
$lang_upload_php['restrictions'] = 'Restrictions';
$lang_upload_php['choose_method'] = 'Choose upload method';
$lang_upload_php['upload_swf'] = 'Multiple files - Flash-driven';
$lang_upload_php['upload_single'] = 'simple - one file at a time';
$lang_upload_php['up_instr_1'] = 'Select an album from the album dropdown list';
$lang_upload_php['up_instr_2'] = 'Click the "Browse" button below and navigate to the file you want to upload. You can select multiple files in a single go using Ctrl+Click.';
$lang_upload_php['up_instr_3'] = 'Select more files to upload by repeating step 2';
$lang_upload_php['up_instr_4'] = 'Click the "Continue" button after all your files have completed uploading (the button will only appear when you have uploaded at least one file).';
$lang_upload_php['up_instr_5'] = 'You\'ll be sent to a screen where you can enter details about the uploaded files. After filling in, submit that form using the "Apply changes" button at the bottom of that form.';
$lang_upload_php['restriction_zip'] = 'ZIP files uploaded will remain compressed, they will not be extracted on the server.';
$lang_upload_php['restriction_filesize'] = 'The size of files uploaded from your client to the server must not exceed %s each.';
$lang_upload_php['reg_instr_1'] = 'Invalid action for form creation.';
$lang_upload_php['no_name'] = 'Filename unavailable';
$lang_upload_php['no_tmp_name'] = 'Unable to upload';
$lang_upload_php['no_post'] = 'File not uploaded by POST.';
$lang_upload_php['forb_ext'] = 'Forbidden file extension.';
$lang_upload_php['exc_php_ini'] = 'Exceeded filesize allowed in php.ini.';
$lang_upload_php['exc_file_size'] = 'Exceeded filesize permitted by CPG.';
$lang_upload_php['partial_upload'] = 'Only a partial upload.';
$lang_upload_php['no_upload'] = 'No upload occurred.';
$lang_upload_php['unknown_code'] = 'Unknown PHP upload error code.';
$lang_upload_php['impossible'] = 'Impossible to move.';
$lang_upload_php['not_image'] = 'Not an image/corrupt';
$lang_upload_php['not_GD'] = 'Not a GD extension.';
$lang_upload_php['pixel_allowance'] = 'The height and/or width of the uploaded picture is more than that allowed by the gallery config.';
$lang_upload_php['failure'] = 'Upload failure';
$lang_upload_php['no_place'] = 'The previous file could not be placed.';
$lang_upload_php['max_fsize'] = 'Maximum allowed file size is %s';
$lang_upload_php['picture'] = 'File';
$lang_upload_php['pic_title'] = 'File title';
$lang_upload_php['description'] = 'File description';
$lang_upload_php['keywords_sel'] = 'Select a keyword';
$lang_upload_php['err_no_alb_uploadables'] = 'Sorry there is no album where you are allowed to upload files';
$lang_upload_php['close'] = 'Close';
$lang_upload_php['no_keywords'] = 'Sorry, no keywords available!';
$lang_upload_php['regenerate_dictionary'] = 'Regenerate dictionary';
$lang_upload_php['allowed_types'] = 'You are allowed to upload files with the following extensions:';
$lang_upload_php['allowed_img_types'] = 'Image extensions: %s';
$lang_upload_php['allowed_mov_types'] = 'Video extensions: %s';
$lang_upload_php['allowed_doc_types'] = 'Document extensions: %s';
$lang_upload_php['allowed_snd_types'] = 'Audio extensions: %s';
$lang_upload_php['please_wait'] = 'Please wait while the script is uploading - this might take a while';
$lang_upload_php['alternative_upload'] = 'Alternative upload method';
$lang_upload_php['err_js_disabled'] = 'Flash upload interface could not load. You must have JavaScript enabled to enjoy the flash upload interface.';
$lang_upload_php['err_flash_disabled'] = 'Upload interface is taking a long time to load or the load has failed. Please make sure that the Flash Plugin is enabled and that a working version of the Flash Player is installed.';
$lang_upload_php['err_alternate_method'] = 'Alternately you can use the <a href="upload.php?html5=1">HTML5</a> file upload interface.';
$lang_upload_php['err_flash_version'] = 'Upload interface could not load. You may need to install or upgrade Flash Player. Visit the <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Adobe website</a> to get the Flash Player.';
$lang_upload_php['flash_loading'] = 'Upload interface is loading. Please wait a moment...';
$lang_upload_php['err_no_method'] = 'There must be at least one upload plugin enabled';
$lang_upload_php['auto_orient'] = 'Auto-orient image(s)';

$lang_upload_swf_php['browse'] = 'Browse...';
$lang_upload_swf_php['cancel_all'] = 'Cancel all uploads';
$lang_upload_swf_php['upload_queue'] = 'Upload Queue';
$lang_upload_swf_php['files_uploaded'] = 'files uploaded';
$lang_upload_swf_php['all_files'] = 'All Files';
$lang_upload_swf_php['status_pending'] = 'Pending...';
$lang_upload_swf_php['status_uploading'] = 'Uploading...';
$lang_upload_swf_php['status_complete'] = 'Complete.';
$lang_upload_swf_php['status_cancelled'] = 'Cancelled.';
$lang_upload_swf_php['status_stopped'] = 'Stopped.';
$lang_upload_swf_php['status_failed'] = 'Upload Failed.';
$lang_upload_swf_php['status_too_big'] = 'File is too big.';
$lang_upload_swf_php['status_zero_byte'] = 'Cannot upload Zero Byte files.';
$lang_upload_swf_php['status_invalid_type'] = 'Invalid File Type.';
$lang_upload_swf_php['status_unhandled'] = 'Unhandled Error';
$lang_upload_swf_php['status_upload_error'] = 'Upload Error: ';
$lang_upload_swf_php['status_server_error'] = 'Server (IO) Error';
$lang_upload_swf_php['status_security_error'] = 'Security Error';
$lang_upload_swf_php['status_upload_limit'] = 'Upload limit exceeded.';
$lang_upload_swf_php['status_validation_failed'] = 'Failed Validation. Upload skipped.';
$lang_upload_swf_php['queue_limit'] = 'You have attempted to queue too many files.';
$lang_upload_swf_php['upload_limit_1'] = 'You have reached the upload limit.';
$lang_upload_swf_php['upload_limit_2'] = 'You may select up to %s file(s)';
}
// ------------------------------------------------------------------------- //
// Upload plugin(s)
// ------------------------------------------------------------------------- //
if (defined('PLUGINMGR_PHP') || defined('UPLOAD_PHP') || defined('ADMIN_PHP') || defined('UPLOAD_H5A')) {
$lang_plugin_upload['js_require'] = 'JAVASCRIPT IS REQUIRED FOR THIS METHOD TO FUNCTION.';
$lang_plugin_upload['albmSelMsg'] = 'Please select an album first.';
$lang_plugin_upload['size_err'] = 'File is larger than max size allowed.';

// HTML5
$lang_plugin_upload_h5a['plug_desc'] = 'Adds HTML5 concurrent, multi-file upload capabilities, including drag-and-drop';
$lang_plugin_upload_h5a['plug_info'] = 'This plugin provides a method for concurrent, multi-file uploads using HTML5 and javascript within capable browsers.';
$lang_plugin_upload_h5a['html5_method'] = 'Multiple files - HTML5 (recommended)';
$lang_plugin_upload_h5a['html5upload'] = 'CoreH5A Upload';
$lang_plugin_upload_h5a['title'] = 'HTML5 Upload';

$lang_plugin_upload_h5a['upldfiles'] = 'Upload files';
$lang_plugin_upload_h5a['files'] = 'Files';
$lang_plugin_upload_h5a['flistitl'] = 'Use file name as title';
$lang_plugin_upload_h5a['drop_files'] = 'Or drop files here';
$lang_plugin_upload_h5a['files_left'] = 'Files queued: ';
$lang_plugin_upload_h5a['continue'] = 'Continue:';
$lang_plugin_upload_h5a['gotoedit'] = 'Edit uploaded files';

$lang_plugin_upload_h5a['maxUplSiz'] = 'Maximum upload file size';	//v1.3
$lang_plugin_upload_h5a['select'] = 'Number of concurrent uploads';
$lang_plugin_upload_h5a['acptmime'] = 'Mime type filters for browser file select';
$lang_plugin_upload_h5a['autoedit'] = 'Automatically go to edit after error-free upload completes';
$lang_plugin_upload_h5a['incflds'] = 'Include fields:';
$lang_plugin_upload_h5a['saved'] = 'Your settings have been saved.';
$lang_plugin_upload_h5a['revert'] = 'Revert to default';	//v1.3

$lang_plugin_upload_h5a['notavail'] = 'NOT AVAILABLE WITH THIS WEB BROWSER';
$lang_plugin_upload_h5a['aborted'] = 'aborted';
$lang_plugin_upload_h5a['type_err'] = 'Cannot upload a file of this type. (extension)';
$lang_plugin_upload_h5a['extallow'] = 'Only files with the following extensions are allowed: ';

$lang_plugin_upload_h5a['q_stop'] = 'stop queue';
$lang_plugin_upload_h5a['q_resume'] = 'resume queue';
$lang_plugin_upload_h5a['q_cancel'] = 'cancel queue';
//v1.3.2 chunked
$lang_plugin_upload_h5a['muf_err'] = 'Error saving chunk #%d for file %s ( %s %s )';
$lang_plugin_upload_h5a['miss_chnk'] = 'Missing file chunks';
$lang_plugin_upload_h5a['dest_fail'] = 'Cannot create the destination file: %s';

// swf
$lang_plugin_upload_swf['plug_desc'] = 'Adds Flash multi-file upload capabilities';
$lang_plugin_upload_swf['plug_info'] = 'This plugin provides a method for multi-file uploads using Flash and javascript.';
$lang_plugin_upload_swf['swf_method'] = 'Multiple files - Flash';
$lang_plugin_upload_swf['swfupload'] = 'CoreSWF Upload';
$lang_plugin_upload_swf['title'] = 'Flash Upload';

// single
$lang_plugin_upload_sgl['plug_desc'] = 'Adds single file upload method';
$lang_plugin_upload_sgl['plug_info'] = 'This plugin provides a method for single file uploads.';
$lang_plugin_upload_sgl['sgl_method'] = 'Simple - one file at a time';
$lang_plugin_upload_sgl['sglupload'] = 'CoreSGL Upload';
$lang_plugin_upload_sgl['title'] = 'Single File Upload';
$lang_plugin_upload_sgl['choose_file'] = 'Please choose a file.';
}
// ------------------------------------------------------------------------- //
// File usermgr.php
// ------------------------------------------------------------------------- //
if (defined('USERMGR_PHP')) {
$lang_usermgr_php['memberlist'] = 'Memberlist';
$lang_usermgr_php['user_manager'] = 'User manager';
$lang_usermgr_php['title'] = 'Manage users';
$lang_usermgr_php['name_a'] = 'Name ascending';
$lang_usermgr_php['name_d'] = 'Name descending';
$lang_usermgr_php['group_a'] = 'Group ascending';
$lang_usermgr_php['group_d'] = 'Group descending';
$lang_usermgr_php['reg_a'] = 'Reg date ascending';
$lang_usermgr_php['reg_d'] = 'Reg date descending';
$lang_usermgr_php['pic_a'] = 'File count ascending';
$lang_usermgr_php['pic_d'] = 'File count descending';
$lang_usermgr_php['disku_a'] = 'Disk usage ascending';
$lang_usermgr_php['disku_d'] = 'Disk usage descending';
$lang_usermgr_php['lv_a'] = 'Last visit ascending';
$lang_usermgr_php['lv_d'] = 'Last visit descending';
$lang_usermgr_php['sort_by'] = 'Sort users by';
$lang_usermgr_php['err_no_users'] = 'User table is empty!';
$lang_usermgr_php['err_edit_self'] = 'You can\'t edit your own profile, use the \'My profile\' link for that';
$lang_usermgr_php['with_selected'] = 'With selected:';
$lang_usermgr_php['delete_files_no'] = 'keep public files (but anonymize)';
$lang_usermgr_php['delete_files_yes'] = 'delete public files as well';
$lang_usermgr_php['delete_comments_no'] = 'keep comments (but anonymize)';
$lang_usermgr_php['delete_comments_yes'] = 'delete comments as well';
$lang_usermgr_php['activate'] = 'Activate';
$lang_usermgr_php['deactivate'] = 'Deactivate';
$lang_usermgr_php['reset_password'] = 'Reset Password';
$lang_usermgr_php['change_primary_membergroup'] = 'Change primary membergroup';
$lang_usermgr_php['add_secondary_membergroup'] = 'Add secondary membergroup';
$lang_usermgr_php['name'] = 'User name';
$lang_usermgr_php['group'] = 'Group';
$lang_usermgr_php['inactive'] = 'Inactive';
$lang_usermgr_php['operations'] = 'Operations';
$lang_usermgr_php['pictures'] = 'Files';
$lang_usermgr_php['disk_space_used'] = 'Space used';
$lang_usermgr_php['disk_space_quota'] = 'Quota';
$lang_usermgr_php['registered_on'] = 'Registration';
$lang_usermgr_php['last_visit'] = 'Last visit';
$lang_usermgr_php['u_user_on_p_pages'] = '%d users on %d page(s)';
$lang_usermgr_php['confirm_del'] = 'Are you sure you want to DELETE this user?\\nAll his/her files and albums will also be deleted.'; // js-alert
$lang_usermgr_php['mail'] = 'MAIL';
$lang_usermgr_php['err_unknown_user'] = 'Selected user does not exist!';
$lang_usermgr_php['modify_user'] = 'Modify user';
$lang_usermgr_php['notes'] = 'Notes';
$lang_usermgr_php['note_list'] = 'If you don\'t want to change the current password, leave the "password" field blank';
$lang_usermgr_php['password'] = 'Password';
$lang_usermgr_php['user_active'] = 'User is active';
$lang_usermgr_php['user_group'] = 'User group';
$lang_usermgr_php['user_email'] = 'User email';
$lang_usermgr_php['user_web_site'] = 'User web site';
$lang_usermgr_php['create_new_user'] = 'Create new user';
$lang_usermgr_php['user_location'] = 'User location';
$lang_usermgr_php['user_interests'] = 'User interests';
$lang_usermgr_php['user_occupation'] = 'User occupation';
$lang_usermgr_php['user_profile1'] = '$user_profile1';
$lang_usermgr_php['user_profile2'] = '$user_profile2';
$lang_usermgr_php['user_profile3'] = '$user_profile3';
$lang_usermgr_php['user_profile4'] = '$user_profile4';
$lang_usermgr_php['user_profile5'] = '$user_profile5';
$lang_usermgr_php['user_profile6'] = '$user_profile6';
$lang_usermgr_php['latest_upload'] = 'Recent uploads';
$lang_usermgr_php['no_latest_upload'] = 'Has not uploaded any files';
$lang_usermgr_php['last_comments'] = 'Last comments';
$lang_usermgr_php['no_last_comments'] = 'Has not made any comments';
$lang_usermgr_php['comments'] = 'Comments';
$lang_usermgr_php['never'] = 'never';
$lang_usermgr_php['search'] = 'User search';
$lang_usermgr_php['submit'] = 'Submit';
$lang_usermgr_php['search_submit'] = 'Go!';
$lang_usermgr_php['search_result'] = 'Search results for: ';
$lang_usermgr_php['alert_no_selection'] = 'You have to select at least one user first!'; // js-alert
$lang_usermgr_php['select_group'] = 'Select group';
$lang_usermgr_php['groups_alb_access'] = 'Album permissions by group';
$lang_usermgr_php['category'] = 'Category';
$lang_usermgr_php['modify'] = 'Modify?';
$lang_usermgr_php['group_no_access'] = 'This group has no special access';
$lang_usermgr_php['notice'] = 'Notice';
$lang_usermgr_php['group_can_access'] = 'Album(s) that only "%s" can access';
$lang_usermgr_php['send_login_data'] = 'Send login data to this user (Password will be sent via email)';
$lang_usermgr_php['send_login_email_subject'] = 'Your new account information';
$lang_usermgr_php['failed_sending_email'] = 'The login data email can\'t be sent!';
$lang_usermgr_php['view_profile'] = 'View profile';
$lang_usermgr_php['edit_profile'] = 'Edit profile';
$lang_usermgr_php['ban_user'] = 'Ban user';
$lang_usermgr_php['user_is_banned'] = 'User is banned';
$lang_usermgr_php['status'] = 'Status';
$lang_usermgr_php['status_active'] = 'active';
$lang_usermgr_php['status_inactive'] = 'not active';
$lang_usermgr_php['total'] = 'Total';
$lang_usermgr_php['send_login_data_email'] = <<< EOT
A new account has been created for you at {SITE_NAME}.

You can now log in at <a href="{SITE_LINK}">{SITE_LINK}</a> using the username "{USER_NAME}" and password "{USER_PASS}"


Regards,

The management of {SITE_NAME}

EOT;
}

// ------------------------------------------------------------------------- //
// File update.php
// ------------------------------------------------------------------------- //
if (defined('UPDATE_PHP')) {
$lang_update_php['title'] = 'Updater';
$lang_update_php['welcome_updater'] = 'Welcome to Coppermine update';
$lang_update_php['could_not_authenticate'] = 'Could not authenticate you';
$lang_update_php['provide_admin_account_cpg'] = 'Please provide your Coppermine admin account data'; // cpg1.6
$lang_update_php['provide_admin_account_dbase'] = 'Please provide your %s account data'; // cpg1.6
$lang_update_php['try_again'] = 'Try again';
$lang_update_php['dbase_connect_error'] = 'Could not create a %s connection';
$lang_update_php['dbase_database_error'] = 'Could not connect to database: %s';
$lang_update_php['dbase_said'] = '%s said';
$lang_update_php['check_config_file'] = 'Please check the %s details in %s';
$lang_update_php['performing_database_updates'] = 'Performing Database Updates';
$lang_update_php['performing_file_updates'] = 'Performing File Updates';
$lang_update_php['already_done'] = 'Already Done';
$lang_update_php['password_encryption'] = 'Encryption of passwords';
$lang_update_php['alb_password_encryption'] = 'Encryption of album passwords';
$lang_update_php['category_tree'] = 'Category tree';
$lang_update_php['authentication_needed'] = 'Authentication needed';
$lang_update_php['username'] = 'Username';
$lang_update_php['password'] = 'Password';
$lang_update_php['update_completed'] = 'Update completed';
$lang_update_php['check_versions'] = 'It\'s recommended to %scheck your file versions%s if you just upgraded from an older version of Coppermine'; // Leave the %s untouched when translating - it wraps the link
$lang_update_php['start_page'] = 'If you didn\'t (or you don\'t want to check), you can go to %syour gallery\'s start page%s'; // Leave the %s untouched when translating - it wraps the link
$lang_update_php['errors_encountered'] = 'The following errors were encountered and need to be corrected first';
$lang_update_php['delete_file'] = 'Delete %s';
$lang_update_php['could_not_delete'] = 'Could not delete due to missing permissions. Delete the file manually!';
$lang_update_php['rename_file'] = 'Rename %s to %s';
$lang_update_php['could_not_rename'] = 'Could not rename due to missing permissions. Rename the file manually!';
// 1.6 dbabstract
$lang_update_php['newDbMethod'] = 'Your Coppermine Gallery installation is using a database connection method (mysql) that is deprecated and should be changed. Please choose an alternate connection method below.';
$lang_update_php['not_available'] = 'not available';
$lang_update_php['version_too_old'] = 'version too old';
$lang_update_php['recommended'] = ' (recommended)';
$lang_update_php['current_nr'] = ' (current, not recommended)';
$lang_update_php['unable_write_config'] = 'Unable to write config file';
// 1.6 core upload plugins
$lang_update_php['core_upload_plugs'] = 'Enable core upload plugins';
// for scripted upgrade/update mechanism
$lang_update_php['no_zip_extn'] = 'The extension providing ZipArchive is not available';
$lang_update_php['files_placed_title'] = 'Update files placed';
$lang_update_php['files_placed_msg'] = 'All update files were successfully placed. Click below to complete the update.';
$lang_update_php['complete_update'] = 'Complete Update';
$lang_update_php['select_update'] = 'Please select the update to perform.';
$lang_update_php['not_writeable'] = '<b>Updating can not be performed</b><br />The following directories are not writeable: ';
$lang_update_php['available_updates'] = 'Available Updates';
$lang_update_php['perform_update'] = 'Perform Selected Update';
$lang_update_php['no_updates_title'] = 'No update available';
$lang_update_php['no_updates_msg'] = 'No updates are available for your version';
$lang_update_php['not_found'] = 'Releases of CPG not found at Github';
$lang_update_php['save_error'] = 'Could not save new update. Operation aborted.';
$lang_update_php['pre_warning'] = '<span style="color:red">WARNING: This is a pre-release version!</span>';
}

// ------------------------------------------------------------------------- //
// File util.php
// ------------------------------------------------------------------------- //
if (defined('UTIL_PHP')) {
$lang_util_php['title'] = 'Admin tools';
$lang_util_php['file'] = 'File';
$lang_util_php['problem'] = 'Problem';
$lang_util_php['status'] = 'Status';
$lang_util_php['title_set_to'] = 'title set to';
$lang_util_php['submit_form'] = 'submit';
$lang_util_php['titles_updated'] = '%s Titles Updated.';
$lang_util_php['updated_successfully'] = 'updated successfully';
$lang_util_php['error_create'] = 'ERROR creating';
$lang_util_php['continue'] = 'Process more files';
$lang_util_php['main_success'] = 'The file %s was successfully used as main file';
$lang_util_php['error_rename'] = 'Error renaming %s to %s';
$lang_util_php['error_not_found'] = 'The file %s was not found';
$lang_util_php['back'] = 'back to Admin tools start';
$lang_util_php['thumbs_wait'] = 'Updating thumbnails and/or resized images, please wait...';
$lang_util_php['thumbs_continue_wait'] = 'Continuing to update thumbnails and/or resized images...';
$lang_util_php['titles_wait'] = 'Updating titles, please wait...';
$lang_util_php['delete_wait'] = 'Deleting titles, please wait...';
$lang_util_php['replace_wait'] = 'Deleting originals and replacing them with resized images, please wait..';
$lang_util_php['update'] = 'Update thumbs and/or resized photos';
$lang_util_php['update_what'] = 'What should be updated';
$lang_util_php['update_thumb'] = 'Only thumbnails';
$lang_util_php['update_pic'] = 'Only resized pictures';
$lang_util_php['update_both'] = 'Both thumbnails and resized pictures';
$lang_util_php['update_number'] = 'Number of processed images per click';
$lang_util_php['update_option'] = '(Try setting this option lower if you experience timeout problems)';
$lang_util_php['update_missing'] = 'Only update missing files';
$lang_util_php['filename_title'] = 'Filename &rArr; File title';
$lang_util_php['filename_how'] = 'How should the file title be modified';
$lang_util_php['filename_remove'] = 'Remove extension (.jpg or other) and replace _ (underscores) with spaces';
$lang_util_php['filename_euro'] = 'Change 2003_11_23_13_20_20.jpg to 23/11/2003 13:20';
$lang_util_php['filename_us'] = 'Change 2003_11_23_13_20_20.jpg to 11/23/2003 13:20';
$lang_util_php['filename_time'] = 'Change 2003_11_23_13_20_20.jpg to 13:20';
$lang_util_php['notitle'] = 'Apply only for files with empty titles';
//$lang_util_php['delete_title'] = 'Delete file titles';
//$lang_util_php['delete_title_explanation'] = 'This will remove all titles on files in the album you specify.';
$lang_util_php['change_values_title'] = 'Change values for (or clear) title, description and keywords.';
$lang_util_php['change_values_how'] = 'Set new bulk values for items, or clear them.';
$lang_util_php['change_values_title_label'] = 'Title:';
$lang_util_php['change_values_desc_label'] = 'Description:';
$lang_util_php['change_values_tags_label'] = 'Keywords (use semicolon):';
$lang_util_php['change_values_msg_nothing'] = 'Nothing to do.';
$lang_util_php['change_values_msg_changed'] = 'Changes were made to %d items.';
$lang_util_php['change_values_msg_error'] = 'Failed to make changes.';
$lang_util_php['delete_original'] = 'Delete original size photos';
$lang_util_php['delete_original_explanation'] = 'This will remove the full sized pictures.';
$lang_util_php['delete_intermediate'] = 'Delete intermediate pictures';
$lang_util_php['delete_intermediate_explanation1'] = 'This will delete intermediate (normal) pictures.';
$lang_util_php['delete_intermediate_explanation2'] = 'Use this to free up disk space if you have disabled \'Create intermediate pictures\' in config after adding pictures.';
$lang_util_php['delete_intermediate_check'] = 'The config option \'Create intermediate pictures\' is currently %s.';
$lang_util_php['no_image'] = '%s has been skipped because it is not an image.';
$lang_util_php['enabled'] = 'enabled';
$lang_util_php['disabled'] = 'disabled';
$lang_util_php['delete_replace'] = 'Deletes the original images replacing them with the sized versions';
$lang_util_php['titles_deleted'] = 'All titles in specified album removed';
$lang_util_php['deleting_intermediates'] = 'Deleting intermediate images, please wait...';
$lang_util_php['searching_orphans'] = 'Searching for orphans, please wait...';
$lang_util_php['delete_orphans'] = 'Delete comments on missing files';
$lang_util_php['delete_orphans_explanation'] = 'This will identify and allow you to delete any comments associated with files no longer in the gallery.<br />Checks all albums.';
$lang_util_php['update_full_normal_thumb'] = 'Everything: full-sized, resized and thumbs';
$lang_util_php['update_full_normal'] = 'Both resized and full sized (if an original copy is available)';
$lang_util_php['update_full'] = 'Just full sized (if an original copy is available)';
$lang_util_php['delete_back'] = 'Delete original image backup for watermarked images';
$lang_util_php['delete_back_explanation'] = 'This will delete the backup image. You will save some disk space but not be able anymore to undo the watermark!!! After that the watermark will be permanent.';
$lang_util_php['finished'] = 'Finished updating thumbs/images!';
$lang_util_php['autorefresh'] = 'Auto refresh (no need to click continue button anymore)';
$lang_util_php['refresh_db'] = 'Reload file dimensions and size information.';
$lang_util_php['refresh_db_explanation'] = 'This will re-read file sizes and dimensions. Use this if quota\'s are incorrect or you have changed the files manually.';
$lang_util_php['reset_views'] = 'Reset view counters';
$lang_util_php['reset_views_explanation'] = 'Sets all file view counts to zero in the album specified.';
$lang_util_php['reset_success'] = 'Reset successful';
$lang_util_php['orphan_comment'] = 'orphan comments found';
$lang_util_php['delete_all'] = 'Delete all';
$lang_util_php['delete_all_orphans'] = 'Delete all orphans?';
$lang_util_php['comment'] = 'Comment: ';
$lang_util_php['nonexist'] = 'attached to non-existent file # ';
$lang_util_php['delete_old'] = 'Delete files that are older than a set number of days';
$lang_util_php['delete_old_explanation'] = 'This will delete files that are older than the number of days you specify (full-size, intermediate, thumbnails). Use this feature to free up disk space.';
$lang_util_php['delete_old_warning'] = 'Warning: the files you specify will be deleted for good without further warnings!';
$lang_util_php['deleting_old'] = 'Deleting older images, please wait...';
$lang_util_php['older_than'] = 'Delete files older than %s days';
$lang_util_php['del_orig'] = 'The original file %s was successfully deleted';
$lang_util_php['del_intermediate'] = 'The intermediate image %s was successfully deleted';
$lang_util_php['del_thumb'] = 'The thumbnail %s was successfully deleted';
$lang_util_php['del_error'] = 'Error deleting %s!';
$lang_util_php['affected_records'] = '%s affected records.';
$lang_util_php['all_albums'] = 'All Albums';
$lang_util_php['update_result'] = 'Update results';
$lang_util_php['incorrect_filesize'] = 'Total filesize is incorrect';
$lang_util_php['database'] = 'Database: ';
$lang_util_php['bytes'] = ' bytes';
$lang_util_php['actual'] = 'Actual: ';
$lang_util_php['updated'] = 'Updated';
$lang_util_php['filesize_error'] = 'Could not obtain file size (may be invalid file), skipping....';
$lang_util_php['skipped'] = 'Skipped';
$lang_util_php['incorrect_dimension'] = 'Dimensions are incorrect';
$lang_util_php['dimension_error'] = 'Could not obtain dimension info, skipping....';
$lang_util_php['cannot_fix'] = 'Cannot fix';
$lang_util_php['fullpic_error'] = 'File %s does not exist!';
$lang_util_php['no_prob_detect'] = 'No problems detected';
$lang_util_php['no_prob_found'] = 'No problems were found.';
$lang_util_php['keyword_convert'] = 'Convert keyword separator';
$lang_util_php['keyword_from_to'] = 'Convert keyword separator from %s to %s';
$lang_util_php['keyword_set'] = 'Set gallery keyword separator to new value';
$lang_util_php['keyword_replace_before'] = 'Before conversion, replace %s with %s';
$lang_util_php['keyword_replace_after'] = 'After conversion, replace %s with %s';
$lang_util_php['keyword_replace_values'] = array('_'=>'underscore', '-'=>'hyphen', '~'=>'tilde');
$lang_util_php['keyword_explanation'] = 'This will convert the keyword separator for all your files from one value to another value. See the help documentation for details.';
$lang_util_php['nothing_deleted'] = 'There was nothing to delete.'; // cpg1.6
$lang_util_php['warnings'] = 'Warnings'; // cpg1.6
$lang_util_php['errors'] = 'Errors'; // cpg1.6
$lang_util_php['complete'] = 'Action Complete'; // cpg1.6
}

// ------------------------------------------------------------------------- //
// File versioncheck.php
// ------------------------------------------------------------------------- //
if (defined('VERSIONCHECK_PHP')) {
$lang_versioncheck_php['title'] = 'Versioncheck';
$lang_versioncheck_php['versioncheck_output'] = 'Versioncheck output';
$lang_versioncheck_php['file'] = 'file';
$lang_versioncheck_php['folder'] = 'folder';
$lang_versioncheck_php['outdated'] = 'older than %s';
$lang_versioncheck_php['newer'] = 'newer than %s';
$lang_versioncheck_php['modified'] = 'modified';
$lang_versioncheck_php['not_modified'] = 'unmodified';
$lang_versioncheck_php['needs_change'] = 'needs change';
$lang_versioncheck_php['review_permissions'] = 'Review Permissions';
$lang_versioncheck_php['inaccessible'] = 'File is inaccessible';
$lang_versioncheck_php['review_version'] = 'Your file is outdated';
$lang_versioncheck_php['review_dev_version'] = 'Your file is newer than anticipated';
$lang_versioncheck_php['review_modified'] = 'File may be corrupt (or you have deliberately edited it)';
$lang_versioncheck_php['review_missing'] = '%s missing or inaccessible';
$lang_versioncheck_php['existing'] = 'existing';
$lang_versioncheck_php['review_removed_existing'] = 'The file must be removed for security reasons';
$lang_versioncheck_php['counter'] = 'Counter';
$lang_versioncheck_php['type'] = 'Type';
$lang_versioncheck_php['path'] = 'Path';
$lang_versioncheck_php['missing'] = 'Missing';
$lang_versioncheck_php['permissions'] = 'Permissions';
$lang_versioncheck_php['version'] = 'Version';
$lang_versioncheck_php['revision'] = 'Revision';
$lang_versioncheck_php['modified'] = 'Modified';
$lang_versioncheck_php['comment'] = 'Comment';
$lang_versioncheck_php['help'] = 'Help';
$lang_versioncheck_php['repository_link'] = 'Repository link';
$lang_versioncheck_php['browse_corresponding_page_subversion'] = 'Browse page corresponding to this file in the project\'s repository';
$lang_versioncheck_php['mandatory'] = 'mandatory';
$lang_versioncheck_php['mandatory_missing'] = 'Mandatory file is missing';
$lang_versioncheck_php['optional'] = 'optional';
$lang_versioncheck_php['removed'] = 'removed';
$lang_versioncheck_php['options'] = 'Options';
$lang_versioncheck_php['display_output'] = 'Display output';
$lang_versioncheck_php['on_screen'] = 'Full Screen';
$lang_versioncheck_php['text_only'] = 'Text-only';
$lang_versioncheck_php['errors_only'] = 'Only show potential errors';
$lang_versioncheck_php['hide_images'] = 'Hide images';
$lang_versioncheck_php['no_modification_check'] = 'Don\'t check for modified files';
$lang_versioncheck_php['do_not_connect_to_online_repository'] = 'Do not connect to the online repository';
$lang_versioncheck_php['online_repository_explain'] = 'only recommended if connection fails';
$lang_versioncheck_php['submit'] = 'submit / refresh';
$lang_versioncheck_php['select_all'] = 'Select All'; // js-alert
$lang_versioncheck_php['files_folder_processed'] = 'Displaying %s items of %s folders/files processed with %s potential issues';
$lang_versioncheck_php['read'] = 'Read';
$lang_versioncheck_php['write'] = 'Write';
$lang_versioncheck_php['warning'] = 'Warning';
$lang_versioncheck_php['not_applicable'] = 'n/a';
$lang_versioncheck_php['no_repo_title'] = 'No Repository Data';
$lang_versioncheck_php['no_repo_message'] = 'Could not get version check information from the repository.';
}

// ------------------------------------------------------------------------- //
// File view_log.php
// ------------------------------------------------------------------------- //
if (defined('VIEWLOG_PHP')) {
$lang_viewlog_php['delete_all'] = 'Delete All Logs';
$lang_viewlog_php['delete_this'] = 'Delete This Log';
$lang_viewlog_php['view_logs'] = 'View Logs';
$lang_viewlog_php['no_logs'] = 'No logs created.';
$lang_viewlog_php['last_updated'] = 'last update';
}

//EOF