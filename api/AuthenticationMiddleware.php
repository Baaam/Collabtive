<?php

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

        $app->log->info('Starting Authentication Middleware analysis');

        //  Environment. Has all the information related with the server
        $env = $app->environment;

        $requestPath = $env['PATH_INFO'];
        $app->log->debug(printf("Current path is: %s\n\n", $requestPath));

        //  Check if there is paths to be ignored
        $app->log->info('Check if current path should be ignored by the middleware');
        if (isset($this->configs['paths'])) {
            foreach ($this->configs['paths'] as $path) {
                $pathPosition = strpos($requestPath, $path);
                if ($pathPosition !== FALSE) {
                    $app->log->info(printf('Ignoring path %s. No need for authentication', $requestPath));
                    $this->next->call();
                    return;
                }
            }
        }

        //  Request. Has all the information related with the sent request
        $request = $app->request();

        $app->log->debug('Validating user login');

        //TODO: Get API access authorization with this keys.
        //  I'm working on a nice solution to introduce a small security on this section.
        // $apiUsername = $req->headers('PHP_AUTH_USER');
        // $apiPassword = $req->headers('PHP_AUTH_PW');

        //  Validate login
        //TODO: If there is time, it can be replaced with a token
        $username = $request->headers->get(COLLABTIVE_API_USERNAME);
        $password = $request->headers->get(COLLABTIVE_API_PASSWORD);

        $app->log->debug(printf('User provided credentials:\nUsername: %s\nPassword: %s', $username, $password));

        //  Check user credentials
        $user = new user();
        $isUserLoggedIn = $user->login($username, $password);

        if ($isUserLoggedIn) {
            $this->log->info('User logged in with success. Moving to next middleware.');

            //  Call next middleware
            $this->next->call();
        } else {
            $app->log->error(printf('Something goes wrong with user %s that as provided the password %s', $username, $password));
            $app->response->status(401);
            $app->response->body('User without access');
            //TODO: Introduce authenticate.
            // $app->response->header('WWW-Authenticate', 'Basic realm="Protected Collabtive"');
        }
	}
}

?>