<?php
session_start();
if (isset($_GET['save'])) {
    $name = isset($_SESSION['word'][0]) ? $_SESSION['word'][0] : 'unknown';
    $cookieName = $name . time();
    setcookie($cookieName, implode(':', $_SESSION['word']), time() + (86400 * 30), "/"); // Cookie expires in 30 days
    header('location: ../index.php');
    exit;


}