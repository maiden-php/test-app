<?php

namespace API\Components\Config;

class Config implements ConfigInterface
{
    private static $items = [];

    /**
     * 1. recursively goes through the directory path given
     * 2. finds all that have *.config.php at the end of the file
     * 3. array merge those files and returns a config array
     */
    function __construct(string $config_directory_path)
    {
        $config = [];
        $files = array_slice(scandir($config_directory_path), 2);
        foreach ($files as $config_files) {
            $config = array_merge($config, include $config_directory_path . $config_files);
        }

        static::$items = $config;
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public static function get($key)
    {
        return isset(static::$items[$key]) ? static::$items[$key] : null;
    }

    /**
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        static::$items[$key] = $value;
    }

    public function getAllItems() : array
    {
        return static::$items;
    }
}