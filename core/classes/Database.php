<?php

namespace Web\Blog\Core\Classes;

use PDO;
use PDOException;
use PDOStatement;

class Database
{
    protected static Database | null $instance = null;
    protected PDOStatement $stmt;
    protected PDO $connected;

    protected function __construct() {}
    protected function __clone() {}
    public function __wakeup() {}

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getConnection(array $dbConfig)
    {
        $dsn = "mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']};charset={$dbConfig['charset']}";
        
        try {
            $this->connected = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], $dbConfig['options']);
            return $this;
        } catch (PDOException $e) {
            die("Ошибка: $e");
        }
    }

    public function query($query, array $params = [])
    {
        try {
            $this->stmt = $this->connected->prepare($query);
            $this->stmt->execute($params);
            return $this;
        } catch (PDOException $e) {
            return false;
        }

        return $this;
    }
}
