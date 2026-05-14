<?php

namespace App;

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;port=3306;dbname=visited-countries;charset=utf8mb4";
        $username = "root";
        $password = "root";
        try {
            $this->connection = new \PDO($dsn, $username, $password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query(string $query, array $params = []): \PDOStatement
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }
}
