<?php
    if(isset($error)) {
        foreach ($error as $e) {
            echo "<div class='alert alert-danger mt-4'>$e</div>";
        }
    }
?>