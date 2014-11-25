<?php 

require_once (CL_ROOT . '/include/constants.php');

$app->group('/user', function () use ($app) {

	$app->get('/login(/)', function () use ($app) {

		$app->log->info("User requesting login");

		$request = $app->request();
		$username = $request->headers->get(COLLABTIVE_API_USERNAME);
		$password = $request->headers->get(COLLABTIVE_API_PASSWORD);

		if (empty($username) || empty($password)) {
			$app->log->error("Missing credentials. User not allowed.");
			$app->render(403, array('error' => true, 'msg' => "Missing credentials. User not allowed."));
			return;
		}

		//	Try to login the user. If user isn't correct, sends a 401 to the client.
		$user = new user();
		if (!$user->login($username, $password)) {
			$app->render(401, array('error' => true, 'msg' => "User not allowed."));
			return;
		}

		$userId = $user->getId($username)["ID"];
		$userProfile = $user->getProfile($userId);

		$app->render(202, array('user' => $userProfile));
	});
});

 ?>