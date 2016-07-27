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

        // Get requested route
    
        // Check requested route in routes.php

        // if route exists get controller and action for

        // Create object and call action method
    }
}