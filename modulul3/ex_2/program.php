<?php
//Scrie un program care citeste de la consola numele a doua fisiere si adauga continutul primului fisier la al doilea fisier.

/*1. Fisierele le creezi tu manual si pui text random in ambele. Tu trimiti din terminal numele fisierelor adica php index.php fisier1.txt fisier2.txt
2. In programul tau php folosind variabila globala $argv iei acele doua nume de fisier si prima data verifici daca
fisierele exista, daca da, atunci adaugi continutul din primul in al doilea, daca nu exit (intrerupi executia programului cu un mesaj sugestiv) */

if ((file_exists($argv[1])) && (file_exists($argv[2]))) {
    $argv[2] = fopen($argv[2], 'a+');
    $argv[1] = file_get_contents($argv[1]);
    fwrite($argv[2], "\n" . $argv[1]);
    fclose($argv[2]);
} else {
    echo 'unul sau mai multe fisiere nu exista';
}
