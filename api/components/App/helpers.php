<?php

namespace API\Components\App;

function redirect($url) {
    header("Location: $url");
}

// can be replaced with Crystal?
function view() {
    echo 'view';
}

function dd($data) {
    die(var_dump($data));
}