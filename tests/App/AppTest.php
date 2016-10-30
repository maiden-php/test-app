<?php

use PHPUnit\Framework\TestCase;
use API\Components\App\App as Singleton;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf('API\Components\App\App', $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}