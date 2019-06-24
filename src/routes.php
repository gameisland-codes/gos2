<?php
$host = $_SERVER['HTTP_HOST'];

if (preg_match('/iPhone|iPod|iPad|Android/ui', $_SERVER['HTTP_USER_AGENT'])) {
	define('DEVICE', 'sp');
} else {
	define('DEVICE', 'pc');
}

/* /////////////////////

	Official Route

*/ /////////////////////

if ( $host == 'gos2.jp' || $host == 'www.gos2.jp' || $host == 'gos2.test.gameisland.co.jp' ) {
// if ( $host == 'gos2.jp' || $host == 'www.gos2.jp' || $host == 'n.test.gos2.jp' || $host == 'sp.test.gos2.jp' ) {
	define('PLATFORM', 'official');

	$app->get('/',function($request, $response){
		$data = [];

		// If you need "from where" (Advertisement), you can use it.
		/*
		$getParams = $request->getQueryParams();
		if ($getParams['from']) {
			$data['from'] = $getParams['from'];
		} else {
			$data['from'] = false;
		}
		*/

		if (DEVICE == 'sp') {
			return $this->renderer->render($response, 'sp/index.php', $data);
		}
		return $this->renderer->render($response, 'index.php', $data);
	});

	$app->get('/preregister/input','PreregisterController:preregisterInput');
	$app->post('/preregister/proc','PreregisterController:preregister');
}

/* /////////////////////

	DMM Route

*/ /////////////////////

if ( $host == 'dmg.gos2.jp' ) {
// if ( $host == 'dmg.gos2.jp' || $host == 'dmg.test.gos2.jp' ) {
	define('PLATFORM', 'dmm');

	$app->get('/',function($request, $response){
		return $this->renderer->render($response, 'dmm.php');
	});

	$app->get('/preregister/complate', function($request, $response){
		return $this->renderer->render($response, 'preregister/complateDmm.php');
	});

	$app->get('/preregister/duplicate', function($request, $response){
		return $this->renderer->render($response, 'preregister/duplicateDmm.php');
	});

	$app->get('/preregister/error', function($request, $response){
		return $this->renderer->render($response, 'preregister/errorDmm.php');
	});

	$app->get('/gamestart', function($request, $response){
		return $this->renderer->render($response, 'game/dmm_start_modal.php');
	});
}

/* /////////////////////

	Other Route

*/ /////////////////////

$app->get('/preregister_cp',function($request, $response) {
	return $this->renderer->render($response, 'other/preregister_cp.php');
});

$app->get('/news[/{article}]',function($request, $response, $args) {
	$root = '';

	if (DEVICE == 'sp') {
		$root = 'sp/';
	}

	return $this->renderer->render($response, $root.'news/'.(empty($args) ? 'list' : 'article').'.php', [
		'article' => isset($args['article']) ? $args['article'] : '',
	]);
});

$app->get('/privacy',function($request, $response){
	return $this->renderer->render($response, 'support/privacy.php');
});

$app->get('/about',function($request, $response){
	return $this->renderer->render($response, 'support/terms.php');
});

$app->get('/commerce',function($request, $response){
	return $this->renderer->render($response, 'support/law.php');
});

$app->get('/help',function($request, $response){
	return $this->renderer->render($response, 'support/inquiry.php', ['sent' => false, 'error' => false]);
});

$app->get('/guide',function($request, $response){
    return $this->renderer->render($response, 'support/guide.php', ['sent' => false, 'error' => false]);
});
    
$app->get('/information',function($request, $response){
    return $this->renderer->render($response, 'support/information.php', ['sent' => false, 'error' => false]);
});

$app->post('/inquire','FuncController:inquire');
