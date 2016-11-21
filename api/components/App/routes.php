<?php

// include all our routes files
$path = getcwd() . '/api/modules/';
$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
$files = [];
foreach ($rii as $file) {
    if (!$file->isDir()) {
        $files[] = $file->getPathname();
    }
}

foreach (preg_grep('/routes.php$/', $files) as $file) {
    include $file;
}
