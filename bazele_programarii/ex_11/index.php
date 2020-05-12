<?php
/*Scrie o functie cu doi parametri.
Daca valorile celor doi parametri au acelasi rest cand sunt impartite la 5,
vei returna parametrul cu valoarea cea mai mica. Daca valorile parametrilor sunt egale, vei returna 0. */

function restFunction(int $x = 137, int $y = 67): bool
{

    if ($x % 5 == $y % 5) {
        if ($x < $y) {
            echo $x;
        } elseif($y < $x) {
            echo $y;
        } else {
            return 0;
        }
    } else {
         return false;
        }
}


restFunction();
