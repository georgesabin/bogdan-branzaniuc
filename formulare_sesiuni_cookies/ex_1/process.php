<?php

session_start();

if (isset($_SESSION['values'])) {
    foreach ($_SESSION['values'] as $values) {
        foreach ($values as $value) {
            echo $value;
            echo "<br>";
        }

    }
}

echo session_id();
//session_destroy();
