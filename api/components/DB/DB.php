<?php

namespace API\Components\DB;

class DB
{
    private $pdo;
    
    function __construct(array $config)
    {
        $dsn = "mysql:host={$config['host']};dbname={$config['db_name']};charset=utf8mb4";
        $this->pdo = new \PDO($dsn = 'mysql:host=localhost;dbname=test_db;charset=utf8mb4', $config['username'], $config['password']);
    }

    function query($sql)
    {
        $this->pdo->query($sql);
    }

    public function getDBObject()
    {
        return $this->pdo;
    }
}