<?php
require "db/mysql.php";
global $connection;

if (isset($_POST["submit"])) {

    // User inputs
    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    // Prevent SQL Injection
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    // Check if user already exist
    $select = "SELECT * FROM users WHERE email='$email'";

    // Send a request to the DB
    $result = mysqli_query($connection, $select);

    // Return data to a assoc array
    $row = mysqli_fetch_assoc($result);

    // Check how many rows do exist in the array
    $count = mysqli_num_rows($result);

    // Check if user does know the admin secret, if he does, he is an admin, else he is a user
    if ($email === "admin@gmail.com" && $password === "adminsecret123") {
        $userType = "Admin";
    } else {
        $userType = "User";
    }

    // If there is at least one row with the email, die
    if ($count > 0) {
        $error[] = "User already exists!";
        die();
    } else {
        // Register user
        $insert = "INSERT INTO users(email,password,user_type) VALUES ('$email', '$password', '$userType')";
        // Send request to the DB
        mysqli_query($connection, $insert);
        // Redirect to login page
        header("Location: login.php");
    }
}

?>