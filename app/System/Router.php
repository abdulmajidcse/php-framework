<?php
namespace App\System;

defined('APP_ROOT') OR exit('Access to this resource on the server is denied!');

use App\Routes\Web;

final class Router extends Web
{
    use Load;

    private $route;
    private $requestMethod;

    /**
     * class constructor
     * get, check and set route and controller information
     * @return boolean/view
     */
    public function __construct()
    {
        // set request_method
        $this->requestMethod = strtolower($_SERVER['REQUEST_METHOD']);
        // check and set route
        if(isset($_SERVER['PATH_INFO'])) {
            $this->route = trim(htmlspecialchars($_SERVER['PATH_INFO']), '/');
        } else {
            $this->route = '';
        }

        /**
         * Match valid route
         * And call routeLoad() method
         */
        $notFoundRoute = 1;
        foreach($this->routes as $routeArray) {
            // check valid route
            if($routeArray[0] == $this->requestMethod && trim($routeArray[1], '/') == $this->route) {
                $notFoundRoute = 0;
                $this->routeLoad($routeArray[2]);
                break;
            }
        }
        
        /**
         * Route not found view
         */
        if($notFoundRoute) {
            return $this->view('errors.404', ['name' => 'Not Found']);
        }

        return true;
    }

    /**
     * get valid route
     * @param $cotrollerDetails
     * @return boolean
     */
    private function routeLoad($controllerDetails)
    {
        // get controller and method in an array
        $controllerAndMethod = explode('@', $controllerDetails);
        // get only controller class
        $controller = '\App\Controllers\\' . $controllerAndMethod[0];
        // get only method this route controller class
        $method = $controllerAndMethod[1];
        // create object of this route controller
        (new $controller())->$method();

        return true;
    }
}