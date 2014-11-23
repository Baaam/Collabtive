<?php

require_once (CL_ROOT . '/include/constants.php');

$app->group('/projects', function () use ($app) {

	$projectModel = new project();

	//	Gets the user id from the request
	$userID = $app->request->headers->get(COLLABTIVE_USER_ID);

	$app->get('(/(:id))', function($id = NULL) use ($app, $projectModel, $userID) {

		//	Gets information for the project with the provided id
		if ($id) {
			$requestedProject = $projectModel->getProject($id);
	    	$app->render(200, array('projects' => $requestedProject));
			return;	
		}

		//	Gets all projects to the user
		$myProjects = $projectModel->getMyProjects($userID);

		if (empty($myProjects)) {
			$app->render(204, array('msg' => 'No data found.'));
    	} else {
    		$app->render(200, array('projects' => $myProjects));
    	}
	});

	$app->get('/:id/tasks(/)', function($id) use ($app, $projectModel, $userID) {

		$taskListModel = new tasklist();

    	$myProjects = $projectModel->getMyProjects($userID);

    	$tasksList = array();

    	foreach ($myProjects as $project) {
    		$myTasksOpen = $taskListModel->getProjectTasklists($project["ID"]);
    		if ($myTasksOpen) {
        		array_push($tasksList, $myTasksOpen);
    		}

    		$myTasksFinished = $taskListModel->getProjectTasklists($project["ID"], 0);
    		if ($myTasksFinished) {
    			array_push($tasksList, $myTasksFinished);
    		}
    	}

    	if (empty($tasksList)) {
    		$app->render(201, array('msg' => 'No data found.'));
    	} else {
    		$app->render(200, array('tasks' => $tasksList));
    	}
	});
});

?>