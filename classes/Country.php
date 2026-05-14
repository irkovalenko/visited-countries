<?php

namespace App\Classes;

use App\Database;
use App\Classes\Repositories\CountryRepository;

class Country
{
    public string $name;
    private string $capital;
    public string $region;
    public int $regionId;

    public function __construct(string $name)
    {
        $repo = new CountryRepository();
        $data = $repo->find('countries', $name, 'name')[0];
        $this->name    = $data["name"];
        $this->capital = $data["capital"];
        $this->region  = $data["region_name"];
    }


    public function getCapital(): string
    {
        return $this->capital;
    }

    public function getData(): array
    {
        return [
            "name"        => $this->name,
            "capital"     => $this->capital,
            "region_name" => $this->region
        ];
    }
}
