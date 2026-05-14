<?php

namespace App\Classes\Repositories;

use App\Interfaces\RepositoryInterface;
use App\Database;


class CountryRepository implements RepositoryInterface
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function all(string $table = 'countries'): array
    {
        $statement = $this->db->query(
            "SELECT countries.*, regions.name AS region_name
         FROM countries
         JOIN regions ON countries.region_id = regions.id
         ORDER BY countries.name"
        );
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function find($table, $id, $field = 'id'): array
    {
        return $this->db->query(
            "SELECT countries.*, regions.name AS region_name
         FROM countries
         JOIN regions ON countries.region_id = regions.id
         WHERE countries.{$field} = ?",
            [$id]
        )->fetchAll(\PDO::FETCH_ASSOC);
    }
}
