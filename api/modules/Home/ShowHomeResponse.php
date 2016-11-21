<?php

namespace API\Modules\Home;

use API\Components\Response\Response;

class ShowHomeResponse
{
    public function execute($data)
    {
        return Response::json($data);
    }
}