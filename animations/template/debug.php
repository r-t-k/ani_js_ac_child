<script>
jQuery(document).ready(function ($) {
	//declarations
	const apiUrl = 'https://dev.it.ardentcreative.com/trwd-ani-debug/ani_json/post/12540';
	var ref = $('#animation_and_controls');
	var parent = ref.parent();
	var test = postData.meta_fields.height;
	var debug = '<div id="debug"><h1>' + test +'</h1></div>';

	console.log(postData);
	console.log(aniJS.media(12570));
	//logic
	parent.append(debug);





}); // jQuery end

</script>

