<?php

// Connect to db
$connection = mysqli_connect("localhost", "root", "root", "adminapp");

// Check if db is connected
if (!$connection) {
    $error[] = "Database not connected";
}

?>