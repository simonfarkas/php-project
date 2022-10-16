<?php
    $title = "Register";
    include "components/head.php";
    include "logic/register.logic.php";
?>
<form class="mt-5" method="POST" action="register.php">
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>
    <?php include "inc/errors.php" ?>
    <input type="submit" class="btn btn-primary" name="submit">
</form>
<?php
    include "components/footer.php";
?>
