<?php

function ani_js_json_dir() {
	return get_ani_json_uri();
}
function ani_wp_media($id){
	return wp_get_attachment_url($id);
}
function ani_wp_meta($id){
	$map = get_post_meta( $id , 'ani_key_map');
	$fields = array();
	foreach ($map[0] as $k){
		$fields[$k] = get_post_meta( $id , 'ani_'.$k);
	}
	return $fields;
}
