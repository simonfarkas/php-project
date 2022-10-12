<?php
require "db/mysql.php";
global $connection;
session_start();


if (isset($_POST["submit"])) {
    // User inputs
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    // Prevent SQL Injection
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    // SQL Query to check if user exist with that email and password
    $select = "SELECT * FROM users WHERE email='$email' && password='$password'";

    // Send a request to the DB
    $result = mysqli_query($connection, $select);

    // Return data to a assoc array
    $row = mysqli_fetch_assoc($result);

    // Check how many rows do exist in the array
    $count = mysqli_num_rows($result);

    // If there is only 1 row (user exist with the email and password), log him in
    if ($count == 1) {
        $_SESSION["email"] = $row["email"];
        $_SESSION["user_type"] = $row["user_type"];
        header("Location:index.php");
    } else {
        $error[] = "Invalid username or password!";
        die();
    }
}

?>