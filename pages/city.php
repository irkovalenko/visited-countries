<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Classes\City;

include_once __DIR__ . "/../components/header.php";

$cityName = $_GET["city"] ?? null;
$countryName = $_GET["country"] ?? null;

$city = new City($cityName, $countryName);
?>

<div style="display: flex; align-items: center; gap: 12px;">
    <h1><?php echo $city->name; ?></h1>
    <?php if ($city->rating) : ?>
        <span class="rating-badge"><?php echo $city->getRatingBadge(); ?></span>
    <?php endif; ?>
</div>

<?php

if ($city->isCapital) : ?>
    <p class="capital-badge">This is the capital of <?php echo $city->country->name; ?></p>
<?php endif; ?>

<?php include_once __DIR__ . "/../components/footer.php"; ?>