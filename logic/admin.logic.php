<?php

include "db/mysql.php";
session_start();

// If user type is not Admin, redirect him to the home page
if($_SESSION['user_type'] != 'Admin') {
    header('Location:index.php');
}

?>
