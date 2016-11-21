<?php

namespace API\Modules\Profile\Show;

use API\Components\Response\Response;

class ShowProfileResponse
{
    public function execute($data)
    {
        return Response::json([
            'my custom response workssdasd' => 'asdasd',
            'my custom response workssdasd11' => 'asdasd',
            'my custom response workssdasd11123123' => 'asdasd'
        ]);
    }
}