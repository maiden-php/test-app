<?php

use API\Components\App\Auth;

$auth = new Auth($config = include '../../config/auth.config.php');

$auth->login([
    'type'      => 'normal',
    'email'     => 'yichen@chosensolutions.ca',
    'password'  => 'the_password123'
]);

