<!DOCTYPE html>
<html>
<head>
	<meta NAME=”ROBOTS” CONTENT=”NONE”>
	<title>GOS2 | ニュース</title>
	<link rel="stylesheet" type="text/css" href="/css/news.css<?php echo '?'.time() ?>">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<img src="/images/title_news.png" width="100%">
		<div class="main_contents_article">
			<div class="main_contents_wrapper">
				<div class="breadcrumbs">
					<p>トップ　＞　ニュース　＞　aaaaaaaa</p>
				</div>
				<div class="tabs">
					<div class="tab_frame active"><p>すべて</p></div>
					<div class="tab_frame"><p>お知らせ</p></div>
					<div class="tab_frame"><p>イベント</p></div>
					<div class="tab_frame"><p>アップデート</p></div>
					<div class="tab_frame"><p>メンテナンス</p></div>
				</div>
				<div class="chars_frame">
					<div class="bottom_char"></div>
				</div>
				<div class="main_frame">
					<div class="article_area">
						<div class="article_body">
							
							TODO

							This is <?php echo $article; ?> article.

						</div>
					</div>
					<div class="article_underline"></div>
					<div class="pagenation_area">
						<div class="pagenation_left">
							<p><img src="/images/news_arrow_left.png"> イベントxxxxx1</p>
						</div>
						<div class="pagenation_right">
							<p>イベントxxxxx3 <img src="/images/news_arrow_right.png"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include(__DIR__ . '/../vendor/footer.php') ?>
</body>
</html>