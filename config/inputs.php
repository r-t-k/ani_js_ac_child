<script>
	//SWITCH CONTROLS
	//GROUP 0
	/*var switch_0 = document.getElementById("group_0_switch");
	switch_0.addEventListener("change", function () {
		if (this.checked) {
			play_group_0();
		} else {
			reverse_group_0();
		}

	});*/
	//GROUP 1
	/*var switch_1 = document.getElementById("group_1_switch");
	switch_1.addEventListener("change", function () {
		if (this.checked) {
			play_group_1();
		} else {
			reverse_group_1();
		}

	});*/
	//GROUP 2
	var switch_2 = document.getElementById("group_2_switch");
	switch_2.addEventListener("change", function () {
		if (this.checked) {
			setTimeout(play_group_2, 500);
		} else {
			setTimeout(reverse_group_2, 500);
		}

	});
	//GROUP 3
	var switch_3 = document.getElementById("group_3_switch");
	switch_3.addEventListener("change", function () {
		if (this.checked) {
			setTimeout(play_group_3, 500);

		} else {
			setTimeout(reverse_group_3, 500);
		}

	});
	//GROUP 4
	/*var switch_4 = document.getElementById("group_4_switch");
	switch_4.addEventListener("change", function () {
		if (this.checked) {
			play_group_4();
		} else {
			reverse_group_4();
		}

	});*/

	//GROUP 6
	var switch_6 = document.getElementById("group_6_switch");
	switch_6.addEventListener("change", function () {
		if (this.checked) {
			setTimeout(play_group_6, 500);

		} else {
			setTimeout(reverse_group_6, 500);
		}

	});
	//GROUP 5
	var switch_5 = document.getElementById("group_5_switch");
	switch_5.addEventListener("change", function () {
		if (this.checked) {
			setTimeout(play_group_5, 500);

		} else {
			setTimeout(reverse_group_5, 500);
		}

	});


</script>
