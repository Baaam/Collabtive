<?php

require_once (CL_ROOT . '/include/constants.php');

use \Slim\Middleware;

class AuthenticationMiddleware extends Middleware {

    /**
     * Attribute with the configurations to the middleware
     * 
     * Struct
     * array('paths' => array('*'))
     */
    protected $configs;

    public function __construct($configs = array('paths' => array())) {
        $this->configs = $configs;
    }

	public function call() {
        //  Slim Application
        $app = $this->app;

        //  Environment. Has all the information related with the server
        $env = $app->environment;

        $requestPath = $env['PATH_INFO'];

        //  Check if there is paths to be ignored
        if (isset($this->configs['paths'])) {
            foreach ($this->configs['paths'] as $path) {
                $pathPosition = strpos($requestPath, $path);
                if ($pathPosition !== FALSE) {
                    $this->next->call();
                    return;
                }
            }
        }

        //  Request. Has all the information related with the sent request
        $request = $app->request();

        //TODO: Get API access authorization with this keys.
        //  I'm working on a nice solution to introduce a small security on this section.
        // $apiUsername = $req->headers('PHP_AUTH_USER');
        // $apiPassword = $req->headers('PHP_AUTH_PW');

        //  Validate login
        //TODO: If there is time, it can be replaced with a token
        $username = $request->headers->get(COLLABTIVE_API_USERNAME);
        $password = $request->headers->get(COLLABTIVE_API_PASSWORD);

        //  Check user credentials
        $user = new user();
        $isUserLoggedIn = $user->login($username, $password);

        if ($isUserLoggedIn) {
            $userId = $user->getId($username)["ID"];
            $providedUserId = $request->headers->get(COLLABTIVE_USER_ID);
            if ($userId === $providedUserId) {
                //  Call next middleware
                $this->next->call();
                return;
            }
        } 

        //  Some error has occur
        $app->log->error(printf('Something goes wrong with user %s that as provided the password %s', $username, $password));
        $app->response->status(401);
        $app->response->body('User without access');
        //TODO: Introduce authenticate.
        // $app->response->header('WWW-Authenticate', 'Basic realm="Protected Collabtive"');
	}
}

?>