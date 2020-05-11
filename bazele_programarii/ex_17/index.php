<?php
/* Scrie o functie care primeste ca parametru un array cu valori intregi.
Functia va returna true daca acel array contine 15 sau false daca contine 20. */

function parentArr(array $x = [1, 5, 6, 7, 15, 27, 19]): void
{
    for ($i = 0; $i < count($x); $i++) {
        if ($x[$i] === 15) {
           echo true;
        } else {
            ($x[$i] === 20);
        }
        {
           echo false;
        }

    }
}
parentArr();
