<?php

$controller = new \API\Components\Router\Controller();

//$controller->action();

$router = new \API\Components\Router\Router($controller);

/*$router->get('/tests/:id/edit', [
    'prefix' => '/api/v1/',
    'request' => \API\Modules\Profile\ProfileRequest::class,
	'middleware' => [

    ],
	'validation' => [

    ],
	'controller' => \API\Modules\Profile\ProfileController::class,
	'events' => [

    ],
	'response' => \API\Modules\Profile\ProfileResponse::class,
]);*/