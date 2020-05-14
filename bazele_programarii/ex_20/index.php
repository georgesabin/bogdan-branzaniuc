<?php

/* Creeaza un program prin care construiesti dinamic un array asociativ cu chei de la 10 la 20,
iar valoarea fiecarei chei va fi valoarea cheii adunat cu valoarea stocata intr-o constanta.
Hint: Foloseste instructiunea while, si do .. while.
Prin valoarea cheii se intelege: ['cheie' => 'valoare']. */

function programD(array $arKeys): void
{
    define("constanta", 10, false);
    $c = constanta;
    $arValues = array();

    for ($i = 0; $i < count($arKeys); $i++) {

        $arValues[] = $arKeys[$i] + $c;
    }

    $nestedAr = array_combine($arKeys, $arValues);
    var_dump($nestedAr);
}
programD([10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20,22]);

/* am reusit sa il rezolv asa, insa timp de o ora am incercat sa gasesc paths pentru varianta cu do while
si cand am revenit la el cu creierul incalzit a venit aceasta varianta, as vrea tare mult sa vad 
varianta cu do while si while, ori il reiau maine la deznodat si gasesc si solutia aceea */ 