<?php

namespace API\Components\Router;

use API\Components\Response\Response;

class Controller
{
    public function action()
    {
        return Response::json([
           'hey' => 1
        ]);
    }
}