<?php
session_start();
$newgame = filter_input(INPUT_GET, 'new', FILTER_VALIDATE_INT);
if ($newgame == 1) {
    session_destroy();
    session_start();
    header('location: play.php?new=1');
    exit;
}

$word1 = isset($_SESSION['word'][0]) ? $_SESSION['word'][0] : '__';
$word2 = isset($_SESSION['word'][1]) ? $_SESSION['word'][1] : '__';
$word3 = isset($_SESSION['word'][2]) ? $_SESSION['word'][2] : '__';

include_once '../components/header.php';

echo '<h1>Long story short</h1>';
?>

<div class="card">
    <?php

echo '<p>There once was a person named ' . $word1;
echo ' who wanted to go to ' . $word2;
echo '. </p>';
echo '<p> ' . $word1 . ' wants to ' .  $word3 . ' there. <br>';
?>
</div>

<div class="card-buttons-container">
<?php
echo ' <div class="card-button"><a href="cookie.php?save">Save Story</a></div>';
echo ' <div class="card-button"><a href="play.php?new=1">New Game</a></div>';
echo ' <div class="card-button"><a href="other_stories.php">Other Stories</a></div>';
echo ' <div class="card-button"><a href="../index.php">X</a></div>';
?>
</div>
