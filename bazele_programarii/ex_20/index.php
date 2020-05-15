<?php

/* Creeaza un program prin care construiesti dinamic un array asociativ cu chei de la 10 la 20,
iar valoarea fiecarei chei va fi valoarea cheii adunat cu valoarea stocata intr-o constanta.
Hint: Foloseste instructiunea while, si do .. while.
Prin valoarea cheii se intelege: ['cheie' => 'valoare']. */
echo 'rezolvare fara while:';
echo "</br></br>";
function programD(array $arKeys): void
{
    define("constanta", 10, false);
    $arValues=[];

    for ($i = 0; $i < count($arKeys); $i++) {

        $arValues[] = $arKeys[$i] + constanta;
    }

    $nestedAr = array_combine($arKeys, $arValues);
    var_dump($nestedAr);
}
programD([10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 22]);

echo "</br></br>";
echo 'rezolvare cu while:';
echo "</br></br>";

function programD2(array $arKeys): void
{
    $start = 10;
    while ($start <= 20) {
        $arrayDinamic[] = $start + constanta;
        $start++;
    }
    $arrayDinamic = array_combine($arKeys, $arrayDinamic);
    var_dump($arrayDinamic);
}
programD2([10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]);