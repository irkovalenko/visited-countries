<?php

include_once __DIR__ . "/../components/header.php";
include_once __DIR__ . "/../components/country_info.php";
include_once __DIR__ . "/../functions.php";
include_once __DIR__ . "/../Database.php";

$countryName = $_GET["country"] ?? null;
$db = new Database();

if ($countryName) {
    $country = $db->getCountryByName($countryName);

    if ($country) {
        $cityRows = $db->getVisitedCitiesByCountry($country["id"]);

        foreach ($cityRows as $cityRow) {
            echo "<li>" . $cityRow["name"] . "</li>";
        }
    }
}

?>