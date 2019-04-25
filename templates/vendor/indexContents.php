		<div class="top">
			<video preload="metadata" autoplay loop muted class="video_bg">
				<source src="videos/top.mp4" type="video/mp4">
				<source src="videos/top.webm" type="video/webm">
			</video>
			<div class="top_bg">
				<div class="top_chars_left"></div>
				<div class="top_chars_right"></div>
				<div class="top_frame"></div>
				<div class="top_contents">
					<nav>
						<a href="#">Top</a>
						<a href="#news">News</a>
						<a href="#story">Story</a>
						<a href="#character">Character</a>
						<a href="#system">System</a>
						<!-- <div class="menu_pointer"></div> -->
					</nav>
					<div class="logo"></div>

					<?php if (PLATFORM == 'dmm'): ?>
						<!--
						<div class="dmm_checkbox_area">
							<div class="dmm_checkbox_wrapper">
								<input type="checkbox" id="preRegPram1" name="preRegPram1" value="1" checked="checked">お知らせを受け取る
								<input type="checkbox" id="preRegPram2" name="preRegPram2" value="1" checked="checked">プロフィール等に表示する
							</div>
						</div>
						-->
						<div class="game_start_btn"></div>
					<?php else: ?>

						<div class="download_btns">
							<a href="https://itunes.apple.com/jp/app/id1453626249" target="_blank" class="app_store_btn"></a>
							<a href="https://play.google.com/store/apps/details?id=jp.gos2.gunsofsoul2" target="_blank" class="google_play_btn"></a>
						</div>

					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="contents_wrapper">
			<div class="banner_area">
				<div class="banners">

					<?php if(PLATFORM == 'dmm'): ?>

						<img src="/images/preregister_cp_banner_dmm.jpg">

					<?php else: ?>

						<img src="/images/preregister_cp_banner.jpg">

					<?php endif; ?>

				</div>
				<div class="banner_frame"></div>
				<div class="banner_clicker"></div>
			</div>
			<div class="movie_area">
				<div class="movie_wrapper">
					<div class="movie_thumbnail"></div>
					<div class="movie_frame">
						<div class="movie_play_btn"></div>
					</div>
				</div>
			</div>
			<div id="news">
				<div class="news_wrapper">
					<div class="news_list">
						<div class="news_tabs">
							<div class="news_tab_all active"></div>
							<div class="news_tab_notice"></div>
							<div class="news_tab_event"></div>
							<div class="news_tab_update"></div>
							<div class="news_tab_maintenance"></div>
						</div>
						<div class="news_list_wrapper">
							<div class="news_item">
								<div class="news_notice_label"></div>
								<div class="news_content">
									<a href="/news/example" target="_blank">お知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせお知らせ</a>
								</div>
								<div class="news_date">2019.05.01</div>
							</div>
							<div class="news_item">
								<div class="news_event_label"></div>
								<div class="news_content">
									<a href="/news/example" target="_blank">イベント</a>
								</div>
								<div class="news_date">2019.05.01</div>
							</div>
							<div class="news_item">
								<div class="news_update_label"></div>
								<div class="news_content">
									<a href="/news/example" target="_blank">アップデート</a>
								</div>
								<div class="news_date">2019.05.01</div>
							</div>
							<div class="news_item">
								<div class="news_maintenance_label"></div>
								<div class="news_content">
									<a href="/news/example" target="_blank">メンテナンス</a>
								</div>
								<div class="news_date">2019.05.01</div>
							</div>
							<!-- <iframe src="//cms.gameisland.co.jp/gos2/<?php echo PLATFORM; ?>/top_news_list.html" allowtransparency="true" frameborder="0" scrolling="no" style="display: block;height: 665px;width: 505px;"></iframe> -->
						</div>
						<a href="/news" target="_blank" class="news_more_btn"></a>
					</div>
					<div class="twitter_timeline">
						<div class="timeline_area">
							<a class="twitter-timeline" href="https://twitter.com/gunsofsoul2" height="453" width="363" data-chrome="nofooter,noborders" data-lang="ja">@gunsofsoul2</a>
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

				<?php if(PLATFORM == 'dmm'): ?>

					<div class="bottom_game_start_btn">
						<div class="game_start_btn"></div>
					</div>

				<?php endif; ?>
			</div>
		</div>
