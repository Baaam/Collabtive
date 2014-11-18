<?php 

$app->group('/user', function () use ($app) {

	$app->get('/login(/)', function () use ($app) {

		$app->log->info("User requesting login");

		$request = $app->request();
		$username = $request->headers->get(COLLABTIVE_API_USERNAME);
		$password = $request->headers->get(COLLABTIVE_API_PASSWORD);

		if (empty($username) || empty($password)) {
			$app->log->error("Missing credentials. User not allowed.");
			$app->status(403);
			return;
		}

		//	Try to login the user. If user isn't correct, sends a 401 to the client.
		$user = new user();
		if (!$user->login($username, $password)) {
			$app->log->error("User not allowed to use");
			$app->status(401);
			return;
		}

		$userId = $user->getId($username)["ID"];
		$userProfile = $user->getProfile($userId);

		$app->render(202, array('user' => $userProfile));
		// $app->status(202);
		// $app->response->setBody($userProfile);
	});
});

 ?>