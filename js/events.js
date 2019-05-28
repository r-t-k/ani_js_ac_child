const scrollTarget = postData.meta_fields.scroll_target[0];
jQuery(document).ready(function ($) {
	//set checkboxes

	var check0 = $('#group_0_switch');
	var check1 = $('#group_1_switch');
	var check2 = $('#group_2_switch');
	var check3 = $('#group_3_switch');
	var check4 = $('#group_4_switch');
	var check5 = $('#group_5_switch');
	var check6 = $('#group_6_switch');

	function set_default() {
		check0.prop('checked', true);
		check1.prop('checked', true);
		check2.prop('checked', true);
		check3.prop('checked', true);
		check4.prop('checked', true);
		check5.prop('checked', true);
		check6.prop('checked', true);
	}

	function disable_inputs() {
		check0.prop('disabled', true);
		check1.prop('disabled', true);
		check2.prop('disabled', true);
		check3.prop('disabled', true);
		check4.prop('disabled', true);
		check5.prop('disabled', true);
		check6.prop('disabled', true);
	}

	function enable_inputs() {
		check0.prop('disabled', false);
		check1.prop('disabled', false);
		check2.prop('disabled', false);
		check3.prop('disabled', false);
		check4.prop('disabled', false);
		check5.prop('disabled', false);
		check6.prop('disabled', false);
	}


	//
	function play_all() {
		play_group_0();
		setTimeout(play_group_1, 600);
		setTimeout(play_group_2, 1200);
		setTimeout(play_group_3, 1800);
		setTimeout(play_group_4, 2400);
		setTimeout(play_group_5, 3000);
		setTimeout(play_group_6, 3600);
		setTimeout(play_group_7, 4200);
		setTimeout(enable_inputs, 5200);

	}

	//logic
	disable_inputs();

	var is_fired = false;
	$.event.add(window, "scroll", function () {
		if (is_fired === false) {
			var hT = $(scrollTarget).offset().top;
			hH = $(scrollTarget).outerHeight();
			wH = $(window).height();
			wS = $(this).scrollTop();
			if (wS > (hT + hH - wH)) {
				console.info('Ani_js:: scroll target ' + scrollTarget + ' reached, shutting down auto run');
				set_default();
				play_all();

				is_fired = true;
			}
		}
	});
	var mobileToggle = $('#ani-controls-mobile-toggle');
	var mobileMenu = $('.switch_outer_wrap');


	mobileToggle.click(function () {
		console.log('toggle');
		mobileMenu.fadeToggle();
		var html = mobileToggle.html();
		var newHtml;
		if (html == "<i class=\"fas fa-plus\"></i>") {
			newHtml = "<i class=\"fas fa-minus\"></i>";
			mobileToggle.html(newHtml);
		}
		if (html == "<i class=\"fas fa-minus\"></i>") {
			newHtml = "<i class=\"fas fa-plus\"></i>";
			mobileToggle.html(newHtml);
		}


	})
}); // jQuery end
