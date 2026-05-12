<?php
include_once "components/header.php";
include_once "classes/repositories/CountryRepository.php";

$repo = new CountryRepository();
$countries = $repo->all();

foreach ($countries as $country) { ?>
    <ul>
        <li>
            <h3><?php echo $country["name"] . "\n"; ?> </h3>
        </li>
    </ul>
<?php }

require_once "components/footer.php";

?>