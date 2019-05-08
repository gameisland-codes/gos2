<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>GOS2</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3, minimal-ui, user-scalable=yes">
	<meta name="keywords" content="gos2" />
	<meta name="description" content="ガンズオブソウル2（GOS2）「ガンズオブソウル2（Guns of Soul2）」。公式サイト." />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/css/sp/main.css<?php echo '?'.time() ?>">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
	<script src="/js/scrollreveal.min.js"></script>
	<script src="/js/howler.min.js"></script>
	<script src="/js/layer.js"></script>
	<!-- <script src="/js/main.js"></script> -->
	<script src="/js/sp/main.js<?php echo '?'.time() ?>"></script>
</head>
<body>
	<div class="fixed_bg"></div>
	<div class="wrapper">
		<div class="top">
			<div class="top_bg">
				<div class="top_char_1"></div>
				<div class="top_char_2"></div>
				<div class="top_char_3"></div>
				<div class="top_char_4"></div>
				<div class="top_char_5"></div>
				<div class="logo"></div>
				<div class="top_upper_frame"></div>
				<div class="top_lower_frame"></div>
				<div class="top_shadow"></div>
				<div class="movie_thumbnail"></div>
				<div class="movie_frame">
					<div class="movie_play_btn"></div>
				</div>
				<div class="preregister_btn"></div>
			</div>
		</div>
		<div class="contents_wrapper">
			<div class="banner_area">
				<div class="banners">
					<img src="/images/preregister_cp_banner.jpg">
				</div>
				<div class="banner_frame"></div>
			</div>
			<div id="news">
				<div class="news_wrapper">
					<div class="news_list">
						<iframe src="//cms.gameisland.co.jp/gos2/official/top_news_list.html" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
					</div>
					<div class="twitter_timeline">
						<div class="timeline_area">
							<a class="twitter-timeline" href="https://twitter.com/gunsofsoul2" data-height="380px" height="380px" data-width="450px" width="450px" data-chrome="nofooter,noborders" data-lang="ja">@gunsofsoul2</a>
						</div>
					</div>
				</div>
			</div>
			<div id="story">
				<div class="story_header">
					<div class="story_header_left"></div>
					<div class="story_header_right"></div>
				</div>
				<div class="story_contents">
					<div class="story_content_1"></div>
					<div class="story_content_2"></div>
					<div class="story_content_3"></div>
					<div class="story_content_4"></div>
				</div>
			</div>
			<div id="character">
				<div class="char_header">
					<div class="char_header_left"></div>
					<div class="char_header_right"></div>
				</div>
				<div class="char_bg"></div>
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<!--INCLUDE-->
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
			<div id="system">
				<div class="system_header">
					<div class="system_header_left"></div>
					<div class="system_header_right"></div>
				</div>
				<div class="system_contents">
					<div class="system_frame"></div>
					<div class="system_char"></div>
					<div class="system_cards_area">
						<div class="system_card_upper"></div>
						<div class="system_card_lower"></div>
						<!--PRELOAD-->
						<div style="display: none;">
							<img src="/images/system_card_1_on.png">
							<img src="/images/system_card_2_on.png">
							<img src="/images/system_card_3_on.png">
							<img src="/images/system_card_4_on.png">
							<img src="/images/system_card_5_on.png">
							<img src="/images/system_card_6_on.png">
							<img src="/images/system_card_7_on.png">
							<img src="/images/system_card_1_off.png">
							<img src="/images/system_card_2_off.png">
							<img src="/images/system_card_3_off.png">
							<img src="/images/system_card_4_off.png">
							<img src="/images/system_card_5_off.png">
							<img src="/images/system_card_6_off.png">
							<img src="/images/system_card_7_off.png">
						</div>
						<!--PRELOAD-->
					</div>
					<div class="system_btn_area">
						<div class="system_left_btn"></div>
						<div class="system_right_btn"></div>
					</div>
				</div>
			</div>
		</div>

		<?php include(__DIR__ . '/../vendor/footer.php'); ?>
	</div>
	<div class="menu_btn"></div>
	<div class="menu_modal">
		<div class="menu_close_btn"></div>
		<div class="menu_btns">
			<a href="#" class="menu_selector_bg"><img src="/images/sp/menu_top_btn.png"></a>
			<a href="#news" class="menu_selector_bg"><img src="/images/sp/menu_news_btn.png"></a>
			<a href="#story" class="menu_selector_bg"><img src="/images/sp/menu_story_btn.png"></a>
			<a href="#character" class="menu_selector_bg"><img src="/images/sp/menu_char_btn.png"></a>
			<a href="#system" class="menu_selector_bg"><img src="/images/sp/menu_system_btn.png"></a>
			<a href="https://twitter.com/gunsofsoul2" target="_blank" class="menu_twitter_btn"></a>
		</div>
	</div>

<script src="//platform.gameisland.co.jp/js/public/messenger.js" type="text/javascript"></script>
<script type="text/javascript">
var messenger = new Messenger('parentMT', 'gos2');
messenger.listen(function(msg){
	layer.closeAll();
	layer.open({
		type: 2,
		title: false,
		skin: 'layui-layer-none',
		area: ['90%', '80%'],
		closeBtn: true,
		shadeClose: true,
		content: msg,
	});
});
</script>
</body>
</html>