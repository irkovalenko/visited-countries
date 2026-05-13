<?php
include_once __DIR__ . "/../Database.php";
include_once __DIR__ . "/Country.php";
include_once __DIR__ . "/../classes/repositories/CityRepository.php";

class City
{
    public string $name;
    public bool $isCapital;
    public Country $country;
    public string $rating;

    public function __construct(string $name, string $countryName)
    {
        $repo = new CityRepository();
        $data = $repo->find('cities', $name, 'name')[0];

        $this->name      = $data["name"];
        $this->country   = new Country($countryName);
        $this->isCapital = $name == $this->country->getCapital();
        $this->rating = $data["rating"] ?? null;
    }

    public function getRatingBadge(): string
    {
        return match ($this->rating) {
            'super'       => '😍 Super',
            'okay'        => '😐 Okay',
            'never_again' => '😱 Never again',
            default       => ''
        };
    }
}
