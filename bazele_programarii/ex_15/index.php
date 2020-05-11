<?php
/* Scrie un program PHP care roteste un array cu numere intregi de lungime 4 in directia stanga si il vei afisa.
Array original: 10, 20, 30, 40
Array rotit: 40, 30, 20, 10 */

function titirez(array $x = [10, 20, 30, 40]): void
{
    var_dump(array_reverse($x));
}
titirez();
