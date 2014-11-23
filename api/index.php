<?php

//	API Root
define("CL_API_ROOT", __DIR__);

//	This can and should be avoided by spliting the init.php
require_once ("../init.php");

require (CL_ROOT . '/vendor/autoload.php');
require_once (CL_API_ROOT . '/AuthenticationMiddleware.php');
require_once (CL_ROOT . '/include/constants.php');

use \Slim\Slim;
use \Slim\Middleware;

$slimConfigs = array(
	'debug' => true,
	'mode' => 'development',
	'log.level' => \Slim\Log::NOTICE
	);

$app = new Slim($slimConfigs);

$authencicationMiddlewareConfigs = array('paths' => array('user/login'));

//	Configures the Authentication Middleware to handle the user validation
$authMiddleware = new AuthenticationMiddleware($authencicationMiddlewareConfigs);
$app->add($authMiddleware);

//	Configure the content type middleware to the requests
$requestContentTypesMiddleware = new Middleware\ContentTypes();
$app->add($requestContentTypesMiddleware);

//	Configure response Middleware. All responses will be returned in JSON
$app->view(new JsonApiView());
$app->add(new JsonApiMiddleware());

include 'routes/book.php';
include 'routes/projects.php';
include 'routes/tasks.php';
include 'routes/user.php';

$app->run();

?>