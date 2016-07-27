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
    }
        
    public function run()
    {

        // Get requested route
        $uri = $this->getURI();
        // Check requested route in routes.php
        foreach ($this->routes as $route => $action) {
            // Compare $uriPattern with $uri
            if (preg_match("~$route~", $uri)) {
                // find right Controller and Action
                $segments = explode('/', $action);
                $controllerName = ucfirst(array_shift($segments).'Controller');
                $actionName = 'action'.ucfirst(array_shift($segments));
                echo $controllerName ."-". $actionName;
            }

        }

        // if route exists get controller and action for

        // Create object and call action method
    }
}