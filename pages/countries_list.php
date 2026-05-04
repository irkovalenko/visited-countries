<?php

include_once "../components/header.php";
include_once "../Database.php";
include_once "../functions.php";

$region = $_GET["cat"] ?? null;
$db = new Database();

$countries = $db->countries();
$regions = $db->regions();
$countriesWithRegions = regionAssigner($countries, $regions);

foreach ($countriesWithRegions as $country) {
    if ($region && $country["region_id"] === $region) {
        echo "<li><h3><a href='/pages/visited_cities.php?country=" . $country["name"] . "'>" . $country["name"] . "</a></h3></li>";
    }
}

?>