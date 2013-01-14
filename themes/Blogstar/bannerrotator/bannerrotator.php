<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright © 2002 - 20011 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: bannerrotator.php
| Version: 1.0
| Author: HaYaLeT http://www.hayaletsevgili.com
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
| Please don't delete copy link / Lütfen Link Silmeyin
+--------------------------------------------------------*/

if (!defined('IN_FUSION')) { die('Access Denied'); }
//SETTINGS
/*----------------------*/
$width = "880";
$height = "280";
/*----------------------*/
add_to_head("<link rel='stylesheet' href='".THEME."bannerrotator/css/bannerrotator.css' type='text/css' media='screen' />");
add_to_head("<script type='text/javascript' src='".THEME."bannerrotator/js/infinite-rotator.js'></script> ");

echo '<div id="rotating-item-wrapper" style="width:'.$width.'px; height:'.$height.'px;">';
	echo '<img src="'.THEME.'bannerrotator/images/1.jpg" alt="" class="rotating-item" width="'.$width.'" height="'.$height.'" />';
	echo '<img src="'.THEME.'bannerrotator/images/2.jpg" alt="" class="rotating-item" width="'.$width.'" height="'.$height.'" />';
	echo '<img src="'.THEME.'bannerrotator/images/3.jpg" alt="" class="rotating-item" width="'.$width.'" height="'.$height.'" />';
	echo '<img src="'.THEME.'bannerrotator/images/4.jpg" alt="" class="rotating-item" width="'.$width.'" height="'.$height.'" />';
	echo '<img src="'.THEME.'bannerrotator/images/5.jpg" alt="" class="rotating-item" width="'.$width.'" height="'.$height.'" border="0" />';
	echo '<img src="'.THEME.'bannerrotator/images/6.jpg" alt="" class="rotating-item" width="'.$width.'" height="'.$height.'" border="0" />';    
echo '</div>';


?>