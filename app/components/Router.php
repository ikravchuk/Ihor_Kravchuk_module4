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

    public function run()
    {
        echo "Hello";
        // Get requested route
        if (!empty($_SERVER['REQUEST_URI'])) {
            $uri = trim($_SERVER['REQUEST_URI'], '/');
            echo $uri;
        }


        // Check requested route in routes.php

        // if route exists get controller and action for

        // Create object and call action method
    }
}