<?php
function ani_inline_start($args_pass) {
	$args = $args_pass;
	ani_load_first();
	ani_dynamic_styles($args);
}
function ani_inline_end($args_pass){
	$args = $args_pass;
	ani_load_js($args);
}
