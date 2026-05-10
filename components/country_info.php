<?php
include_once "../functions.php";
include_once "../Database.php";
include_once "../classes/Country.php";

$db = new Database();
$countries = $db->countries();
$image = countryImage($countries);
$country = new Country($_GET["country"]);
?>

<html>

<body>

    <div class="container">

        <?php if (!empty($image)) : ?>
            <img
                src="<?php echo $image["src"]; ?>"
                alt="<?php echo $image["alt"]; ?>"
                class="country-image">
        <?php endif; ?>

    </div>

    <p> Capital: <?php
                    echo $country->getCapital($_GET["country"]); ?> </p>

</body>

</html>