<?php
session_start();
$total = 3;
$page = filter_input(INPUT_GET, 'p', FILTER_VALIDATE_INT);
$newgame = filter_input(INPUT_GET, 'new', FILTER_VALIDATE_INT);

if ($newgame == 1 || empty($page)) {
    session_destroy();
    session_start();
    $page = 1;
}

if (isset($_POST["word"])) {
    $_SESSION["word"][$page-2] = htmlspecialchars($_POST["word"], ENT_QUOTES, 'UTF-8');
}

if ($page > $total) {
    header('location: story.php');
    exit;
}

include_once '../components/header.php';

echo "<h1>Step $page of $total</h1>";

echo '<form method="post" action="play.php?p=' . ($page+1) . '">';
echo '<div class="form-group form-group-lg">';

switch ($page) {
    case 1:
        echo '
            <label class="control-label h2" for="word">Enter your name</label>
            <input class="form-control" type="text" name="word" id="word" placeholder="name">
            ';
        break;
    case 2:
        echo '
            <label class="control-label h2" for="word">Enter the place you want to visit</label>
            <input class="form-control" type="text" name="word" id="word" placeholder="Place">
            ';
        break;
    default:
        echo '
            <label class="control-label h2" for="word">Enter what you want to do there</label>
            <input class="form-control" type="text" name="word" id="word" placeholder="verb">
            ';
        break;
}
echo '</div>
  <button type="submit">Submit</button>
</form>
';