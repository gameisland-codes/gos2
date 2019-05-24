<!DOCTYPE html>
<html>
<head>
	<meta NAME=”ROBOTS” CONTENT=”NONE”>
	<title>GOS2|ガンズオブソウル2（Guns of Soul2）ニュース</title>
	<link rel="stylesheet" type="text/css" href="/css/news.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<?php if(PLATFORM == 'dmm') { include(__DIR__ . '/../adTag/dmm_gtm.php'); } ?>

	<div class="wrapper">
		<img src="/images/title_news.png" width="100%">
		<iframe src="//cms.gameisland.co.jp/gos2/<?php echo PLATFORM; ?>/<?php echo $article; ?>" allowtransparency="true" frameborder="0" scrolling="no" style="display: block;height: 1522px;width: 1280px;"></iframe>
	</div>
	<?php include(__DIR__ . '/../vendor/footer.php') ?>
</body>
</html>