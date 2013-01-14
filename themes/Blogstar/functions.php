<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 2008 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: functions.php
| Author: Falcon
| Site: http://agxthemes.com/
| Contact: falcon@agxthemes.com
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/

if (!defined("IN_FUSION")) { die("Access Denied"); }

set_image("folder", THEME."forum/folder.png");
set_image("folderhot", THEME."forum/folderhot.png");
set_image("folderlock", THEME."forum/folderlock.png");
set_image("foldernew", THEME."forum/foldernew.png");
set_image("stickythread", THEME."forum/stickythread.png");

set_image("pollbar", THEME."images/pollbar.png");

set_image("stickythread", THEME."forum/stickythread.png");
set_image("printer", THEME."images/printer.png");
set_image("up", THEME."images/up.png");
set_image("down", THEME."images/down.png");
set_image("left", THEME."images/left.png");
set_image("right", THEME."images/right.png");

set_image("reply", "reply");
set_image("newthread", "newthread");
set_image("web", "web");
set_image("pm", "pm");
set_image("quote", "quote");
set_image("forum_edit", "forum_edit");

// lines by Johan Wilson
function theme_output($output) {

	$search = array(
		"@><img src='reply' alt='(.*?)' style='border:0px' />@si",
		"@><img src='newthread' alt='(.*?)' style='border:0px;?' />@si",
		
		"@><img src='web' alt='(.*?)' style='border:0;vertical-align:middle' />@si",
		"@><img src='pm' alt='(.*?)' style='border:0;vertical-align:middle' />@si",
		"@><img src='quote' alt='(.*?)' style='border:0px;vertical-align:middle' />@si",
		"@><img src='forum_edit' alt='(.*?)' style='border:0px;vertical-align:middle' />@si"
	);
	$replace = array(
		' class="big button"><span class="reply-button icon"></span>$1',
		' class="big button"><span class="newthread-button icon"></span>$1',
		' class="button" rel="nofollow" title="$1"><span class="web-button icon"></span>Web',
		' class="button" title="$1"><span class="pm-button icon"></span>PM',
		' class="button" title="$1"><span class="quote-button icon"></span>$1',
		' class="negative button" title="$1"><span class="edit-button icon"></span>$1'
	);
	$output = preg_replace($search, $replace, $output);

	return $output;
}

?>