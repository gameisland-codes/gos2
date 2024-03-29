<!DOCTYPE html>
<html>
<head>
	<meta NAME=”ROBOTS” CONTENT=”NONE”>
	<title>GOS2|ガンズオブソウル2（Guns of Soul2）ニュース</title>
	<link rel="stylesheet" type="text/css" href="/css/news.css">
</head>
<body>

	<?php if(PLATFORM == 'dmm') { include(__DIR__ . '/../adTag/dmm_gtm.php'); } ?>

	<div class="wrapper">
		<img src="/images/title_news.png" width="100%">
		<div class="main_contents">
			<div class="main_contents_wrapper">
				<div class="breadcrumbs">
					<p><a href="/">トップ</a>　＞　<a href="/news">ニュース</a></p>
				</div>
				<iframe src="//cms.gameisland.co.jp/gos2/<?php echo PLATFORM; ?>/news_list_page.html" allowtransparency="true" frameborder="0" scrolling="no" style="display: block;height: 1333px;width: 1280px;"></iframe>
			</div>
		</div>
	</div>
	<?php include(__DIR__ . '/../vendor/footer.php') ?>
</body>
</html>
