<?php

$router = new \API\Components\Router\Router();

// scans all the routes int he api/modules folder and includes them
include 'routes.php';

$container = new API\Components\App\Container([
    'config' => 'app.config.php'
]);