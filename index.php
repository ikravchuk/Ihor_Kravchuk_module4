<?php
// Autoloader 
require "vendor/autoload.php";

use \Module4\components\Router;
use \Module4\components\Db;

session_start();



/** @var Router $router */
$router = new Router();
$router->run();