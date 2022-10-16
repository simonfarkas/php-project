<?php
global $title;
session_start();
$email = $_SESSION["email"];
$userType = $_SESSION["UserType"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
</head>
<body>
<header>
    <div class="d-flex flex-row w-full bg-primary py-2 justify-content-between align-items-center">
        <div class="d-flex flex-row justify-content-center ml-5">
            <h3><a href="/" class="text-white text-decoration-none">Home</a></h3>
            <?php
                if($userType == 'Admin') {
                    echo "<h3><a href='/admin.php' class='text-white text-decoration-none ml-4 h6'>Admin</a></h3>";
                }
            ?>
        </div>
        <?php
        if (!$_SESSION['loggedIn']) {
            echo "
                    <div class='d-flex mr-5'>
                        <h5><a href='/login.php' class='text-white text-decoration-none'>Log In</a></h5>
                        <h5><a href='/register.php' class='text-white ml-4 text-decoration-none'>Register</a></h5>
                    </div>
                ";
        } else {
            echo "
                    <div class='d-flex mr-5 align-items-center'>
                        <h5 class='text-white'>$email</h5>
                        <h5><a href='/logout.php' class='text-white ml-4 text-decoration-none'>Log Out</a></h5>
                    </div>
                ";
        }
        ?>
    </div>
</header>
<div class="w-50 mx-auto">
    <h1 class="mt-5"><?php echo $title; ?></h1>

