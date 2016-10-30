<?php

// app init
declare(strict_types=1);

require 'vendor/autoload.php';

require 'api/components/init.php';

//include 'api/components/Router/index.php';

//$class = new ReflectionClass(\API\Modules\Profile\Update\UpdateProfileController::class);

//var_dump(ReflectionClass::export(\API\Modules\Profile\Update\UpdateProfileController::class));

$className = \API\Modules\Profile\Update\UpdateProfileController::class;
$updateProfileController = new $className;
//var_dump($updateProfileController->execute('data here'));

$path = getcwd() . '/api/modules/';
/*echo 'PATH: ' . $path . PHP_EOL . PHP_EOL;
if (is_dir($path)) {
    $directory_handle = opendir($path);
    while ( ($directory = readdir($directory_handle) ) != false) {
        if (is_dir($directory)) {
            echo 'DIR: ' . $directory . PHP_EOL;
        }
        elseif(is_file($directory)) {
            echo 'FILE: ' . $directory . PHP_EOL;
        }
    }
    closedir($directory_handle);
}
else {
    echo 'dir does not exist';
}

var_dump(dirname($path, 2));*/

//var_dump(in_array('ProfileRoutes.php', scandir($path)));

/*var_dump(preg_grep('/Routes.php$/', [
    123,
    'ProfileRoutes.php'
]));*/

/*$regex = '/Routes.php/i';
var_dump((bool) preg_match($regex, 'Here is a sentence, I love heyRoutes.php files'));*/

$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
$files = [];
foreach ($rii as $file) {
    if (!$file->isDir())
        $files[] = $file->getPathname();
}

//var_dump(preg_grep('/Routes.php$/', $files));

//var_dump(preg_split('/namespace/', file_get_contents('C:\xampp\htdocs\projects\mewphp/api/modules\Profile\ProfileRoutes.php')));


$profile_router = new \API\Modules\Profile\ProfileRoutes();
$profile_router->routes();