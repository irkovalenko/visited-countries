<?php

include_once "../components/header.php";
include_once "../classes/Country.php";
include_once "../functions.php";
include_once "../Database.php";

$regionInUrl = $_GET["cat"] ?? null;
$db = new Database();
$countries = $db->countries();

$search = !empty($_GET["search"]) ? filter_input(INPUT_GET, "search") : null;

foreach ($countries as $country) {
    $regionSlug = toKebabCase($country["region_name"]); // "Southern Europe" → "southern-europe"
    $matchesRegion = !$regionInUrl || $regionSlug === $regionInUrl;
    $matchesSearch = !$search || stripos($country["name"], $search) !== false;

    if ($matchesRegion && $matchesSearch) {
        echo "<li><a href='/pages/visited_cities.php?country=" . urlencode($country["name"]) . "'>" . $country["name"] . "</a></li>";
    }
}
