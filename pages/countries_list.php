<?php

include_once "../components/header.php";
include_once "../Database.php";
include_once "../functions.php";

$region = $_GET["cat"] ?? null;
$db = new Database();

$search = !empty($_GET["search"]) ? filter_input(INPUT_GET, "search") : null;

$countries = $db->countries();
$regions = $db->regions();
$countriesWithRegions = regionAssigner($countries, $regions);


foreach ($countriesWithRegions as $country) {
    $matchesRegion = !$region || $country["region_id"] === $region;
    $matchesSearch = !$search || stripos($country["name"], $search) !== false;

    if ($matchesRegion && $matchesSearch) {
        echo "<li><h3><a href='/pages/visited_cities.php?country=" . urlencode($country["name"]) . "'>" . $country["name"] . "</a></h3></li>";
    }
}
?>