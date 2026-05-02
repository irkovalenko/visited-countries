<?php

function categoryAssigner(array $countries) : array {
foreach ($countries as $key => $country) {
    if (str_starts_with($country["id"], "1")) {
        $countries[$key]["category"] = "southern-europe";
    } elseif (str_starts_with($country["id"], "2")) {
        $countries[$key]["category"] = "eastern-europe";
    } elseif (str_starts_with($country["id"], "3")) {
        $countries[$key]["category"] = "western-europe";
    } elseif (str_starts_with($country["id"], "4")) {
        $countries[$key]["category"] = "central-europe";
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

function countryCapital(array $countries) : string {
    foreach ($countries as $country) {
        if ($country["name"] === $_GET["country"] ?? null)
        {
            return $country["capital"];
        }
}
return "";
}
