<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visited countries</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/styles.css">

</head>

<body>
    <div class="header">
        <h1 class="branding-title"><a href="/index.php">Visited countries</a></h1>
        <div class ="wrapper">
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
    // display only on cat = European region pages
if (isset($_GET['cat'])) {
    include_once "search.php";
}

?>
</body>
</html>