<?php
function ani_dynamic_styles($args_pass){
	$args = $args_pass;
	?>
	<style>
		/*utils*/

		/*base*/
			#animation_and_controls {
				height: <?= $args['height'] ?>;

			}

			#ani-left-wrap {
				background: url('<?= wp_get_attachment_url($args['img_bg']) ?>'), linear-gradient(90deg, rgba(0, 71, 115, 1) 35%, rgba(0, 135, 195, 1) 100%);
				height: <?= $args['height'] ?>;

			}
			#animation_outer_wrap {
				height: <?= $args['height'] ?>;
			}

		/*laptop*/
			@media screen and  (max-width: 1600px) {

			}


		/*tablet*/
			@media screen and (max-width: 1000px) {
				#animation_outer_wrap {
					height: <?= $args['height'] ?>;
				}
				.switch_outer_wrap, #ani-controls-mobile-toggle{
					background: url('<?= wp_get_attachment_image_url('12570', 'full') ?>'), linear-gradient(90deg, rgba(0, 71, 115, 1) 35%, rgba(0, 135, 195, 1) 100%);
				}




			}

		/*mobile*/
		@media screen and (max-width: 600px) {

		}

		/*overrides*/



	</style>

<?php
}
