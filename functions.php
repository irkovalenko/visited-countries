<?php

//assigning caterogy to countries array based on their id

include_once "data.php";

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