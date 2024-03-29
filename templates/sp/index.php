<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>GOS2|ガンズオブソウル2（Guns of Soul2）公式サイト</title>

	<?php
		include(__DIR__ . '/../vendor/meta.php');
		include(__DIR__ . '/../vendor/preload.php');
	?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/css/sp/main.css?1906">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
	<script src="/js/scrollreveal.min.js"></script>
	<script src="/js/howler.min.js"></script>
	<script src="/js/layer.js"></script>
	<script src="/js/sp/main.js?1906"></script>
</head>
<body>
	<div class="fixed_bg"></div>
	<div class="wrapper">
		<div class="top">
			<div class="top_bg" title="GOS2|ガンズオブソウル2（Guns of Soul2）">
				<div class="top_char_1"></div>
				<div class="top_char_2"></div>
				<div class="top_char_3"></div>
				<div class="top_char_4"></div>
				<div class="top_char_5"></div>
				<div class="logo" title="GOS2|ガンズオブソウル2（Guns of Soul2）"></div>
				<div class="top_upper_frame"></div>
				<div class="top_lower_frame"></div>
				<div class="top_shadow"></div>
				<div class="movie_thumbnail"></div>
				<div class="movie_frame">
					<div class="movie_play_btn"></div>
				</div>
				<div class="download_btns">
					<a href="https://itunes.apple.com/jp/app/id1453626249" target="_blank" class="app_store_btn"></a>
					<a href="https://play.google.com/store/apps/details?id=jp.gos2.gunsofsoul2" target="_blank" class="google_play_btn"></a>
				</div>
			</div>
		</div>
		<div class="contents_wrapper">
			<div class="banner_area">
				<div class="banners">
					<img src="/images/banner.jpg" alt="GOS2|ガンズオブソウル2（Guns of Soul2)">
				</div>
				<div class="banner_frame"></div>
			</div>
			<div id="news">
				<div class="news_wrapper">
					<div class="news_list" title="GOS2|ガンズオブソウル2（Guns of Soul2）ニュース">

						<!-- <iframe src="//cms.gameisland.co.jp/gos2/official/top_news_list.html" allowtransparency="true" frameborder="0" scrolling="no"></iframe> -->
						<!-- <iframe src="//cms.gameisland.co.jp/gos2/<?php echo PLATFORM; ?>/top_news_v2.html" allowtransparency="true" frameborder="0" scrolling="no" style="display: block;height: 665px;width: 505px;"></iframe> -->
						<!-------------------------------------------------------------->
<?php echo file_get_contents('http://cms.gameisland.co.jp/gos2/' . PLATFORM . '/top_news_list_sp.ht');?>
						<!-------------------------------------------------------------->

						<a href="/news" target="_blank" class="news_more_btn"></a>
					</div>
					<div class="twitter_timeline" title="GOS2|ガンズオブソウル2（Guns of Soul2）公式Twitter">
						<div class="timeline_area">
							<a class="twitter-timeline" href="https://twitter.com/gunsofsoul2" data-height="380px" height="380px" data-width="450px" width="450px" data-chrome="nofooter,noborders" data-lang="ja">GOS2|ガンズオブソウル2（Guns of Soul2）公式Twitter@gunsofsoul2</a>
						</div>
					</div>
				</div>
			</div>
			<div id="story">
				<h2 class="story_header">
					<img class="story_header_left" src="/images/sp/story_header_left.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）ストーリー">
					<img class="story_header_right" src="/images/sp/story_header_right.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）ストーリー">
				</h2>
				<div class="story_contents">
					<img class="story_content_1" src="/images/sp/story_content_1.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）ストーリー">
					<img class="story_content_2" src="/images/sp/story_content_2.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）ストーリー">
					<img class="story_content_3" src="/images/sp/story_content_3.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）ストーリー">
					<img class="story_content_4" src="/images/sp/story_content_4.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）ストーリー">
				</div>
			</div>
			<div id="character">
				<h2 class="char_header">
					<img class="char_header_left" src="/images/sp/char_header_left.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）キャラクター">
					<img class="char_header_right" src="/images/sp/char_header_right.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）キャラクター">
				</h2>
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
				<h2 class="system_header">
					<img class="system_header_left" src="/images/sp/system_header_left.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）システム">
					<img class="system_header_right" src="/images/sp/system_header_right.png" alt="GOS2|ガンズオブソウル2（Guns of Soul2）システム">
				</h2>
				<div class="system_contents">
					<div class="system_frame"></div>
					<div class="system_char"></div>
					<div class="system_cards_area">
						<div class="system_card_upper"></div>
						<div class="system_card_lower"></div>
					</div>
					<div class="system_btn_area">
						<div class="system_left_btn"></div>
						<div class="system_right_btn"></div>
					</div>
				</div>
				<div class="scroll_to_top_btn_area">
					<a href="#" class="scroll_to_top_btn"></a>
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

	<?php include(__DIR__ . '/../adTag/index.php'); ?>
</body>
</html>