<!DOCTYPE html>
<html>
<head>
	<meta NAME=”ROBOTS” CONTENT=”NONE”>
	<title>ゲイムガイド</title>
	<link rel="stylesheet" type="text/css" href="/css/support.css">
</head>
<body>
	<div class="wrapper">
		<img src="/images/title_gameguide.png" width="100%">
		<div style="padding: 10px;">
<?php echo(file_get_contents('http://cms.gameisland.co.jp/gos2/' . PLATFORM . '/gameguide.html')); ?>
		</div>
		<?php include(__DIR__ . '/../vendor/backToTopBtn.php'); ?>
	</div>
	<?php include(__DIR__ . '/../vendor/footer.php'); ?>
</body>
</html>