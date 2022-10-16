<?php
    include "db/mysql.php";
    global $connection;
    session_start();

    if ($_POST["submit"]) {
        // User inputs
        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        // Prevent SQL Injections
        $email = stripcslashes($email);
        $password = stripcslashes($password);
        $email = mysqli_real_escape_string($connection,$email);
        $password = mysqli_real_escape_string($connection,$password);

        if ($email && $password) {
            // Query for searching user with users input
            $validateQuery = "SELECT * FROM users WHERE email='$email' && password='$password'";

            // Send a request to the DB and get data back
            $result = mysqli_query($connection, $validateQuery);

            $count = mysqli_num_rows($result);

            $row = mysqli_fetch_assoc($result);

            if($count == 1) {
                $_SESSION["loggedIn"] = true;
                $_SESSION["email"] = $row["email"];
                $_SESSION["UserType"] = $row["user_type"];
                header("Location: index.php");
            } else {
                $errors[] = "Invalid credentials!";
            }
        }
    }