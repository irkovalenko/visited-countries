<?php

include_once '../components/header.php';
if (isset($_COOKIE)) {
    foreach ($_COOKIE as $cookieName => $cookieValue) {
        if ($cookieName != 'PHPSESSID') {
            echo '</br>';
            echo '<div class="card">';
             $words = explode(':', $cookieValue);
             echo '<p>There once was a person named ' . ($words[0] ?? '__');
             echo ' who wanted to go to ' . ($words[1] ?? '__');
             echo '. </p>';
             echo '<p> ' . ($words[0] ?? '__') . ' wants to ' .  ($words[2] ?? '__') . ' there. <br>';
             echo '</div>';}
        }
    }