<?php
$host = $_SERVER['HTTP_HOST'];

if ( $host == 'gos2.jp' || $host == 'www.gos2.jp' ) {

	$app->get('/',function($request, $response){
		$data = [];

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

	$app->get('/preregister_cp',function($request, $response){
		return $this->renderer->render($response, 'other/preregister_cp.php', ['platform' => 'official']);
	});

}

////////////////////////////////////////////////////////////////////////////////

if ( $host == 'dmg.gos2.jp' ) {

	$app->get('/',function($request, $response){
		return $this->renderer->render($response, 'dmm.php');
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

	$app->post('/inquire','FuncController:inquire');

	$app->get('/preregister_cp',function($request, $response){
		return $this->renderer->render($response, 'other/preregister_cp_dmm.php', ['platform' => 'dmm']);
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
