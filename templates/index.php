<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>GOS2|ガンズオブソウル2（Guns of Soul2）公式サイト</title>

	<?php
		include('vendor/meta.php');
		include('vendor/preload.php');
		include('vendor/cssjs.php');
	?>

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