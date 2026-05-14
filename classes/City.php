<?php

namespace App\Classes;

use App\Database;
use App\Classes\Repositories\CityRepository;
use App\classes\Country;


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
