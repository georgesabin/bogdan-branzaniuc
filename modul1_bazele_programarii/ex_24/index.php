<?php
/* Scrie o functie care verifica daca un numar este mai mare decat 20, 30, 40
folosind operatorul ternar. Afiseaza un mesaj sugestiv pentru fiecare verificare. Apeleaza functia. */
function verifyTernar(int $x): void
{

    echo ($x > 20) ? "numarul este mai mare decat 20" : "numarul este mai mic decat 20";
    echo "</br>";
    echo ($x > 30) ? "numarul este mai mare decat 30" : "numarul este mai mic decat 30";
    echo "</br>";
    echo ($x > 40) ? "numarul este mai mare decat 40" : "numarul este mai mic decat 40";
    echo "</br>";

}
verifyTernar(35);
