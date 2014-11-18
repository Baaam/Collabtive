<?php

//	API Root
define("CL_API_ROOT", __DIR__);

//	This can and should be avoided by spliting the init.php
require_once ("../init.php");

require_once (CL_ROOT . '/vendor/autoload.php');
require_once (CL_API_ROOT . '/AuthenticationMiddleware.php');
require_once (CL_ROOT . '/include/constants.php');

use \Slim\Slim;

$slimConfigs = array(
	'debug' => true,
	'mode' => 'development',
	'log.level' => \Slim\Log::DEBUG,
	'paths' => array('user/login')
	);

$app = new Slim($slimConfigs);

//TODO: Configure MiddleWare so it can accept a list of paths to ignore
$authMiddleware = new AuthenticationMiddleware($slimConfigs);
$app->add($authMiddleware);

include 'routes/user.php';
include 'routes/projects.php';

$app->run();

?>