<?php

require_once (CL_ROOT . '/include/constants.php');
require_once (CL_API_ROOT . '/helpers.php');

$app->put('/report(/)', function () use ($app) {

	//	Validates body parameters

	//	Validates description
	//	Check if comes in the request
	if (!isset($app->request->body["description"])) {
		missingField("Description");
		return;
	}
	$description = $app->request->body["description"];

	//	Validates startDate
	//	Check if comes in the request
	if (!isset($app->request->body["startDate"])) {
		missingField("Start Date");
		return;
	}
	$startDate = $app->request->body["startDate"];

	//	Validates endDate
	//	Check if comes in the request
	if (!isset($app->request->body["endDate"])) {
		missingField("End Date");
		return;
	}
	$endDate = $app->request->body["endDate"];

	//	Validate projectID
	//	Check if comes in the request
	if (!isset($app->request->body["projectID"])) {
		missingField("projectID");
		return;
	}
	$projectID = $app->request->body["projectID"];

	//	Check if exists in the database
	$projectModel = new project();
	if ($projectModel->getProject($projectID)) {
		objectNotFound("Project");
		return;
	}

	//	Validate bookID (same as taskID)
	//	Check if comes in the request
	if (!isset($app->request->body["bookID"])) {
		missingField("bookID");
		return;
	}
	$projectID = $app->request->body["bookID"];

	//	Check if exists in the database
	$taskModel = new task();
	if ($taskModel->getTask($bookID)) {
		objectNotFound("Task");
		return;
	}

	//	Gets the user id from the request
	$userId = $app->request->headers->get(COLLABTIVE_USER_ID);

	$timeTrackerModel = new timetracker();
	$newReportID = $timeTrackerModel->add($userId, $projectID, $bookID, $description, $startDate, $endDate, $startday = "", $endday = "");

	if ($newReportID === false) {
		$app->log->error("Report not made.");
		$app->status(500);
	}

	//	Returns the created book (task)
	$app->render(201, array("report" => $timeTrackerModel->getTask($newReportID)));

});

?>