<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
// ALWAYS SET TO BEGIN ON THE THIRD URL STRING ($uri[2]) for max compatibility with wp install location
// FOR typical install on either subdomain or parent domain, to access api ex: https://domain.tld/api/ani_json
// FOR sub-directory install ex: https://domain.tld/wordpress/ani_json

$ani_query = array(
	'base' => $uri[2],
	'request_type' => $uri[3],
	'wp_object_id' => $uri[4],
);

/* GET Ani data from a post:
 *
 * URL: /ani_json/post/id
 *
 *  */
if ( $uri[2] === 'ani_json' && $uri[3] === 'post') {
	header( 'Content-Type: application/json' );
	$ani_wp_post_request = array(
		'animations_dir' => ani_js_json_dir(),
		'meta_fields' => ani_wp_meta($uri[4]),

	);


	echo json_encode($ani_wp_post_request);

	exit;
}
/* GET a wordpress media attachment url:
 *
 * URL: /ani_json/media/id
 *
 *  */

if ( $uri[2] === 'ani_json' && $uri[3] === 'media') {
	header( 'Content-Type: application/json' );
	$ani_wp_post_request = array(
		'media_url' => ani_wp_media($uri[4]),

	);
	echo json_encode($ani_wp_post_request);

	exit;
}
