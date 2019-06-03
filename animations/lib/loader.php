<?php

require_once get_ani_dir() . '/lib/ani_enqueue.php';
function ani_load_first(){
	require_once get_ani_dir() . '/styles.php';
	require_once get_ani_dir() . '/config/ani_js.php';
}
function ani_load_template($args_pass, $slug){
	$args = $args_pass;
	require_once get_ani_dir() . '/template/'. $slug;
}
function ani_load_js(){
	wp_enqueue_script('lottie-animations', get_ani_uri() . '/js/lottie_animations.js', null, null, true);
	wp_enqueue_script('animation-controllers', get_ani_uri() . '/js/animation_controllers.js', null, null, true);
	wp_enqueue_script('animation-inputs', get_ani_uri() . '/js/inputs.js',  null, null, true);
	wp_enqueue_script('animation-events', get_ani_uri() . '/js/events.js',  null, null, true);

}
