<?php
/* Creeaza o functie care primeste trei parametri si calculeaza suma lor.
Daca doua valori sunt egale returneaza a treia valoare. */
function treiParametri(float $x = 79.598, float $n = 79.598, float $j = 91.25)
{
    echo $x + $n + $j;
    echo "<br>";
    if ($x === $n) {
        echo $j;
    } elseif ($n === $j) {
        echo $x;
    } elseif ($j === $x) {
        echo $n;
    }

}
treiParametri();
