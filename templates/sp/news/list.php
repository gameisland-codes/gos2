<!DOCTYPE html>
<html>
<head>
	<meta NAME=”ROBOTS” CONTENT=”NONE”>
	<title>GOS2 | ニュース</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3, minimal-ui, user-scalable=yes">
	<link rel="stylesheet" type="text/css" href="/css/sp/news.css<?php echo '?'.time() ?>">
</head>
<body>
	<div class="wrapper">
		<div class="header_img"></div>
		<div class="main_contents">
			<div class="main_contents_wrapper">
				<div class="breadcrumbs">
					<p><a href="/">トップ</a>　＞　<a href="/news">ニュース</a></p>
				</div>

				<!-- <iframe src="//cms.gameisland.co.jp/gos2/<?php echo PLATFORM; ?>/news_list_page.html" allowtransparency="true" frameborder="0" scrolling="no" style="display: block;height: 1500px;width: 1280px;"></iframe> -->
				<!-------------------------------------------------------------->
				<div class="tabs">
				  <div class="tab_frame active" onclick="javascript:tabSwitch(this, 'all');"><p>すべて</p></div>
				  <div class="tab_frame" onclick="javascript:tabSwitch(this, 'notice');"><p>お知らせ</p></div>
				  <div class="tab_frame" onclick="javascript:tabSwitch(this, 'event');"><p>イベント</p></div>
				  <div class="tab_frame" onclick="javascript:tabSwitch(this, 'update');"><p>アップデート</p></div>
				  <div class="tab_frame" onclick="javascript:tabSwitch(this, 'maintenance');"><p>メンテナンス</p></div>
				</div>
				<div class="chars_frame">
				  <div class="upper_char"></div>
				  <div class="lower_char"></div>
				</div>
				<div class="main_frame">
				  <div class="article_lines"></div>
				  <div class="news_list" id="all" name="all">
				    
				      <div class="news_item">
				        <div class="news_notice_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-05-post-1.html" target="_blank">ランダムアイテム出現確率</a>
				        </div>
				        <div class="news_date">2019.05.07</div>
				        <hr class="news_line">
				      </div>
				    
				      <div class="news_item">
				        <div class="news_event_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-04-twitter2.html" target="_blank">Twitterキャンペーン第2弾</a>
				        </div>
				        <div class="news_date">2019.04.23</div>
				        <hr class="news_line">
				      </div>
				    
				      <div class="news_item">
				        <div class="news_event_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-04-twitter1.html" target="_blank">Twitterキャンペーン第1弾</a>
				        </div>
				        <div class="news_date">2019.04.15</div>
				        <hr class="news_line">
				      </div>
				    
				      <div class="news_item">
				        <div class="news_event_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-04-post.html" target="_blank">事前登録を開始しました</a>
				        </div>
				        <div class="news_date">2019.04.15</div>
				        <hr class="news_line">
				      </div>
				    
				      <div class="news_item">
				        <div class="news_notice_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-04-guns-of-soul2-2-open.html" target="_blank">公式サイトをOPENしました</a>
				        </div>
				        <div class="news_date">2019.04.15</div>
				        <hr class="news_line">
				      </div>
				    
				  </div>
				
				  <div class="news_list" style="display:none;" id="notice" name="notice">
				    
				      <div class="news_item">
				        <div class="news_notice_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-05-post-1.html" target="_blank">ランダムアイテム出現確率</a>
				        </div>
				        <div class="news_date">2019.05.07</div>
				        <hr class="news_line">
				      </div>
				    
				      <div class="news_item">
				        <div class="news_notice_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-04-guns-of-soul2-2-open.html" target="_blank">公式サイトをOPENしました</a>
				        </div>
				        <div class="news_date">2019.04.15</div>
				        <hr class="news_line">
				      </div>
				    
				  </div>
				
				  <div class="news_list" style="display:none;" id="event" name="event">
				    
				      <div class="news_item">
				        <div class="news_event_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-04-twitter2.html" target="_blank">Twitterキャンペーン第2弾</a>
				        </div>
				        <div class="news_date">2019.04.23</div>
				        <hr class="news_line">
				      </div>
				    
				      <div class="news_item">
				        <div class="news_event_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-04-twitter1.html" target="_blank">Twitterキャンペーン第1弾</a>
				        </div>
				        <div class="news_date">2019.04.15</div>
				        <hr class="news_line">
				      </div>
				    
				      <div class="news_item">
				        <div class="news_event_label"></div>
				        <div class="news_content">
				          <a href="https://www.gos2.jp/news/2019-04-post.html" target="_blank">事前登録を開始しました</a>
				        </div>
				        <div class="news_date">2019.04.15</div>
				        <hr class="news_line">
				      </div>
				    
				  </div>
				
				  <div class="news_list" style="display:none;" id="update" name="update">
				    
				  </div>
				
				  <div class="news_list" style="display:none;" id="maintenance" name="maintenance">
				    
				  </div>
				  <!-- <div class="more_btn"></div> -->
				</div>
				<script language="JavaScript">
					function tabSwitch(_this, _tabName) {
						var _tabs = document.getElementsByClassName("tab_frame");
						var _newsWrapper = document.getElementsByClassName('news_list');
						var i;
				
						for (i = 0; i < _tabs.length; i++) {
							_tabs[i].classList.remove("active");
						}
					  _this.classList.add("active");
				
						for (i = 0; i < _newsWrapper.length; i++) {
							_newsWrapper[i].style.display = 'none';
						}
						document.getElementById(_tabName).style.display = '';
					}
				</script>
				<!-------------------------------------------------------------->

			</div>
		</div>
	</div>
	<?php include(__DIR__ . '/../../vendor/footer.php') ?>
</body>
</html>