<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visited countries</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="icon" href="../img/travel.png" type="image/png">
    <link rel="icon" href="../img/travel.png" sizes="32x32">
    <link rel="icon" href="../img/travel.png" sizes="16x16">

</head>

<body>
    <div class="header">
        <h1 class="branding-title"><a href="/index.php">Visited countries</a></h1>
        <div class="wrapper">
            <ul class="nav">
                <li><a href="/pages/countries_list.php?cat=southern-europe">Southern Europe</a></li>
                <li><a href="/pages/countries_list.php?cat=eastern-europe">Eastern Europe</a></li>
                <li><a href="/pages/countries_list.php?cat=western-europe">Western Europe</a></li>
                <li><a href="/pages/countries_list.php?cat=central-europe">Central Europe</a></li>
                <li><a href="/game/play.php?new=1">Game</a></li>
            </ul>
        </div>
    </div>
    <?php
    if (isset($_GET['cat'])) {
        include_once "search.php";
    }
