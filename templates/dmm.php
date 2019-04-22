<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>GOS2</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/dmm.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
	<script src="/js/scrollreveal.min.js"></script>
	<script src="/js/layer.js"></script>
	<script src="/js/main.js"></script>
	<script src="/js/dmm.js"></script>
</head>
<body>
	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-N5P9PT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-N5P9PT');</script>	
	<!-- End Google Tag Manager -->
	<!-- [[ start of "dmm_ntgnavi" ]] -->
	<div id="dmm_ntgnavi">
		<ul class="navi_left">
			<li class="dmm_top mg-l12"><a href="http://www.dmm.com/"><img src="https://www.dmm.com/images/netgame/navi/dmm_logo.gif" alt="DMM.com"></a></li>
			<li class="ntg_top"><a href="http://www.dmm.com/netgame/"><span>DMM GAMESトップ</span></a></li>
			<li class="ntg_poi"><a href="https://point.dmm.com/choice/pay?basket_service_type=freegame" target="_blank"><span>ポイントチャージ</span></a></li>
		</ul>
		<ul class="navi_right">
			<li><a href="http://www.dmm.com/netgame/top/guide/startguide_html/=/ch_navi=/" class="arrow">初めての方</a></li>
		</ul>
		<div class="clear"></div>
	</div>
	<!-- [[ end of "dmm_ntgnavi" ]] -->

	<div class="fixed_bg">
		<div class="top">
			<video preload="metadata" autoplay loop muted class="video_bg">
				<source src="videos/top.mp4" type="video/mp4">
				<source src="videos/top.webm" type="video/webm">
			</video>
			<div class="top_bg">
				<div class="top_chars_left"></div>
				<div class="top_chars_right"></div>
				<div class="top_frame"></div>
				<div class="top_contents">
					<nav>
						<a href="#">Top</a>
						<a href="#news">News</a>
						<a href="#story">Story</a>
						<a href="#character">Character</a>
						<a href="#system">System</a>
						<!-- <div class="menu_pointer"></div> -->
					</nav>
					<div class="logo"></div>
					<div class="dmm_checkbox_area">
						<div class="dmm_checkbox_wrapper">
							<input type="checkbox" id="preRegPram1" name="preRegPram1" value="1" checked="checked">お知らせを受け取る
							<input type="checkbox" id="preRegPram2" name="preRegPram2" value="1" checked="checked">プロフィール等に表示する
						</div>
					</div>
					<div class="preregister_btn"></div>
				</div>
			</div>
		</div>

		<?php
			$platform = 'dmm';
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