<?php

use App\Controllers\HomeController;
use App\Router\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');

try {
    $router->dispatch();
} catch (Exception $e) {
    echo $e->getMessage();
}
