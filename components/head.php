<?php
session_start()
?>

<?php
$email = $_SESSION['email'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header class="navbar bg-primary d-flex flex-row justify-content-between text-white p-4">
    <a href="/index.php" class="text-white pr-4 h5">Home</a>
    <?php
    if ($email) {
        echo "<div>
                $email
                <a href='/logout.php' class='text-white h5 ml-4'>Log Out</a>
            </div>";
    } else {
        echo "<div>
                <a href='/login.php' class='text-white pr-4 h5'>Log In</a>
                <a href='/register.php' class='text-white h5'>Register</a>
            </div>";
        }
    ?>
</header>
<div class="w-50 p-3 mx-auto mt-5">
    <h1 class="mb-5">
        <?php echo $title; ?>
    </h1>
