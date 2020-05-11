<?php
/* Scrie o functie care calculeaza suma a trei valori intregi trimise ca parametri.
Daca una din valori este 13 nu o vei lua in calcul, dar nici valoarea PARAMETRILOR din dreapta. */
function macaroane(int $f = 14, int $o = 10, int $c = 13): int
{
    if ($f == 13) {
        echo 0;
    } elseif ($o == 13) {
        echo $f;
    } elseif ($c == 13) {
        echo $f + $o;
    } else {
        echo $f + $o + $c;
    }
}
macaroane();
