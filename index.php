<?php

session_start();

if (isset($_SESSION['results'])) {
    # The extract method will convert all keys in this array into variables
    extract($_SESSION['results']);

    # Reset the session so we don't see the same results on page refresh
    $_SESSION['results'] = null;
}

require 'index-view.php';