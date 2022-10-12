<?php
$title = "Register";
include "components/head.php";
include "logic/register.logic.php"
?>
<form action="register.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <input type="submit" name="submit" class="btn btn-primary">
    <?php include('inc/errors.php') ?>
</form>
<?php include "components/footer.php" ?>
