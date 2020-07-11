<?php
/* Scrie un program care va stoca intr-un array
cele doua elementele aflate la mijlocul acestui array [1, 5, 7, 9, 11, 13].*/

function doubbleMiddle(array $x): void
{
    $cx = count($x);
    $midX[] = array_slice($x, floor(--$cx / 2), 2);
    var_dump($midX);
}
doubbleMiddle([1, 5, 7, 9, 11, 13, 15, 16]);
