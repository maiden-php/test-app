<?php

namespace API\Components\Router;

use API\Components\Response\Response;

class Router
{
    /**
     * Router constructor.
     */
    function __construct()
    {
        $this->pageUrl = $this->getURL();
    }

    /**
     * @param $requestRoute
     * @param array $settings
     * @return bool
     */
    public function action($requestRoute, array $settings = [])
    {
        if (trim($requestRoute, '/') == $this->getURL())
        {
            // only for POST requests
            $inputs = (new \ReflectionClass(new $settings['request']))->getProperties();
            $valid_inputs = array_intersect($inputs, $_POST);

            // Data Transport Object
            $DTO = [
                'DTO' => 'success!'
            ];
            
            // controller
            $controller = new $settings['controller'];
            $controllerData = $controller->execute($DTO);

            // response
            $response = new $settings['response'];
            $responseData = $response->execute($controllerData);

            return $responseData;
        }
        else {
            Response::json([
                'status' => 1337,
                'message' => 'Yo Buddy, your route does not exist.'
            ]);
        }
    }

    public function getURL()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
        return '';
    }
}