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
        return $this->db->countries();
    }

    public function find($table, $id, $field = 'id'): array
    {
        $statement = $this->db->prepare("SELECT * FROM {$table} WHERE {$field} = ?");
        $statement->execute([$id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
