<!DOCTYPE html>
<html>
<head>
	<meta NAME=”ROBOTS” CONTENT=”NONE”>
	<title>事前登録ページ</title>
	<link rel="stylesheet" type="text/css" href="/css/preregister.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="/js/layer.js"></script>
</head>
<body>
	<div class="wrapper">
		<p>「Guns of Soul2（GOS2）」</p>
		<p>事前登録ページ</p>
		<p>（※PCからもご登録いただけます。）</p>
		<p>2019年春サービス開始予定『Guns of Soul2（GOS2）』事前登録ページです。</p>
		<br>
		<p>以下にお使いのメールアドレスを入力し、「登録する」ボタンを押してください。</p>
		<p>登録完了時、および『Guns of Soul2（GOS2）』サービス開始時のご連絡や、最新情報をメールにてお届けいたします。</p>
		<br>
		<p>※お手持ちの携帯端末で、PCから送信されるメールを受信しない設定にされている場合は、受信拒否を解除いただきますよう、お願いいたします。</p>
		<div class="input_area">
			<form action="/preregister/proc" method="post" enctype="multipart/form-data">
				<input id="email" name="email" type="email" value="" size="35">
				<div id="email_error">※ メールアドレスのフォーマットが違います。</div>
			</form>
			<div class="register_btn" onclick="preregister()"></div>
		</div>
	</div>

	<script type="text/javascript">
		function preregister() {
			var email = $('#email').val();
			var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

			if(!pattern.test(email)) {
				var e = $('#email_error');
				layer.msg(e.text(),function(){});
				e.show();
				return false;
			}

			$('form').submit();
		}
	</script>
</body>
</html>