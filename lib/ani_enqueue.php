<?php
function ani_wp_enqueue(){
	add_action('wp_enqueue_scripts', function(){
		wp_enqueue_script('lottie','https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.3/lottie.min.js', null, '5.5.3');
	}, 99);
	add_action( 'wp_print_styles', function (){
		wp_enqueue_style( 'ardent-ani-utils', get_ani_uri() . '/css/utils.css');
		wp_enqueue_style( 'ardent-ani-base', get_ani_uri() . '/css/base.css');
		wp_enqueue_style( 'ardent-ani-laptop', get_ani_uri() . '/css/laptop.css');
		wp_enqueue_style( 'ardent-ani-tablet', get_ani_uri() . '/css/tablet.css');
		wp_enqueue_style( 'ardent-ani-mobile', get_ani_uri() . '/css/mobile.css');
		wp_enqueue_style( 'ardent-ani-overrides', get_ani_uri() . '/css/overrides.css');
	}, 99);
	add_action('wp_loaded', function(){
			require_once get_ani_dir() . '/lib/ani_js_api_functions.php';
			require_once get_ani_dir() . '/lib/ani_js_api.php';
		});
}
