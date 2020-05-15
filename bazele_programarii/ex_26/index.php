<?php

/* Creeaza o functie ce afiseaza 1-2-3-4-5-6-7-8-9-10 pe o singura linie.
Linia nu trebuie sa apara la inceput si nici la sfarsit-ul sirului,
adica -1-2-3-4-5-6-7-8-9-10-. Functia va primi un parametru de tip int. Apeleaza functia. */

function line(int $x = 17): void
{
    
        

    while ($x > -15) {
        $x = $x - 1;
        echo $x;
        echo",";
    }
}
line();
