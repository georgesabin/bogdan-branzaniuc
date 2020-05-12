<?php
/* Scrie un program PHP care roteste un array cu numere intregi de lungime 4 in directia stanga si il vei afisa.
Array original: 10, 20, 30, 40
Array rotit: 40, 30, 20, 10 */
function customFor(array $y): void
{

    for ($i = count($y); $i > 0; $i--) {
         $r[] = $y[$i];
    }
    var_dump($r);

}customFor([1, 6, 2]);

echo "</br></br></br></br></br>";

function customReverse(array $x): void
{

    krsort($x);
    var_dump($x);

}

customReverse([10, 20, 30, 40, 1234, 1234, 5435341244, 234234345, 12354123, 54231512, 2112312, 213]);
