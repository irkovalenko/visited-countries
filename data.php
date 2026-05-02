<?php
include_once "functions.php";

// Southern Europe (IDs starting with 1)
$countries[] = ["id" => "101", "name" => "Italy",    "capital" => "Rome",       "visited cities" => ["Rome", "Venice", "Genova", "Cesenatico", "Milan"]];
$countries[] = ["id" => "102", "name" => "Croatia",  "capital" => "Zagreb",     "visited cities" => ["Crikvenica"]];
$countries[] = ["id" => "103", "name" => "Bulgaria", "capital" => "Sofia",      "visited cities" => ["Balchik"]];
$countries[] = ["id" => "104", "name" => "Spain",    "capital" => "Madrid",     "visited cities" => ["Barcelona", "Calella"]];
$countries[] = ["id" => "105", "name" => "Portugal", "capital" => "Lisbon",     "visited cities" => ["Lisbon", "Sintra", "Cascais"]];
$countries[] = ["id" => "106", "name" => "Greece",   "capital" => "Athens",     "visited cities" => ["Athens", "Thessaloniki", "Piraeus", "Sounio", "Kos", "Rhodes", "Corfu"]];
$countries[] = ["id" => "107", "name" => "Cyprus",   "capital" => "Nicosia",    "visited cities" => ["Paphos", "Ayia Napa", "Protaras", "Paralimni"]];

// Eastern Europe (IDs starting with 2)
$countries[] = ["id" => "201", "name" => "Ukraine",        "capital" => "Kyiv",       "visited cities" => ["Kyiv", "Kharkiv", "Izium", "Luhansk", "Yalta", "Alushta", "Feodosiya", "Yevpatoria", "Truskavets"]];
$countries[] = ["id" => "202", "name" => "Russia",         "capital" => "Moscow",     "visited cities" => ["Saint Petersburg", "Sosnovyj Bor"]];

// Western Europe (IDs starting with 3)
$countries[] = ["id" => "301", "name" => "Germany",         "capital" => "Berlin",    "visited cities" => ["Wernigerode", "Nettetal", "Weeze", "Kleve"]];
$countries[] = ["id" => "302", "name" => "The Netherlands", "capital" => "Amsterdam", "visited cities" => ["Amsterdam", "Utrecht", "Den Haag", "Almere", "Zwolle", "Amersfoort", "Arnhem", "Deventer", "Rijssen", "Venlo", "Roermond", "Maastricht", "Eindhoven", "Lelystad", "Venray"]];

// Central Europe (IDs starting with 4)
$countries[] = ["id" => "401", "name" => "Poland",         "capital" => "Warsaw",     "visited cities" => ["Warsaw", "Lublin", "Krakow", "Wroclaw", "Gdansk", "Naleczow", "Sandomierz", "Kazimierz Wielki", "Katowice", "Rzeszow", "Zakopane"]];
$countries[] = ["id" => "402", "name" => "Austria",  "capital" => "Vienna",    "visited cities" => ["Vienna"]];
$countries[] = ["id" => "403", "name" => "Hungary",  "capital" => "Budapest",  "visited cities" => ["Budapest"]];
$countries[] = ["id" => "404", "name" => "Czech Republic", "capital" => "Prague",     "visited cities" => ["Prague"]];
$countries[] = ["id" => "405", "name" => "Slovakia",       "capital" => "Bratislava", "visited cities" => ["Bratislava"]];

$countries = categoryAssigner($countries);

