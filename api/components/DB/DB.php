<?php

class DB
{
    function __construct()
    {
        $this->pdo = new PDO($dsn = '', 'root', 'root');
    }

    function query($sql)
    {
        $this->pdo->query($sql);
    }
}