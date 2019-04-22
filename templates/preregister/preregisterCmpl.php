<!DOCTYPE html>
<html>
<head>
	<meta NAME=”ROBOTS” CONTENT=”NONE”>
	<title>事前登録　完了ページ</title>
	<link rel="stylesheet" type="text/css" href="/css/preregister.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
</head>
<body>
	<div class="wrapper">

	<?php if ($status == 1 || $status == 2): ?>
		<div>
			<p>「Guns of Soul2（GOS2）」</p>
			<p>事前登録 完了ページ</p>
			<p>事前登録の受け付けが完了しました。ありがとうございます！</p>
			<br>
			<p>事前登録完了のメールを<?php echo $email; ?>へお送りいたしました。</p>
			<p>登録完了メールが届かない場合は以下の内容をご確認ください。</p>
			<br>
			<p>・登録したメールアドレスが間違っていないか</p>
			<p>・迷惑メールフォルダに入っていないか</p>
			<p>・メール指定拒否設定を行っていないか</p>
			<p>※指定拒否をされている場合は「@gos2.jp」からのメールを許可してください。</p>
			<br>
			<p>＜注意事項＞</p>
			<p>・登録完了メールは事前登録キャンペーンが終了するまで削除しないようにご注意ください。</p>
			<p>・メールアドレスを変更した場合は、再度事前登録をする必要があります。</p>
			<br>
			<p>【登録アドレス】</p>
			<p><?php echo $email; ?></p>
			<br>
			<p>以下の事前登録URLを友達にも教えよう！</p>
		</div>
		<div>
			<input id="copyTarget" type="text" value="https://gos2.jp">
			<div class="copy_btn"></div>
			<div class="twitter_btn"><img src="/images/twitter_icon.jpg"><span>Twitterに投稿</span></div>
			<div class="email_btn"><a href="/" target="_blank"><img src="/images/email_icon.jpg"><span>メールで送る</span></a></div>
		</div>
	<?php else: ?>
		<p>事前登録に失敗しました。</p>
	<?php endif; ?>

	</div>

	<script type="text/javascript">
		$(function(){
			$('.copy_btn').on('click',function(){
				var copyTarget = document.getElementById('copyTarget');
				copyTarget.select();
				document.execCommand('copy');
				alert('https://gos2.jp\nこのURLをクリップボードにコピーしました。');
			});

			var subject=encodeURIComponent('ワンフィンガーシューティングRPG『Guns of Soul2（GOS2）』の事前登録のご紹介');
			var body=encodeURIComponent(
				'ワンフィンガーシューティングRPG『Guns of Soul2（GOS2）』の事前登録キャンペーンをスタート！\n'+
				'100億金貨山分け、登録数に応じて豪華アイテムをプレゼント！\n'+
				'まだの人は今すぐ登録！'
			);
			$('.email_btn a').attr('href','mailto:?subject='+subject+'&body='+body);

			var text=encodeURIComponent('ワンフィンガーシューティングRPG『Guns of Soul2（GOS2）』の事前登録に参加したよ！\n100億金貨山分け、登録数に応じて豪華アイテムをプレゼント！');
			var hashtags='';//encodeURIComponent('---,---');
			$('.twitter_btn').on('click',function(){
				window.open(
					'https://twitter.com/share?text='+text+'&hashtags='+hashtags+'&url=https://gos2.jp',
					'share window', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
				return false;
			});
		})
	</script>
</body>
</html>