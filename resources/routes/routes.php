<?php

session_start();

include('../config/config.php');

function logout($path) {
    session_destroy();
    header('location:', $path);
}

if (isset($_GET['logout'])) logout($path);

if (isset($_POST['register'])) {
    // Register
}

if (isset($_POST['login'])) {
    // login
}

if (isset($_POST['newbook'])) {
    // New book
}