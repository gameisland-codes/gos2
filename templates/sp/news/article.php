<!DOCTYPE html>
<html>
<head>
	<meta NAME=”ROBOTS” CONTENT=”NONE”>
	<title>GOS2 | ニュース</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3, minimal-ui, user-scalable=yes">
	<link rel="stylesheet" type="text/css" href="/css/sp/news.css<?php echo '?'.time() ?>">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header_img"></div>
<?php echo file_get_contents('http://cms.gameisland.co.jp/gos2/' . PLATFORM . '/sp-' . $article);?>
	</div>
	<?php include(__DIR__ . '/../../vendor/footer.php') ?>
</body>
</html>