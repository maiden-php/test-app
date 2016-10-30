<?php

use PHPUnit\Framework\TestCase;
use API\Components\DB\DB;

class DBTest extends TestCase
{
    function testDB()
    {
        $config = [
            'host' => 1,
            'db_name' => 'test_db',
            'username' => 'root',
            'password' => ''
        ];
        $db = new DB($config);
        //var_dump($db->getDBObject()->);
        //$db->query("SELECT * FROM users");


        //var_dump($get_route);
        //$this->assertEquals($get_route, 'action', 'I expect this ------------>');
    }
}
