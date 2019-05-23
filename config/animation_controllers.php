<script>
	//control functions
	let anim = lottie;
	//GROUP 1 - static group no toggle
	function play_group_0() {
		anim.setSpeed(1);
		anim.setDirection(1);
		lines.goToAndPlay(1, true);
	}

	function reverse_group_0() {
		anim.setSpeed(2.5);
		anim.setDirection(-1);
		lines.play();
	}

	//GROUP 1 - static group no toggle
	function play_group_1() {
		anim.setSpeed(1);
		anim.setDirection(1);
		trees.goToAndPlay(1, true);
	}

	function reverse_group_1() {
		anim.setSpeed(2.5);
		anim.setDirection(-1);
		trees.play();
	}

	//GROUP 2
	function play_group_2() {
		anim.setSpeed(1);
		anim.setDirection(1);
		service.goToAndPlay(1, true);

	}

	function reverse_group_2() {
		anim.setSpeed(2.5);
		anim.setDirection(-1);
		service.play();

	}

	//GROUP 3
	function play_group_3() {
		anim.setSpeed(1);
		anim.setDirection(1);
		taxing.goToAndPlay(1, true);

	}

	function reverse_group_3() {
		anim.setSpeed(2.5);
		anim.setDirection(-1);
		taxing.play();

	}

	//GROUP 4 - static group no toggle
	function play_group_4() {
		anim.setSpeed(1);
		anim.setDirection(1);
		roads.goToAndPlay(1, true);
	}

	function reverse_group_4() {
		anim.setSpeed(2.5);
		anim.setDirection(-1);
		roads.play();
	}

	//GROUP 5
	function play_group_5() {
		anim.setSpeed(1);
		anim.setDirection(1);
		pipeline.goToAndPlay(1, true);

	}

	function reverse_group_5() {
		anim.setSpeed(2.5);
		anim.setDirection(-1);
		pipeline.play();

	}

	//GROUP 6
	function play_group_6() {
		anim.setSpeed(1);
		anim.setDirection(1);
		lakes.goToAndPlay(1, true);

	}

	function reverse_group_6() {
		anim.setSpeed(2.5);
		anim.setDirection(-1);
		lakes.play();

	}
	//GROUP 7
	function play_group_7() {
		anim.setSpeed(1);
		anim.setDirection(1);
		labels.goToAndPlay(1, true);

	}

	function reverse_group_7() {
		anim.setSpeed(2.5);
		anim.setDirection(-1);
		labels.play();
	}
</script>
