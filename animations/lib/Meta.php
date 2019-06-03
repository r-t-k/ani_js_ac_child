<?php


namespace Ani;


class Meta {
	private $meta_queue = array();
	private $args_pass;
	private $ID;


	public function __construct($args_pass) {
		$this->args_pass = $args_pass;
		$this->ID = get_the_id();

	}
	public function register($args_field_name){
		$this->meta_queue[] = $args_field_name;
	}
	private function update_wp_meta( $field_key){
		$value = $this->args_pass[$field_key];
		update_post_meta( $this->ID, 'ani_'.$field_key, $value );
	}
	public function set_all(){
		foreach ($this->meta_queue as $arg_src){
			$this->update_wp_meta($arg_src);
		}
		update_post_meta( $this->ID, 'ani_key_map', $this->meta_queue);
	}
	public static function create($args_pass){
		return new Meta($args_pass);
	}
}

