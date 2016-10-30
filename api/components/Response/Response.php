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
    public static function json($data)
    {
        header('Content-type: application/json');
        echo json_encode($data);
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
}