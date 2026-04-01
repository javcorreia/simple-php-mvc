<?php

use App\Controllers\HomeController;
use App\Router\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');

try {
    $router->dispatch();
} catch (Exception $e) {
    echo '<h1>' . $e->getMessage() . '</h1>';
}
