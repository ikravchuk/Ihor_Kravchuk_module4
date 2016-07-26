<?php
// Autoloader 
require "vendor/autoload.php";

use \Module4\components\Router;



// 1. General settings

// 2. Connection to Database

// 3. Router

$router = new Router();
$router->run();