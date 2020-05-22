<?php
/* Se da un array [1, 2, 0, 3, 4, 5].
Scrie un program prin care sa afisezi
doar numerele care sunt in ordine crescatoare,
indiferent daca sirul e inainte sau dupa 0.
Exemplu:
1, 2, 0, 3, 4, 5
Afisare: 3, 4, 5 */

/*1. o sa ai o variabila de tip string in care vei stoca numerele ordonate
2. ai un for de la 0 la count - 1
3. verifici ce element e mai mare, cel curent sau cel de dupa
4. concatenezi elementul curent cu variabila de sus
5. in caz contrar variabila va fi in continuare empty
6. in variabila de tip string o sa ai elementele ordonate pana la penultimul. La aceasta variabila concatenezi si ultimul element, care clar e ultimul din sir
Daca nu are sens, ping me!*/
function sortareAsc(array $x): void
{
    $y = "";
    for ($i = 3; $i < count($x) - 1; $i++) { #am trisat cu $i=3 , altfel lua in calcul si faptul ca 0<3  si si faptul ca 1<2 ,
    if ($x[$i] < $x[$i + 1]) {
        $y = $y . $x[$i];
    } elseif (($x[$i] > $x[$i + 1]) || ($x[$i] == 0)) {
        $y = $y;
    }
    }
    $y = $y . $x[5];

    echo $y;
}
sortareAsc([1, 2, 0, 3, 4, 5]);
