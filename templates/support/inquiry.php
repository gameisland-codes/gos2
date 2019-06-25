<!DOCTYPE html>
<html>
<head>
	<meta NAME=”ROBOTS” CONTENT=”NONE”>
	<title>お問い合わせ</title>
	<link rel="stylesheet" type="text/css" href="/css/support.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>

	<?php if(PLATFORM == 'dmm') { include(__DIR__ . '/../adTag/dmm_gtm.php'); } ?>

	<div class="wrapper">
		<img src="/images/title_inquiry.png" width="100%">
		<h1>お問い合わせ</h1>

		<?php if($error): ?>

			<div style="min-height: 500px;">
				<p>エラーが発生しました。時間をおいてから、再度お試しください。</p>
				<p>support@gos2.jp</p>
			</div>

		<?php else: ?>

			<?php if($sent): ?>

				<div style="min-height: 500px;">
					<p>送信しました。</p>
				</div>

			<?php else: ?>
				
				<form action="/inquire" method="post" enctype="multipart/form-data">
					<p>下記項目を記載の上、「確認」のボタンを押してください。<span class="text_red">※必須項目です。</span></p>
					<div>
						<p>●ユーザーID <span class="text_red">※</span></p>
						<input size="35" name="userid" id="userid" type="text" value="">
						<span class="inquiry_error_msg" id="useridEmpty">ユーザーIDが未入力です。</span>
					</div>
					<div>
						<p>●ゲーム内ニックネーム</p>
						<input size="35" name="nickname" id="nickname" type="text" value="">
					</div>
					<div>
						<p>●メールアドレス <span class="text_red">※（半角英数字）</span></p>
						<input size="35" name="email" id="email" type="text" value="">
						<span class="inquiry_error_msg" id="emailEmpty">メールアドレスが未入力です。</span>
						<span class="inquiry_error_msg" id="emailFormatError">メールアドレスが正しく入力されていない場合には返信が届きませんので、正しく入力されているか必ずご確認ください。</span>
					</div>
					<div>
						<p>●お問い合わせカテゴリ<span class="text_red">※</span></p>
						<p class="fs11">お問い合わせ内容に該当する項目を1つお選びください。</p>
						<select name="category" id="category">
							<option value="empty">---選択してください---</option>
							<option value="ログインについて">ログインについて</option>
							<option value="不具合報告">不具合報告</option>
							<option value="課金エラー報告">課金エラー報告</option>
							<option value="アイテム消失">アイテム消失</option>
							<option value="イベントについて">イベントについて</option>
							<option value="機種変・データ引継ぎ">機種変・データ引継ぎ</option>
							<option value="迷惑ユーザー通報">迷惑ユーザー通報</option>
							<option value="ご意見・ご要望">ご意見・ご要望</option>
						</select>
						<span class="inquiry_error_msg" id="categoryEmpty">お問い合わせ項目を選択してください。</span>
					</div>
					<div>
						<p>●問題発生日時</p>
						<input size="35" name="time" id="time" type="datetime-local" value="<?php echo date('Y-m-d') ?>T00:00">
					</div>
					<div>
						<p>●添付ファイル　<span class="text_red">(jpg,png,gif,500KB)</span></p>
						<input size="35" type="file" name="imageUpload" id="imageUpload">
					</div>
					<div>
						<p>●ご利用の端末</p>
						<p class="fs11">ご利用中の端末の機種名</p>
						<input size="35" name="device" id="device" type="text" value="">
					</div>
					<div>
						<p>●お問い合わせ内容 <span class="text_red">※</span></p>
						<p class="fs11">不具合などでお困りの際には、問題の起きた画面や操作の詳細をお教えください。</p>
						<p class="fs11">エラーメッセージなどが表示された場合には詳細の記載をお願いいたします。</p>
						<textarea id="content" name="content" rows="10" cols="50"></textarea>
						<br /><span class="inquiry_error_msg" id="contentEmpty">お問い合わせ内容が未入力です。</span>
					</div>
				</form>
				<div class="confirm_btn"></div>
			<?php endif; ?>
		<?php endif; ?>

		<?php include(__DIR__ . '/../vendor/backToTopBtn.php') ?>
	</div>
	<?php include(__DIR__ . '/../vendor/footer.php') ?>

	<script language="javascript">
		$(".confirm_btn").on('click',function() {
			$(".error").hide();

			if($("#userid").val() == "") {
				$("#useridEmpty").show();
				$("#userid").focus();
				return false;
			}

			if($("#category").val() == "empty") {
				$("#categoryEmpty").show();
				$("#category").focus();
				return false;
			}

			if($('#content').val() == "") {
				$("#contentEmpty").show();
				$("#content").focus();
				return false;
			}

			var email = $("#email").val();

			if(email == "") {
				$("#emailEmpty").show();
				$("#emailFormatError").hide();
				$("#email").focus();
				return false;
			}

			var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
			if(!pattern.test(email)) {
				$("#emailEmpty").hide();
				$("#emailFormatError").show();
				$("#email").focus();
				return false;
			}

			$('form').submit();
		});
	</script>
</body>
</html>