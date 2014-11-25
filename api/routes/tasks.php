<?php 

require_once (CL_ROOT . '/include/constants.php');

$app->group('/tasks', function () use ($app) {

	$taskListModel = new tasklist();

	//	Gets the user id from the request
	$userId = $app->request->headers->get(COLLABTIVE_USER_ID);

	$app->get('/', function () use ($app, $taskListModel) {

		$projectModel = new project();

    	$myProjects = $projectModel->getMyProjects($userId);

    	$tasksList = array();

    	foreach ($project as $myProjects) {
        	array_push($taskList, $taskListModel->getProjectTaskLists($project));
    	}

    	if (empty($taskList)) {
    		$app->render(204, array('msg' => 'No data found.'));
    	} else {
    		$app->render(200, array('tasks' => $taskList));
    	}
	});

	$app->get('/:id(/)', function($id) use ($app, $taskListModel) {
		$task = $taskListModel->getTasklist($id);

		if (empty($task)) {
			$app->render(204, array('msg' => 'No data found.'));
    	} else {
    		$app->render(200, array('task' => $task));
    	}
	});

});

?>