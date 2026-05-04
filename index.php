<?php
include_once "components/header.php";
include_once "Database.php";

$db = new Database();
$countries = $db->countries();

foreach ($countries as $country) { ?>
<ul>
 <li><h3><?php echo $country["name"] . "\n"; ?> </h3></li>
</ul>
<?php }

?>