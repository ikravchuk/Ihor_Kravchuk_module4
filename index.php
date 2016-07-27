<?php
// Autoloader 
require "vendor/autoload.php";

use \Module4\components\Router;
use 



// 1. General settings

// 2. Connection to Database

// 3. Router

/** @var Router $router */
$router = new Router();
$router->run();