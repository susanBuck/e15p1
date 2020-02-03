<?php
session_start();

$results = false;

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
}

require 'index-view.php';
