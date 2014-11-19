<?php

require_once (CL_ROOT . '/include/constants.php');

$app->group('/projects', function () use ($app) {

	$project = new project();

	//	Gets the user id from the request
	$userId = $app->request->headers->get(COLLABTIVE_USER_ID);

	$app->get('(/(:id))', function($id = NULL) use ($app, $project, $userId) {

		//	Gets information for the project with the provided id
		if ($id) {
			$requestedProject = $project->getProject($id);
	    	$app->render(200, array('projects' => $requestedProject));
			return;	
		}

		//	Gets all projects to the user
		$myProjects = $project->getMyProjects($userId);

		$app->render(200, array('projects' => $myProjects));
	});

	$app->get('/:id/tasks(/)', function($id) use ($app, $project, $userId) {
		$task = new task();

	    $myProjects = $project->getMyProjects($userId);
	    $allMyProjectTasks = array();

	    foreach($myProjects as $proj) {
	        $allProjectTasks = $task->getAllMyProjectTasks($proj["ID"], 10000, $userId);
	        array_push($allMyProjectTasks, $allProjectTasks);
	    }

	    $app->render(200, array('tasks' => $allMyProjectTasks));
	});
});

?>