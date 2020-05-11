<?php
/* Scrie un program pentru a crea un array care va contine elemetele din mijloc ale doua array-uri cu valori intregi, de lungime 5.
Array 1: 10, 20, -30, -40, 30
Array 2: 10, 20, 30, 40, 30
Array nou: -30, 30 */

function mijlocitor():void
{
    $x=[10, 20, -30, -40, 30];
    $y=[10, 20, 30, 40, 30];
    $midx= array_slice($x,2,1);
    $midy= array_slice($y,2,1);
    $z=[$midx,$midy];
    var_dump($z);
}
mijlocitor();