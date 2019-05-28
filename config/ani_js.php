<script>
	if (lottie) {
		console.info('Ani_js:: Lottie is loaded');
	} else {
		console.error('Ani_js:: Lottie is NOT loaded');
	}

	const apiUrlPostData = '<?=get_site_url() ?>/ani_json/post/<?= get_the_id() ?>';
	const apiUrlMedia = '<?=get_site_url() ?>/ani_json/media/';
	var aniJS = {
		postData: function postdata() {
			var data;
			jQuery.ajax({
				async: false,
				url  : apiUrlPostData, success: function (result) {
					data = result;
				}
			});
			return data;
		},
		media: function media(id) {
			var data;
			jQuery.ajax({
				async: false,
				url  : apiUrlMedia + id, success: function (result) {
					data = result.media_url;
				}
			});
			return data;
		},
	};
	const postData = aniJS.postData();
	console.log(postData);
	console.log(aniJS.media(12570));


</script>
