<?php

namespace API\Components\App;

class Container
{
    private $items = [];

    function __construct($items)
    {
        $this->items = $items;
    }

    function set($key, $value)
    {
        $this->items[$key] = $value;
    }

    function get($service)
    {
        return $this->items[$service];
    }

    function getAll()
    {
        return $this->items;
    }
}