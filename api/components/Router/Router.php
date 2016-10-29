<?php

namespace API\Components\Router;

class Router
{
    /**
     * Router constructor.
     * @param Controller $controller
     */
    function __construct(Controller $controller)
    {
        $this->controller = $controller;
        $this->pageUrl = trim($_SERVER['REQUEST_URI'], '/');
    }

    public function get($requestRoute, array $settings = [])
    {
        if (trim($requestRoute, '/') == $this->pageUrl) {
            return true;
            // want to call a controller
            //return $this->controller->action();
        }
        return false;
    }

    public function getURL()
    {
        return $this->pageUrl;
    }
}