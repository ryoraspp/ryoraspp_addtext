<?php
/*
Plugin Name: ryoraspp AddText
Plugin URI: 
Description: Plugin to add text to the end.(Create a WordPress plugin for the first time)
Author: ryoraspp
Version: 0.1
Author URI:https://ryo.nagoya/
License: GPLv2 or later
*/

function ryoraspp_addtext($contentData) {
	$addtext = "<p>If the plugin of ryoraspp AddText is OK,This sentense is displayed on the posts!</p>"; //Any value
    $str = $contentData.$addtext;
    return $str;
}
add_filter('the_content','ryoraspp_addtext'); //(Filter Hook, Function name)

?>