		<div class="contents_wrapper">
			<div class="banner_area">
				<div class="banners">

					<?php if($platform == 'dmm'): ?>

						<img src="/images/preregister_cp_banner_dmm.jpg">

					<?php else: ?>

						<img src="/images/preregister_cp_banner.jpg">

					<?php endif; ?>

				</div>
				<div class="banner_frame"></div>
				<div class="banner_clicker"></div>
			</div>
			<div class="movie_area">
				<div class="movie_frame">
					<div class="movie_play_btn"></div>
				</div>
			</div>
			<div id="news">
				<div class="news_wrapper">
					<div class="news_list">
						<iframe src="//cms.gameisland.co.jp/gos2/<?php echo $platform; ?>/top_news_list.html" allowtransparency="true" frameborder="0" scrolling="no" style="display: block;height: 665px;width: 505px;"></iframe>
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
			</div>
		</div>
