<?php 

$app->group('/user', function () use ($app) {

	$app->get('/login(/)', function () use ($app) {

		$request = $app->request();
		$username = $request->get('username');
		$password = $request->get('password');

		if (empty($username) || empty($password)) {
			$app->status(403);
			return;
		}

		$userObj = (object) new user();
		if (!$userObj->login($username, $password)) {
			$app->status(403);
			return;
		}

		$app->status(202);
	});
});

 ?>