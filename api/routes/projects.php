<?php

$app->get('/projects(/(:id))', function($id = NULL) use ($app) {

	$project = new project();

	//	Gets information for the project with the provided id
	if ($id) {
    	$app->status(200, array('projects' => $project->getProject($id)));
		return;	
	}

	//	Gets the user id from the request
	$userId = $app->request->headers->get(COLLABTIVE_USER_ID);

	//	Gets all projects to the user
	// $theData = $projectObject->getMyProjects($userId);
});

?>