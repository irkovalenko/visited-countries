<?php
include_once "../functions.php";
include_once "../Database.php";

$db = new Database();
$countries = $db->countries();
$image = countryImage($countries);
?>

<html>
<body>

<div class="container">

    <?php if (!empty($image)) : ?>
        <img 
            src="<?php echo $image["src"]; ?>"
            alt="<?php echo $image["alt"]; ?>"
            class="country-image"
        >
    <?php endif; ?>

</div>

<p> Capital: <?php echo countryCapital($countries); ?> </p>

</body>
</html>