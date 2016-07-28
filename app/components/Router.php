<?php


namespace Module4\components;


class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = __DIR__."/../config/routes.php";
        $this->routes = include($routesPath);
        

    }

    /**
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
        return null;
    }
        
    public function run()
    {

        // Get requested route
        $uri = $this->getURI();

        // Check requested route in routes.php
        // if route exists get names of controller and action
        foreach ($this->routes as $route => $action) {
            // Compare $route with $uri
            if (preg_match("~$route~", $uri)) {

                //get internal route from outer
                $internalRoute = preg_replace("~$route~", $action, $uri);
                
                // find right Controller, Action, Parameters
                $segments = explode('/', $internalRoute);

                //TEMP? path modifier
                $hostCut = array_shift($segments);

                $controllerName = 'Module4\controllers\\'.ucfirst(array_shift($segments).'Controller');

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;


                // Create object and call action method
                $controller = new $controllerName;

                $response = call_user_func_array(array($controller, $actionName), $parameters);
                if ($response != null){
                    break;
                }


            }

        }


    }
}