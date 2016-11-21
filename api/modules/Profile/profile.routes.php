<?php

use API\Modules\Profile\Show\ShowProfileRequest;
use API\Modules\Profile\Show\ShowProfileController;
use API\Modules\Profile\Show\ShowProfileResponse;

/**
 * Get the profile with the specified id
 */
$router->action('/profiles', [
    'prefix' => '/api/v1/',
    'method' => 'GET',
    'request' => ShowProfileRequest::class,
    'middleware' => [],
    'validation' => [],
    'controller' => ShowProfileController::class,
    'events' => [],
    'response' => ShowProfileResponse::class,
]);

$router->action('/home', [
    'prefix' => '/api/v1/',
    'method' => 'GET',
    'request' => ShowProfileRequest::class,
    'middleware' => [],
    'validation' => [],
    'controller' => ShowProfileController::class,
    'events' => [],
    'response' => \API\Modules\Home\ShowHomeResponse::class
]);

