<?php
include_once "../components/header.php";
include_once "../classes/repositories/CountryRepository.php";
include_once "../functions.php";

$regionInUrl = $_GET["cat"] ?? null;

$search = !empty($_GET["search"]) ? filter_input(INPUT_GET, "search") : null;

$repo = new CountryRepository();
$countries = $repo->all();
?>

<main>

    <ul>
        <?php
        foreach ($countries as $country) {
            $regionSlug = toKebabCase($country["region_name"]);
            $matchesRegion = !$regionInUrl || $regionSlug === $regionInUrl;
            $matchesSearch = !$search || stripos($country["name"], $search) !== false;

            if ($matchesRegion && $matchesSearch) {
                echo "<li><a href='/pages/visited_cities.php?country="
                    . urlencode($country["name"]) . "'>"
                    . $country["name"] . "</a></li>";
            }
        }
        ?>
    </ul>
</main>

<?php include_once "../components/footer.php"; ?>