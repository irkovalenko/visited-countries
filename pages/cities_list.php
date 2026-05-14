<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Classes\Repositories\CityRepository;

include_once __DIR__ . "/../components/header.php";

$countryName = $_GET["country"] ?? null;
$repo = new CityRepository();
$cities = $countryName ? $repo->getCitiesByCountry($countryName) : [];
?>

<?php include_once __DIR__ . "/../components/country.php"; ?>

<ul>
    <?php foreach ($cities as $city) :
        echo
        "<li><a href='/pages/city.php?city="
            . urlencode($city["name"])
            . "&country="
            . urlencode($countryName)
            . "'>"
            . $city["name"]
            . "</a></li>";

    endforeach; ?>
</ul>

<?php include_once __DIR__ . "/../components/footer.php"; ?>