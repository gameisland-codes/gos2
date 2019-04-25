<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>事前登録キャンペーン</title>

	<link rel="stylesheet" type="text/css" href="/css/other/preregister_cp.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script src="/js/layer.js"></script>

	<?php if (PLATFORM == 'dmm'): ?>

		<script src="/js/dmm.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/dmm_nav.css">
		<style type="text/css">
			.dmm_checkbox_area {
				background-color: rgba(0,0,0,0.5);
				position: absolute;
				width: 360px;
				height: 50px;
				top: -205px;
				left: 50%;
				margin-left: -180px;
			}

			.dmm_checkbox_wrapper {
				font-size: 13px;
				color: white;
				text-align: center;
				margin-top: 17px;
			}
		</style>

	<?php endif; ?>

</head>
<body>

	<?php
		if (PLATFORM == 'dmm') {
			include(__DIR__ . '/../adTag/dmm_gtm.php');
			include(__DIR__ . '/../vendor/dmm_nav.php');
		}
	?>

	<div class="wrapper">
		<div class="top_area">
			<div class="anim_area">
				<div id="bgScene">
					<div class="parallax_wrapper" data-depth="0.12"><div class="top_bg"></div></div>
				</div>
				<div id="charScene">
					<div class="parallax_wrapper" data-depth="0.40"><div class="top_char_3"></div></div>
					<div class="parallax_wrapper" data-depth="0.22"><div class="top_char_2"></div></div>
				</div>
			</div>
			<div class="logo"></div>
			<div class="preregister_text"></div>
			<div id="charUpperScene">
				<div class="parallax_wrapper" data-depth="0.18"><div class="top_char_1"></div></div>
			</div>
			<div class="mask"></div>
		</div>
		<div class="bg_pattern_top"></div>
		<div class="contents_wrapper">

			<?php if (PLATFORM == 'dmm'): ?>

				<div class="dmm_checkbox_area">
					<div class="dmm_checkbox_wrapper">
						<input type="checkbox" id="preRegPram1" name="preRegPram1" value="1" checked="checked">お知らせを受け取る
						<input type="checkbox" id="preRegPram2" name="preRegPram2" value="1" checked="checked">プロフィール等に表示する
					</div>
				</div>
				<div class="preregister_btn_top"></div>
				<div class="cp_contents_1"></div>
				<div class="cp_contents_dmm"></div>
				<div class="preregister_btn"></div>

			<?php else: ?>

				<div class="preregister_btn_top"></div>
				<div class="cp_contents_1"></div>
				<div class="cp_contents_2"></div>
				<div class="preregister_btn"></div>

			<?php endif; ?>

		</div>
		<div class="bg_pattern_bottom"></div>
	</div>
	<?php include(__DIR__ . '/../vendor/footer.php') ?>

	<script type="text/javascript">
		$(function(){
			setTimeout(function(){
				$('.top_char_1').delay(800).animate({bottom:'0%'},600,'swing',setParallax);
				$('.top_char_2').delay(400).animate({right:'15%'},600);
				$('.top_char_3').animate({right:'-10%'},600);
			},500);

			$('.preregister_btn').on('click',openPreregister);
			$('.preregister_btn_top').on('click',openPreregister);
		});

		function setParallax () {
			new Parallax(document.getElementById('charScene'), {
				hoverOnly: true,
				scalarX: 23,
				scalarY: 15,
				frictionX: .5,
				frictionY: .3,
			});
			new Parallax(document.getElementById('charUpperScene'), {
				hoverOnly: true,
				scalarX: 23,
				scalarY: 15,
				frictionX: .5,
				frictionY: .3,
			});
			new Parallax(document.getElementById('bgScene'), {
				hoverOnly: true,
				scalarX: 10,
				scalarY: 5,
				frictionX: .2,
				frictionY: .15,
			});
		}

		<?php if (PLATFORM == 'dmm'): ?>

			function openPreregister () {
				openPreregisterModal();
			}

		<?php else: ?>

			function openPreregister () {
				layer.closeAll();
				layer.open({
					type: 2,
					title: false,
					skin: 'layui-layer-none',
					area: ['800px', '600px'],
					closeBtn: true,
					shadeClose: false,
					content: '/preregister/input',
				});
			}

		<?php endif; ?>
	</script>
</body>
</html>