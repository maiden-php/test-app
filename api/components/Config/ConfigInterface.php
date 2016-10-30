<?php

namespace API\Components\Config;

interface ConfigInterface
{
    static function get($key);

    static function set($key, $value);

    function getAllItems();
}