<?php

namespace API\Components\Response;

class Response
{
    /**
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

    public static function xml($data)
    {
        header('Content-type: application/xml');
        echo $data;
        return $data;
    }
}