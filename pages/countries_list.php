<?php

include_once "../components/header.php";
include_once "../data.php";


$category = $_GET["cat"] ?? null;

foreach ($countries as $country) {
    if ($category && $country["category"] === $category) {
 echo "<li><h3><a href='/pages/visited_cities.php?country=" . $country["name"] ."'>" . $country["name"] . "</a></h3></li>";
}
}

?>