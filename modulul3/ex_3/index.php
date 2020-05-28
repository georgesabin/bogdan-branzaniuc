<?php
/* 1. Calculeaza media salariilor per functie. Afisesaza fiecare medie in parte.
2. Daca data vechime angajat >= 1 an, calculeaza si adauga bonusul la salariu.
3. Afiseaza in browser un tabel de forma:
Nume	Prenume	Functie	Salariu Nou	Bonus	Data Angajare
Sabin	George	Web Developer	2000 E	1000 E	01-10-2020  */

$fisier = file_get_contents('companie.dat.txt');
list($a1, $a2, $a3, $a4, $a5) = explode("\n", $fisier);
// aici cred ca invat mai tarziu, cum sa ii zic sa creeze variabile noi pana la a-N, in functie de cate randuri/angajati se gasesc in fisierul flat

function callAngajat($cutarica)
{
    list($nume, $prenume, $functie, $salariu, $bonus, $dataAngajare) = explode(",", $cutarica);

    echo 'nume:' . $nume, "<br>";
    echo 'prenume:' . $prenume, "<br>";
    echo 'functie:' . $functie, "<br>";
    echo 'salariu:' . $salariu, "<br>";
    echo 'bonus:' . $bonus, "<br>";
    echo 'data angajare=' . $dataAngajare, "<br>";

}

callAngajat($a1);

/* ma gandesc pe mai departe sa pun alta functie sa faca in loc de list,
 cate un array asociativ pentru fiecare $a N care este chemat in pozitia lui $cutarica.
 si sa lucrez cu if-uri pentru urmatoarele taskuri ale exercitiului,
 iar la final cu array-ul asociativ facut pentru pozitia $cutarica, sa pun in /td-uri $cutarica[$nume], $cutarica[prenume], etc .
 ce spui despre aceasta abordare ? <3  */