<!DOCTYPE html>
<html lang="en">
<head>
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
            </ul>
        </div>
    </div>
    <div class="search"></div>
    <form method="get" action="/pages/countries_list.php">
        <label for="search">Search for a country:</label>
        <input type="text" name="search" id="search">
        <input type="submit" value="Search">
    </form>
</body>
</html>