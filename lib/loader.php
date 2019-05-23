<?php

require_once get_ani_dir() . '/lib/ani_enqueue.php';
function ani_load_first(){
	require_once get_ani_dir() . '/styles.php';
}
function ani_load_template($args_pass, $slug){
	$args = $args_pass;
	require_once get_ani_dir() . '/template/'. $slug;
}
function ani_load_js($args_pass){
	$args = $args_pass;
	require_once get_ani_dir() . '/config/ani_js.php';
	require_once get_ani_dir() . '/config/lottie_animations.php';
	require_once get_ani_dir() . '/config/animation_controllers.php';
	require_once get_ani_dir() . '/config/inputs.php';
	require_once get_ani_dir() . '/config/events.php';
}
