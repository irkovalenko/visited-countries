<?php

use App\Classes\Country;
use App\Classes\Repositories\CountryRepository;

if (!isset($_GET["country"])) return;

$country = new Country($_GET["country"]);
$image = countryImage($country->getData());
?>

<div class="container">
    <?php if (!empty($image)) : ?>
        <img
            src="<?php echo $image["src"]; ?>"
            alt="<?php echo $image["alt"]; ?>"
            class="country-image">
    <?php endif; ?>

    <p>Capital: <?php echo $country->getCapital(); ?></p>
</div>