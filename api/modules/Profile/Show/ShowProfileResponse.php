<?php

namespace API\Modules\Profile\Show;

use API\Components\Response\Response;

class ShowProfileResponse
{
    public function execute($data)
    {
        return Response::json($data);
    }
}