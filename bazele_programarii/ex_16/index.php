<?php
/* Scrie un program pentru a crea un array care va contine elemetele din mijloc ale doua array-uri cu valori intregi, de lungime 5.
Array 1: 10, 20, -30, -40, 30
Array 2: 10, 20, 30, 40, 30
Array nou: -30, 30 */

function mijlocitor(): void
{
    $x = [10, 20, -30, -40, 30, 90, 45, 67, 1234, 52, 12];
    $y = [10, 20, 30, 40, 30, 1, 1, 1, 1, 1, 1, 2, 3, 54, 2, 5, 1, 34, 2, 1, 1];
    $cx = count($x);
    $cy = count($y);
    $middleX = array_slice($x, floor($cx / 2), 1);
    $middleY = array_slice($y, floor($cy / 2), 1);
    $z = [$middleX, $middleY];
    var_dump($z);
}
mijlocitor();
