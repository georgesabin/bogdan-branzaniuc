<?php

function sameLastDigit(int $x = 5668372462318794680, int $y = 295783123894123840): void
{
    $x = substr($x, -1);
    $y = substr($y, -1);
    if ($x == $y) {
        echo 'true';
    } else {
        echo 'false';
    }
}
sameLastDigit(); 


$x = 10876543;
$y = 67654321;

if (($x % 10) == ($y % 10)) {
    echo 'true';
} else {
    echo 'false';
}
;
