<?php

/* Creeaza o functie ce afiseaza 1-2-3-4-5-6-7-8-9-10 pe o singura linie.
Linia nu trebuie sa apara la inceput si nici la sfarsit-ul sirului,
adica -1-2-3-4-5-6-7-8-9-10-. Functia va primi un parametru de tip int. Apeleaza functia. */

function line(int $x = 1): void
{
    $pref = 'astazi am invatat sa numaram';
    $suf = 'maine invatam sa....';
    $c = '';
    while ($x <= 10) {
        $c = $c . $x;
        $x = $x + 1;
    }

    echo $pref . $c . $suf;

}
line();
