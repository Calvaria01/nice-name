<?php

use app\core\Route;

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . '/vendor/autoload.php');

$routes = require_once "app/config/routes.php";

$route = new Route($routes, $_SERVER['REQUEST_URI']);
$route->startAction();
