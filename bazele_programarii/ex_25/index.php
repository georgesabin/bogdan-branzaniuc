<?php
/* Scrie o functie care testeaza daca un numar intreg este Armstrong sau nu.
Returneaza true daca este numar Armstrong altfel false. Apeleaza functia.
Numar Armstrong: 153 = 1**3 + 5**3 + 3**3 (3 reprezinta numarul de cifre) */

function armstrongVerif($numar): bool
{
    $total = 0;
    $x = $numar;
    $nrCifre=strlen($numar);
    while ($x != 0) {
        $rem = $x % 10;
        $total = $total + pow($rem, $nrCifre);
        $x = $x / 10;
    }
    if ($numar == $total) {

        return true;
    } else {

        return false;
    }

}
armstrongVerif(1634)
?>
