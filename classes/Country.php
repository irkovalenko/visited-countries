<?php
include_once "../Database.php";

class Country
{
    public string $name;
    private string $capital;
    public string $region;
    public int $regionId;

    public function __construct(string $name)
    {
        $db = new Database();
        $data = $db->getCountry($name);
        $this->capital = $data["capital"];
        $this->region = $data["region_name"];
    }


    public function getCapital(string $name)
    {
        if ($name === ($_GET["country"] ?? null)) {
            return $this->capital;
        }
    }
}
