<?php

namespace Models;

class DbConnect {

    protected $pdo;

    function __construct() {
        $this->pdo = new \PDO("mysql:host=localhost:3306;dbname=exempleheritage;charset=utf8", "root", "");
    }
}