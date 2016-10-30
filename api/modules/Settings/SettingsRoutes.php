<?php

namespace API\Modules\Settings;

use API\Components\Router\Controller;
use API\Components\Router\Router;
use API\Modules\Profile\Show\ShowProfileRequest;
use API\Modules\Profile\Show\ShowProfileController;
use API\Modules\Profile\Show\ShowProfileResponse;

class SettingsRoutes
{
    function __construct()
    {
        $this->router = new Router();
    }

    function routes()
    {
        /**
         * Get the profile with the specified id
         */
        $this->router->get('/profiles/:id', [
            'prefix' => '/api/v1/',
            'request' => ShowProfileRequest::class,
            'middleware' => [

            ],
            'validation' => [

            ],
            'controller' => ShowProfileController::class,
            'events' => [

            ],
            'response' => ShowProfileResponse::class,
        ]);

        /**
         * Update profile with given id
         */
        $this->router->post('/profiles/update', [
            'prefix' => '/api/v1/',
            'request' => ShowProfileRequest::class,
            'middleware' => [

            ],
            'validation' => [

            ],
            'controller' => ShowProfileController::class,
            'events' => [

            ],
            'response' => ShowProfileResponse::class,
        ]);
    }
}