<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>GOS2</title>

	<?php
		include(__DIR__ . '/../vendor/meta.php');
		include(__DIR__ . '/../vendor/preload.php');
	?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/css/sp/main.css?<?php echo time();?>">
	<!-- <link rel="stylesheet" type="text/css" href="/css/sp/main.css?1905"> -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
	<script src="/js/scrollreveal.min.js"></script>
	<script src="/js/howler.min.js"></script>
	<script src="/js/layer.js"></script>
	<script src="/js/sp/main.js?1905"></script>
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

						<!-- <iframe src="//cms.gameisland.co.jp/gos2/official/top_news_list.html" allowtransparency="true" frameborder="0" scrolling="no"></iframe> -->
						<!-- <iframe src="//cms.gameisland.co.jp/gos2/<?php echo PLATFORM; ?>/top_news_v2.html" allowtransparency="true" frameborder="0" scrolling="no" style="display: block;height: 665px;width: 505px;"></iframe> -->
						<!-------------------------------------------------------------->
						<div class="news_tabs">
						  <div class="news_tab_all active" onclick="javascript:tabSwitch('all');"></div>
						  <div class="news_tab_notice" onclick="javascript:tabSwitch('notice');"></div>
						  <div class="news_tab_event" onclick="javascript:tabSwitch('event');"></div>
						  <div class="news_tab_update" onclick="javascript:tabSwitch('update');"></div>
						  <div class="news_tab_maintenance" onclick="javascript:tabSwitch('maintenance');"></div>
						</div>
						<div class="news_list_wrapper" id="all" name="all">

						  <div class="news_item">
						    <div class="news_notice_label"></div>
						    <div class="news_content">
						      <a href="https://www.gos2.jp/news/2019-05-post-1.html" target="_blank">ランダムアイテム出現確率</a>
						    </div>
						    <div class="news_date">2019.05.07</div>
						  </div>

						  <div class="news_item">
						    <div class="news_event_label"></div>
						    <div class="news_content">
						      <a href="https://www.gos2.jp/news/2019-04-twitter2.html" target="_blank">Twitterキャンペーン第2弾</a>
						    </div>
						    <div class="news_date">2019.04.23</div>
						  </div>

						  <div class="news_item">
						    <div class="news_event_label"></div>
						    <div class="news_content">
						      <a href="https://www.gos2.jp/news/2019-04-twitter1.html" target="_blank">Twitterキャンペーン第1弾</a>
						    </div>
						    <div class="news_date">2019.04.15</div>
						  </div>

						  <div class="news_item">
						    <div class="news_event_label"></div>
						    <div class="news_content">
						      <a href="https://www.gos2.jp/news/2019-04-post.html" target="_blank">事前登録を開始しました</a>
						    </div>
						    <div class="news_date">2019.04.15</div>
						  </div>

						  <div class="news_item">
						    <div class="news_notice_label"></div>
						    <div class="news_content">
						      <a href="https://www.gos2.jp/news/2019-04-guns-of-soul2-2-open.html" target="_blank">公式サイトをOPENしました</a>
						    </div>
						    <div class="news_date">2019.04.15</div>
						  </div>

						</div>

						<div class="news_list_wrapper" style="display: none;" id="notice" name="notice">

						    <div class="news_item">
						      <div class="news_notice_label"></div>
						      <div class="news_content">
						        <a href="https://www.gos2.jp/news/2019-05-post-1.html" target="_blank">ランダムアイテム出現確率</a>
						      </div>
						      <div class="news_date">2019.05.07</div>
						    </div>

						    <div class="news_item">
						      <div class="news_notice_label"></div>
						      <div class="news_content">
						        <a href="https://www.gos2.jp/news/2019-04-guns-of-soul2-2-open.html" target="_blank">公式サイトをOPENしました</a>
						      </div>
						      <div class="news_date">2019.04.15</div>
						    </div>

						</div>

						<div class="news_list_wrapper" style="display: none;" id="event" name="event">

						    <div class="news_item">
						      <div class="news_event_label"></div>
						      <div class="news_content">
						        <a href="https://www.gos2.jp/news/2019-04-twitter2.html" target="_blank">Twitterキャンペーン第2弾</a>
						      </div>
						      <div class="news_date">2019.04.23</div>
						    </div>

						    <div class="news_item">
						      <div class="news_event_label"></div>
						      <div class="news_content">
						        <a href="https://www.gos2.jp/news/2019-04-twitter1.html" target="_blank">Twitterキャンペーン第1弾</a>
						      </div>
						      <div class="news_date">2019.04.15</div>
						    </div>

						    <div class="news_item">
						      <div class="news_event_label"></div>
						      <div class="news_content">
						        <a href="https://www.gos2.jp/news/2019-04-post.html" target="_blank">事前登録を開始しました</a>
						      </div>
						      <div class="news_date">2019.04.15</div>
						    </div>

						</div>

						<div class="news_list_wrapper" style="display: none;" id="update" name="update">

						</div>

						<div class="news_list_wrapper" style="display: none;" id="maintenance" name="maintenance">

						</div>

						<script language="JavaScript">
						  function tabSwitch(_tabName) {
							  var _tabs = document.getElementsByClassName("news_tabs")[0].children;
							  var _currentTab = document.getElementsByClassName('news_tab_' + _tabName)[0];
							  var _newsWrapper = document.getElementsByClassName('news_list_wrapper');
							  var i;

							  for (i = 0; i < _tabs.length; i++) {
							    _tabs[i].classList.remove("active");
						    }

							  _currentTab.classList.add("active");

							  for (i = 0; i < _newsWrapper.length; i++) {
							    _newsWrapper[i].style.display = 'none';
							  }

							  document.getElementById(_tabName).style.display = '';

						  }
						</script>
						<!-------------------------------------------------------------->

						<a href="/news" target="_blank" class="news_more_btn"></a>
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
</body>
</html>