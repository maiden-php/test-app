<?php

use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    /**
     * What I want:
     *
     * Config::get('key');
     * Config
     */
    function testConfigGetKey()
    {
        new \API\Components\Config\Config($directory_path = getcwd() . '/api/config/');
        $this->assertEquals(\API\Components\Config\Config::get('facebook')['key'], '123');
    }

    function testConfigSetKey()
    {
        new \API\Components\Config\Config($directory_path = getcwd() . '/api/config/');
        \API\Components\Config\Config::set('testkey', 'mother');
        $this->assertEquals(\API\Components\Config\Config::get('testkey'), 'mother');
    }

    function testConfigFunction()
    {
        $this->assertEquals(config('mailchimp.key'), 'chimpster', 'Config should return the right key using the dot notation');
    }
}