<?php
include_once __DIR__ . "/../../Database.php";
require_once __DIR__ . "/../../interfaces/RepositoryInterface.php";

class CountryRepository implements RepositoryInterface
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function all(string $table = "countries"): array
    {
        return $this->db->query(
            "SELECT countries.id, countries.name, countries.capital, countries.region_id, regions.name AS region_name
         FROM countries
         JOIN regions ON countries.region_id = regions.id
         ORDER BY countries.name"
        )->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find(string $table, $id, string $field = 'id'): array
    {
        return $this->db->query(
            "SELECT countries.*, regions.name AS region_name
         FROM countries
         JOIN regions ON countries.region_id = regions.id
         WHERE countries.{$field} = ?",
            [$id]
        )->fetchAll(PDO::FETCH_ASSOC);
    }
}
