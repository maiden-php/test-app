<?php

namespace API\Modules\Profile\Show;

/**
 * Class ShowProfileRequest
 * DTO Data Transport Object
 *
 */
class ShowProfileRequest
{
    public $profile_id;

    function __construct($profile_id)
    {
        $this->profile_id = $profile_id;
    }
}