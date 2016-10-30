<?php

use PHPUnit\Framework\TestCase;
use API\Components\Router\Router;
use API\Components\Router\Controller;

class RouterTest extends TestCase
{
    function testRouter()
    {
        $router = new \API\Components\Router\Router();

        $router->get('/tests/:id/edit', [
            'prefix' => '/api/v1/',
            'request' => \API\Modules\Profile\Update\UpdateProfileRequest::class,
            'middleware' => [

            ],
            'validation' => [

            ],
            'controller' => \API\Modules\Profile\Update\UpdateProfileController::class,
            'events' => [

            ],
            'response' => \API\Modules\Profile\Update\UpdateProfileResponse::class,
        ]);

        //var_dump($get_route);
        //$this->assertEquals($get_route, 'action', 'I expect this ------------>');
    }
}
