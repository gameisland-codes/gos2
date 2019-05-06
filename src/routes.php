<?php
$host = $_SERVER['HTTP_HOST'];


/* /////////////////////

	Official Route

*/ /////////////////////

if ( $host == 'gos2.jp' || $host == 'www.gos2.jp' ) {
// if ( $host == 'gos2.jp' || $host == 'www.gos2.jp' || $host == 'n.test.gos2.jp' ) {

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

		return $this->renderer->render($response, 'index.php', $data);
	});

	$app->get('/preregister/input','PreregisterController:preregisterInput');
	$app->post('/preregister/proc','PreregisterController:preregister');

	$app->get('/preregister_cp',function($request, $response){
		return $this->renderer->render($response, 'other/preregister_cp.php', ['platform' => 'official']);
	});

	$app->get('/news[/{article}]',function($request, $response, $args){
		return $this->renderer->render($response, 'news/'.(empty($args) ? 'list' : 'article').'.php', [
			'platform' => 'official',
			'article' => isset($args['article']) ? $args['article'] : '',
		]);
	});
}

/* /////////////////////

	DMM Route

*/ /////////////////////

if ( $host == 'dmg.gos2.jp' ) {
// if ( $host == 'dmg.gos2.jp' || $host == 'dmg.test.gos2.jp' ) {

	$app->get('/',function($request, $response){
		return $this->renderer->render($response, 'dmm.php');
	});

	$app->get('/preregister_cp',function($request, $response){
		return $this->renderer->render($response, 'other/preregister_cp.php', ['platform' => 'dmm']);
	});

	$app->get('/news[/{article}]',function($request, $response, $args){
		return $this->renderer->render($response, 'news/'.(empty($args) ? 'list' : 'article').'.php', [
			'platform' => 'dmm',
			'article' => isset($args['article']) ? $args['article'] : '',
		]);
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
}

/* /////////////////////

	Common Route

*/ /////////////////////

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

$app->post('/inquire','FuncController:inquire');


/*
function isMobileOrPc($request)
{
	$user_agent =  $request->header('User-Agent');
	if ((strpos($user_agent, 'iPhone') !== false)
		|| (strpos($user_agent, 'iPod') !== false)
		|| (strpos($user_agent, 'Android') !== false)) {
		return 'mobile';
	} else {
		return 'pc';
	}
}
*/
