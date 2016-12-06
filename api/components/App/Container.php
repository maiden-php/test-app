<?php

namespace API\Components\App;

/**
 * Class Container
 * @package API\Components\App
 *
 *
 * Dependency injection container
 * Service locator
 * Registry design pattern
 */
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