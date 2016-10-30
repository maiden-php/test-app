<?php

use PHPUnit\Framework\TestCase;
use Api\Components\App\App as Singleton;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}