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
<?php echo file_get_contents('http://cms.gameisland.co.jp/gos2/' . PLATFORM . '/news_list_page_sp.ht');?>
			</div>
		</div>
	</div>
	<?php include(__DIR__ . '/../../vendor/footer.php') ?>
</body>
</html>