<?php

//namespace API\Components\App;

function redirect($url)
{
    header("Location: $url");
}

// can be replaced with Crystal?
function view()
{
    echo 'view';
}

function dd($data)
{
    die(var_dump($data));
}

/**
 * @param $key
 * @return mixed
 */
function config($key)
{
    $config = include getcwd() . '/api/config/mail.config.php';

    $x = explode('.', $key);

    return $config[$x[0]][$x[1]];
}

/**
 * @param $glue
 * @param $pieces
 * @param bool $extract_first_item
 * @return mixed|string
 */
function implode_r($glue, $pieces, $extract_first_item = false) {
    $result = array_shift($pieces);
    if (is_array($result)) {
        $result = implode_r($glue, $result);
    }
    foreach ($pieces as $item) {
        if (is_array($item)) {
            $result .= empty($extract_first_item) ? implode_r($glue, $item) : $glue . $item[0];
        } else {
            $result .= $glue . $item;
        }
    }
    return $result;
}