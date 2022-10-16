<?php
    include "db/mysql.php";
    global $connection;

    if($_POST["submit"]) {
        // User inputs
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Prevent SQL Injections
        $email = stripcslashes($email);
        $password = stripcslashes($password);
        $email = mysqli_real_escape_string($connection,$email);
        $password = mysqli_real_escape_string($connection,$password);

        if($password && $email) {

            // Check if email is registered
            $userExistQuery = "SELECT * FROM users WHERE email='$email'";

            // Send a request to the DB and save it to the variable
            $result = mysqli_query($connection,$userExistQuery);

            // Check how many rows does a result have
            $count = mysqli_num_rows($result);

            $userType = "";

            // Check if user enters admin secret
            if($email == 'admin@gmail.com' && $password == "adminsecret123") {
                $userType = "Admin";
            } else {
                $userType = "User";
            }

            // If a row does exist, throw an error, otherwise register user
            if($count > 0) {
                $errors[] = "User already exists!";
            } else {
                // Hash password
                $hashPassword = md5($password);
                // Query for register
                $query = "INSERT INTO users(email,password,user_type) VALUES ('$email','$hashPassword', '$userType')";
                // Send a INSERT query
                mysqli_query($connection,$query);
                header('Location:login.php');
            }
        }
    }

