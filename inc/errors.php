<?php
if(isset($errors)) {
    foreach ($errors as $e) {
        echo "<div class='alert alert-danger mt-4'>$e</div>";
    }
}
?>