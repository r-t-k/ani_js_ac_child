<?php
	//declare lottie animations here
?>

<script>
	//group 0 static
	var lines = lottie.loadAnimation({
		container: document.getElementById('ani-layer-1'), // Required
		path     : '<?= get_ani_json() . '/lines.json' ?>', // Required
		renderer : 'svg', // Required
		loop     : false, // Optional
		autoplay : false, // Optional
		name     : "Lines", // Name for future reference. Optional.
		rendererSettings: {
			preserveAspectRatio: 'xMaxYMax meet'
		},
	});
	//group 1 static
	var trees = lottie.loadAnimation({
		container: document.getElementById('ani-layer-6'), // Required
		path     : '<?= get_ani_json() . '/trees.json' ?>', // Required
		renderer : 'svg', // Required
		loop     : false, // Optional
		autoplay : false, // Optional
		name     : "Trees", // Name for future reference. Optional.
		rendererSettings: {
			preserveAspectRatio: 'xMaxYMax meet'
		},
	});

	//group 2
	var service = lottie.loadAnimation({
		container: document.getElementById('ani-layer-3'), // Required
		path     : '<?= get_ani_json() . '/service_area.json' ?>', // Required
		renderer : 'svg', // Required
		loop     : false, // Optional
		autoplay : false, // Optional
		name     : "Service", // Name for future reference. Optional.
		rendererSettings: {
			preserveAspectRatio: 'xMaxYMax meet'
		},
	});
	// group 3
	var taxing = lottie.loadAnimation({
		container: document.getElementById('ani-layer-4'), // Required
		path     : '<?= get_ani_json() . '/taxing.json' ?>', // Required
		renderer : 'svg', // Required
		loop     : false, // Optional
		autoplay : false, // Optional
		name     : "Taxing", // Name for future reference. Optional.
		rendererSettings: {
			preserveAspectRatio: 'xMaxYMax meet'
		},
	});

	//group 4 static
	var roads = lottie.loadAnimation({
		container: document.getElementById('ani-layer-5'), // Required
		path     : '<?= get_ani_json() . '/roads.json' ?>', // Required
		renderer : 'svg', // Required
		loop     : false, // Optional
		autoplay : false, // Optional
		name     : "Roads", // Name for future reference. Optional.
		rendererSettings: {
			preserveAspectRatio: 'xMaxYMax meet'
		},
	});



	// group 6
	var lakes = lottie.loadAnimation({
		container: document.getElementById('ani-layer-8'), // Required
		path     : '<?= get_ani_json() . '/lakes.json' ?>', // Required
		renderer : 'svg', // Required
		loop     : false, // Optional
		autoplay : false, // Optional
		name     : "Lakes", // Name for future reference. Optional.
		rendererSettings: {
			preserveAspectRatio: 'xMaxYMax meet'
		},
	});
	// group 5
	var pipeline = lottie.loadAnimation({
		container: document.getElementById('ani-layer-7'), // Required
		path     : '<?= get_ani_json() . '/pipeline.json' ?>', // Required
		renderer : 'svg', // Required
		loop     : false, // Optional
		autoplay : false, // Optional
		name     : "Pipeline", // Name for future reference. Optional.
		rendererSettings: {
			preserveAspectRatio: 'xMaxYMax meet'
		},
	});
	// group 7
	var labels = lottie.loadAnimation({
		container: document.getElementById('ani-layer-9'), // Required
		path     : '<?= get_ani_json() . '/labels.json' ?>', // Required
		renderer : 'svg', // Required
		loop     : false, // Optional
		autoplay : false, // Optional
		name     : "Labels", // Name for future reference. Optional.
		rendererSettings: {
			preserveAspectRatio: 'xMaxYMax meet'
		},
	});
	</script>
