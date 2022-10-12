<?php
$title = "Login";
include "components/head.php";
include "logic/login.logic.php"
?>
<form action="login.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="d-flex flex-row justify-content-between align-items-center">
        <input type="submit" name="submit" class="btn btn-primary">
        <a href="register.php">Register</a>
    </div>
    <?php include('inc/errors.php') ?>
</form>
<?php include "components/footer.php" ?>
