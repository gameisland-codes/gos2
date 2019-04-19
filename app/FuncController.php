<?php
namespace App;

use \Interop\Container\ContainerInterface as ContainerInterface;

class FuncController {
	private $c;

	public function __construct(ContainerInterface $c) {
		$this->c = $c;
	}

	public function inquire ($request, $response, $args) {
		$data = ['sent' => false, 'error' => true];
		$posts = $request->getParsedBody();
		$email = null;

		try {
			$email = validateEmail($posts['email']);
			if ($email) {
				$directory = __DIR__ . '/../tmp/';
				$uploadedFile = $request->getUploadedFiles()['imageUpload'];
				$posts['filePath'] = null;

				if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
					$filename = self::moveUploadedFile($directory, $uploadedFile);
					if ($filename) {
						$posts['filePath'] = $directory . $filename;
					}
				}

				if (self::sendMail($posts)) {
					$data['sent'] = true;
					$data['error'] = false;
				}
				
				$mailToUserText = "平素よりGuns of Soul2をご利用くださいまして誠にありがとうございます。<br />
お客様のお問い合わせを受け付けました。<br /><br />
GoS2運営チームよりご案内いたしますので、しばらくお待ちください。<br /><br />
-お客様のご質問内容--------------------------------------------------------<br /><br />" .
$posts['content'] .
"<br /><br />------------------------------------------------------------------------<br />
※お問い合わせは24時間受け付けておりますが、ご案内は原則として平日の10:00〜19:00(祝祭日は除く)となります。<br />
※可能な限り素早い対応を心掛けておりますが、お問い合わせの内容によってはご案内までお時間をいただく場合もあります。<br />
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br />
※本メールの無断転用・転載はご遠慮ください。<br />
(C) ACCESSPORT INC. All Rights Reserved.<br /><br />
※お問合せについてお心当たりのない方は、本メールを破棄していただきますよ
  うお願いいたします。<br />
  Guns of Soul2：https://gos2.jp/<br />
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━<br />";
				$mailToUser = \Swift_Message::newInstance('GOS2お問い合わせ')
					->setFrom(['support@gos2.jp' => 'support_gos2'])
					->setTo($posts['email'])
					->setBody($mailToUserText)
					->setContentType('text/html');
				
				$this->c->mailer->send($mailToUser);
				
			}
		} catch (Exception $e) {}

		if ($posts['filePath']) {
			unlink($posts['filePath']);
		}

		return $this->c->renderer->render($response, 'support/inquiry.php', $data);
	}

	private function moveUploadedFile($directory, $uploadedFile) {
		$extension = pathinfo($uploadedFile->getClientFilename(), PATHINFO_EXTENSION);
		echo $extension,$uploadedFile->getSize();
		if (in_array($extension, ['jpeg','jpg','gif','png'])) {
			if ($uploadedFile->getSize() <= 500000) {
				$basename = bin2hex(random_bytes(8)); // see http://php.net/manual/en/function.random-bytes.php
				$filename = sprintf('%s.%0.8s', $basename, $extension);
				$uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);
				return $filename;
			}
		}
		return false;
	}

	private function sendMail ($posts) {
		$title = '【'.$posts['category'].$posts['userid'].'】';
		$msg = \Swift_Message::newInstance($title)
			->setFrom($posts['email'])
			->setTo($this->c->settings['mailer']['to'])
			->setBody(self::makeMailBody($posts))
			->setContentType($this->c->settings['mailer']['content_type']);

		if ($posts['filePath']) {
			$msg->attach(\Swift_Attachment::fromPath($posts['filePath']));
		}

		return $this->c->mailer->send($msg);
	}

	private function makeMailBody ($posts) {
		return 'ユーザーID: '.$posts['userid'].'<br><br>'.
				'ゲーム内ニックネーム: '.$posts['nickname'].'<br><br>'.
				'メールアドレス: '.$posts['email'].'<br><br>'.
				'お問い合わせカテゴリ: '.$posts['category'].'<br><br>'.
				'問題発生日時: '.$posts['time'].'<br><br>'.
				'ご利用の端末: '.$posts['device'].'<br><br>'.
				'お問い合わせ内容: '.$posts['content'].'<br><br>'.
				'HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT'];
	}
}