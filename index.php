<?php
session_start();

$results = false;

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $_SESSION['results'] = null;
}

require 'index-view.php';
