<?php

function gaseste_multiplu(int $x = 28): void
{

    if ($x % 7 == 0 || $x % 3 == 0) {
        echo 'true';
    } else {
        echo 'false';
    }

}

gaseste_multiplu();
