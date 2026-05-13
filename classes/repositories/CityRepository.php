<?php
include_once __DIR__ . "/../../Database.php";
require_once __DIR__ . "/../../interfaces/RepositoryInterface.php";

class CityRepository implements RepositoryInterface
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function all(string $table = "cities"): array
    {
        return $this->db->query("SELECT * FROM cities")->fetchAll(PDO::FETCH_ASSOC);
    }


    public function find($table, $id, $field = 'id'): array
    {
        return $this->db->query(
            "SELECT * FROM {$table} WHERE {$field} = ?",
            [$id]
        )->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCitiesByCountry(string $countryName): array
    {
        return $this->db->query(
            "SELECT cities.* FROM cities
         JOIN countries_cities ON cities.id = countries_cities.city_id
         JOIN countries ON countries_cities.country_id = countries.id
         WHERE countries.name = ?",
            [$countryName]
        )->fetchAll(PDO::FETCH_ASSOC);
    }
}
