<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;port=3306;dbname=visited-countries;charset=utf8mb4";
        $username = "root";
        $password = "root";
        try {
            $this->connection = new PDO($dsn, $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function query(string $query, array $params = []): \PDOStatement
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement;
    }

    public function countries(): array
    {
        return $this->query("SELECT * FROM countries"
                            . " ORDER BY name")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function regions(): array
    {
        return $this->query("SELECT * FROM regions")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cities(): array
    {
        return $this->query("SELECT * FROM cities")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCountryByName(string $name): array|false
    {
        return $this->query("SELECT * FROM countries WHERE name = ?", [$name])->fetch(PDO::FETCH_ASSOC);
    }

    public function getVisitedCitiesByCountry(int $countryId): array
    {
        return $this->query("
            SELECT cities.name
            FROM cities
            INNER JOIN countries_cities ON cities.id = countries_cities.city_id
            WHERE countries_cities.country_id = ?
        ", [$countryId])->fetchAll(PDO::FETCH_ASSOC);
    }
}