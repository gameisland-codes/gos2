<?php
namespace App;

use \Interop\Container\ContainerInterface as ContainerInterface;

class PreregisterController {
	private $c;

	public function __construct(ContainerInterface $c) {
		$this->c = $c;
	}

	public function preregisterInput () {
		return $this->view('preregister/preregisterInput.php');
	}

	public function preregister ($request, $response, $args) {
		$posts = $request->getParsedBody();
		$status = -1;

		try {
			$email = validateEmail($posts['email']);
			if ($email) {
				if ($this->c->db->table('preregisterUsers')->where('email', '=', $email)->count() > 0) {
					$status = 2;
				} else {
					$this->c->db->table('preregisterUsers')->insert(['email' => $email]);
					$status = 0;

					if (self::sendMail($email)) {
						$status = 1;
					}
				}
			}
		} catch (Exception $e) {}
		return $this->view('preregister/preregisterCmpl.php', ['status' => $status, 'email' => $email]);
	}

	private function sendMail ($toEmail) {
		//TODO
		$title = '『Guns of Soul2』事前登録受付完了';
		$mailText = "『Guns of Soul2』事前登録受付完了<br /><br />
★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆<br />
『Guns of Soul2』<br />
事前登録キャンペーンへの登録が完了いたしました。<br />
★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆★☆<br /><br />
この度は、『Guns of Soul2』事前登録にご参加いただき、誠にありがとうございます！<br />
事前登録を記念した様々なキャンペーンを実施中！<br />
事前登録数が一定数を達成するごとに報酬が豪華になるキャンペーンなど実施中ですので、お楽しみに！<br /><br />
▼公式サイトはこちら<br /><br />
https://gos2.jp/<br /><br />
━━━━━━━━━━━━━━━━━<br />
ガンズ・オブ・ソウル２<br />
公式Twitterをフォローしよう！<br />
━━━━━━━━━━━━━━━━━<br /><br />
最新情報から、開発状況の報告、豪華プレゼントが当たるTwitterキャンペーンなど、配信開始までお楽しみいただけるイベントを順次発信してまいります！<br /><br />
▼Twitterはこちら<br />
https://twitter.com/gunsofsoul2<br /><br />
サービスの開始まで今しばらくお待ちください。<br />
サービス開始後にあらためてメールをお送りさせていただきます。<br /><br />
-------------------------------------<br />
※本メールの送信元アドレスは配信専用のため、ご返信いただいてもお答えできません。<br />
-------------------------------------<br />";
		$msg = \Swift_Message::newInstance($title)
			->setFrom($this->c->settings['mailer']['from'])
			->setTo($toEmail)
			->setBody($mailText)
			->setContentType($this->c->settings['mailer']['content_type']);
		return $this->c->mailer->send($msg);
	}

	private function view(String $route, $data = []) {
		$this->c->renderer->render($this->c->response, $route, $data);
	}
}
