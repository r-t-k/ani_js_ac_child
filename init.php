<?php
/*
 * Ardent Ani Wordpress - AC Child edition
 * Version 0.0.1
 *
 * */


// set the parent directory to be used for Ardent Ani Library
// default: '/animations'

define('ani_base', '/animations');

/*
 * Functions to dynamically link base directory
 *
 * */

function get_ani_dir(){
	return get_stylesheet_directory() . ani_base;
}
function get_ani_uri(){
	return get_stylesheet_directory_uri() . ani_base;
}
function get_ani_json(){
	echo get_stylesheet_directory_uri() . ani_base . '/json';
}
function get_ani_json_uri(){
	return get_stylesheet_directory_uri() . ani_base . '/json';
}
/*
 * Begin loading resources
 *
 * */
require_once get_ani_dir() . '/lib/Meta.php';
require_once get_ani_dir() . '/lib/loader.php';
require_once get_ani_dir(). '/lib/helpers.php';
ani_wp_enqueue();
