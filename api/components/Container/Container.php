<?php

namespace API\Components\Container;

/**
 * Created by PhpStorm.
 * User: yichen
 * Date: 10/29/2016
 * Time: 8:01 PM
 */
class Container
{
    public $items = [];

    function __construct($items)
    {
        $this->items = $items;
    }

    function set($service)
    {
        $this->items[] = $service;
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