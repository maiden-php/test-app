<?php

use PHPUnit\Framework\TestCase;

class HasherTest extends TestCase
{
    public function testHashingAPassword()
    {
        $hasher = new \API\Components\Hasher\Password();
        $hashed_password = $hasher->create('Tr@amp0line123');

        $verify_password = $hasher->check('Tr@amp0line123', $hashed_password);

        $this->assertTrue($verify_password);
    }
}