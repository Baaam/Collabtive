<?php

require_once (CL_API_ROOT . '/helpers.php');

//	This route represents all the operations with the tasks model

$app->put('/book(/)', function() use ($app) {

	// Validate body params

	// Validates title
	// Check if it comes in the reques
	$title = valueForKey('title', $app);
	if (!isset($title)) {
		missingField("Title", $app);
		return;
	}

	//	Validates description
	$description = valueForKey('description', $app);
	if (!isset($description)) {
		missingField("Description", $app);
		return;
	}

	//	Validate startDate
	//	Check if comes on the request
	$startDate = valueForKey('startDate', $app);
	if (!isset($startDate)) {
		missingField("startDate", $app);
		return;
	}

	//	Validate endDate
	//	Check if comes on the request
	$endDate = valueForKey('endDate', $app);
	if (!isset($endDate)) {
		missingField("endDate", $app);
		return;
	}

	//	Validate projectID
	//	Check if comes in the request
	$projectID = valueForKey('projectID', $app);
	if (!isset($projectID)) {
		missingField("projectID", $app);
		return;
	}

	//	Check if exists in the database
	$projectModel = new project();
	if ($projectModel->getProject($projectID)) {
		objectNotFound("Project", $app);
		return;
	}

	//	Validate taskID (matches a taskList)
	//	Check if comes in the request
	$taskID = valueForKey('taskID', $app);
	if (!isset($taskID)) {
		missingField("taskID", $app);
		return;
	}

	//	Check if exists in the database
	$taskModel = new tasklist();
	if ($taskModel->getTaskList($taskID) === false) {
		objectNotFound("Task", $app);
		return;
	}

	//	After all the validations, create the book (task)
	$newTaskID = $taskModel->add($startDate, $endDate, $title, $description, $taskID, $projectID);

	if ($newTaskID === false) {
		$app->log->error("Book not created.");
		$app->status(500);
	}

	//	Returns the created book (task)
	$app->render(201, array("book" => $taskModel->getTask($newTaskID)));
});

?>