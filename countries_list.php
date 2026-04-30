<?php

include_once "components/header.php";
include_once "data.php";

foreach ($countries as $country) {
    if ($country["category"] === $_GET["cat"]) { ?>
<ul>
 <li><h3><?php echo $country["name"] . " - " . $country["capital"] . "\n"; ?> </h3></li>
</ul>
<?php }
}

?>