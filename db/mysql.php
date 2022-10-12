<?php
    $connection = new mysqli("localhost", "root", "root", "adminapp");

    if (!$connection) {
       die('Db not connected');
    }
?>
