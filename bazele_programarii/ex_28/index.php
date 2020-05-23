<?php
/*
Scrie o functie care sa calculeze si sa returneze factorialul
dintr-un numar folosind o instructiune de tip for. Numarul va
fi trimis ca parametru. Foloseste return type pentru functie. Apeleaza functia.
 */

function factorialX(int $x): string

{

    $fact = 1;
    for ($i = $x; $i >= 1; $i--) {
        $fact = $fact * $i;
    }
    return $fact;

}
factorialX(10);
