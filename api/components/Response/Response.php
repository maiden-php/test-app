<?php

namespace API\Components\Response;

class Response
{
    /**
     * Returns JSON
     *
     * @param $data
     *
     * @return array
     */
    public static function json(array $data)
    {
        header('Content-type: application/json');
        echo json_encode($data, true);
        return $data;
    }

    /**
     * Returns xml
     *
     * @param $data
     * 
     * @return mixed
     */
    public static function xml($data)
    {
        header('Content-type: application/xml');
        echo $data;
        return $data;
    }

    /**
     * * Note - use the Crystal Templating Engine
     *
     * @param $view
     * @param $data
     */
    public static function view($view, $data)
    {
        extract($data);

        include $view;
    }
}