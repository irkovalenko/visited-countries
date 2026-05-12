<?php

interface RepositoryInterface
{

    // retrieving all items from the table
    public function all(string $table);

    // retrieving single item from the table
    public function find(string $table, string $id, string $filed = 'id');
}
