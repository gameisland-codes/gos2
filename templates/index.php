<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>GOS2|ガンズオブソウル2（Guns of Soul2）公式サイト</title>

	<?php
		include('vendor/meta.php');
		include('vendor/preload.php');
	?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css?190515">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
	<script src="/js/scrollreveal.min.js"></script>
	<script src="/js/howler.min.js"></script>
	<script src="/js/layer.js"></script>
	<script src="/js/main.js?190515"></script>
</head>
<body>
	<div class="fixed_bg">
		<?php
			include('vendor/indexContents.php');
			include('vendor/footer.php');
			include('vendor/floatArea.php');
		?>
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
				area: ['800px', '600px'],
				closeBtn: true,
				shadeClose: false,
				content: msg,
			});
		});
	</script>

	<?php include('adTag/index.php'); ?>
</body>
</html>