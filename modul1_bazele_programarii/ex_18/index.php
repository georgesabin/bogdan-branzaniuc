<?php
/* Se dau doua array-uri [10, 20, -30] si [10, 20, 30].
Calculeaza suma elementelor si afiseaza array-ul ce contine suma elementelor cea mai mare.
ATENTIE: Nu se va folosi functia built-in array_sum() */

function doiArray($sumaB = 0, $sumaA = 0): void
{
    $a = [1, 2, 3, 6, 7, 8, 9];
    $b = [167, 256, 2314, 231];

    function aflaSuma(array $x): int
    {

        $s = 0;
        for ($i = 0; $i < count($x); $i++) {
            $s = $s + $x[$i];
            return $s;
        }

    }
    $sumaA = aflaSuma($a);
    $sumaB = aflaSuma($b);
    if ($sumaA > $sumaB) {
        var_dump($a);
    } elseif ($sumaA < $sumaB) {
        var_dump($b);
    }
}
doiArray();
