<?php
include_once "../Database.php";

function regionAssigner(array $countries, array $regions): array {
    $regionLookup = [];
    foreach ($regions as $region) {
        $regionLookup[(int)$region["id"]] = strtolower(str_replace(" ", "-", $region["name"]));
    }

    foreach ($countries as $key => $country) {
        $region_id = (int)$country["region_id"]; // cast to int
        if (isset($regionLookup[$region_id])) {
            $countries[$key]["region_id"] = $regionLookup[$region_id];
        }
    }

    return $countries;
}

function countryImage(array $countries) : array {
    foreach ($countries as $country) {
        if ($country["name"] === $_GET["country"] ?? null)
        {
            $fileName = strtolower($country["capital"]);
            $path = "../img/" . $fileName . ".png";
            
            if (file_exists($path)) {
                return ["src" => $path, "alt" => $country["capital"]];
            }
        }
}
return [];
}


function countryCapital(array $countries): string {
    foreach ($countries as $row) {
        if ($row['name'] === ($_GET["country"] ?? null)) {
            return $row["capital"];
        }
    }
    return "";
}
