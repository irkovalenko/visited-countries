<?php

include_once "../components/header.php";
include_once "../components/country_info.php";
include_once "../data.php";

foreach ($countries as $country) {
    if ($country["name"] === $_GET["country"]) { ?>

 <li><h3><?php echo implode("<br>", $country["visited cities"]); ?> </h3></li>

<?php }
}

?>