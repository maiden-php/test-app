<?php

namespace API\Components\App;

use function API\Components\App\redirect;
use const API\Components\App\Maiden_VERSION;

class Application
{
    const version = '1.0.0';

    /**
     * Our Composition Root
     */
    public function bootstrap()
    {
        echo __CLASS__  . ': INITIALIZED';

        //$this->_router();

        //$this->initRoutes();

        $this->_initHelpers();

        $this->_playground();
    }

    private function _router()
    {
        session_start();

        //$router = new \API\Components\Router\Router();


        $container = new Container([
            'config' => 'app.config.php'
        ]);
    }

    /**
     * scans all the routes int he api/modules folder and includes them
     */
    private function initRoutes()
    {
        // include all our routes files
        $path = getcwd() . '/api/modules/';
        $rii = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($path));
        $files = [];
        foreach ($rii as $file) {
            if (!$file->isDir()) {
                $files[] = $file->getPathname();
            }
        }

        foreach (preg_grep('/routes.php$/', $files) as $file) {
            include $file;
        }
    }

    private function _initHelpers()
    {
        include 'helpers.php';
    }

    private function _playground()
    {
        include 'playground.php';
    }
}