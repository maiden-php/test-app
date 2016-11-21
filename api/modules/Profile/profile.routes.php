<?php

namespace API\Modules\Profile;

use API\Components\Router\Controller;
use API\Components\Router\Router;
use API\Modules\Profile\Show\ShowProfileRequest;
use API\Modules\Profile\Show\ShowProfileController;
use API\Modules\Profile\Show\ShowProfileResponse;

/**
 * Get the profile with the specified id
 */
$this->router->action('/profile', [
    'prefix' => '/api/v1/',
    'method' => 'GET',
    'request' => ShowProfileRequest::class,
    'middleware' => [],
    'validation' => [],
    'controller' => ShowProfileController::class,
    'events' => [],
    'response' => ShowProfileResponse::class,
]);

