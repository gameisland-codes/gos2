<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>GOS2|ガンズオブソウル2（Guns of Soul2）DMM</title>

	<?php
		include('vendor/meta.php');
		include('vendor/preload.php');
		include('vendor/cssjs.php');
	?>
	<link rel="stylesheet" type="text/css" href="/css/dmm.css">
	<script src="/js/dmm.js"></script>
</head>
<body>
	<?php
		include('adTag/dmm_gtm.php');
		include('vendor/dmm_nav.php');
	?>

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
</body>
</html>