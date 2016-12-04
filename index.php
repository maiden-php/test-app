<?php

// strict for php 7
declare(strict_types=1);
declare(encoding='UTF-8');

// composer
require 'vendor/autoload.php';

// app/composition root
$app = new \API\Components\App\Application();
$app->bootstrap();