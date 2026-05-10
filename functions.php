<?php
include_once "../Database.php";

function countryImage(array $countries): array
{
    foreach ($countries as $country) {
        if ($country["name"] === $_GET["country"] ?? null) {
            $fileName = strtolower($country["capital"]);
            $path = "../img/" . $fileName . ".png";

            if (file_exists($path)) {
                return ["src" => $path, "alt" => $country["capital"]];
            }
        }
    }
    return [];
}

function toKebabCase(string $string): string
{
    return strtolower(str_replace(" ", "-", $string));
}
