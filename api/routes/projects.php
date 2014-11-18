<?php

$app->get('/projects(/(:id))', function($id = NULL) use ($app) {

	$projectObject = (object) new project();

	//	Gets information for the project with the provided id
	if ($id) {
    	$theData = $projectObject->getProject($id);
    	print_r($theData);

    	$app->status(200);
		return;	
	}

	//	Gets all projects to the user
	$theData = $projectObject->getMyProjects($userId);
});

?>