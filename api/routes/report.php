<?php

require_once (CL_ROOT . '/include/constants.php');
require_once (CL_API_ROOT . '/helpers.php');

$app->put('/report(/)', function () use ($app) {

	//	Validates body parameters

	//	Validates description
	//	Check if comes in the request
	$description = valueForKey('description', $app);
	if (!isset($description)) {
		missingField("Description");
		return;
	}

	//	Validates startDate
	//	Check if comes in the request
	$startDate = valueForKey('startDate');
	if (!isset($startDate)) {
		missingField("Start Date");
		return;
	}

	//	Validates endDate
	//	Check if comes in the request
	$endDate = valueForKey('endDate', $app);
	if (!isset($endDate)) {
		missingField("End Date");
		return;
	}

	//	Validate projectID
	//	Check if comes in the request
	$projectID = valueForKey('projectID', $app);
	if (!isset($projectID)) {
		missingField("projectID");
		return;
	}

	//	Check if exists in the database
	$projectModel = new project();
	if ($projectModel->getProject($projectID)) {
		objectNotFound("Project");
		return;
	}

	//	Validate bookID (same as taskID)
	//	Check if comes in the request
	$bookID = valueForKey('bookID', $app);
	if (!isset($app->request->body["bookID"])) {
		missingField("bookID");
		return;
	}

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
		$app->render(500, array('error' => true, 'msg' => 'Report not created.'));
		return;
	}

	//	Returns the created book (task)
	$app->render(201, array("report" => $timeTrackerModel->getTask($newReportID)));

});

?>