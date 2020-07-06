<?php
/* Scrie un program care primeste de la terminal doi parametri si returneaza produsul lor. Daca produsul este mai mare decat 1000 atunci returnezi suma.

Daca parametri nu sunt numere, atunci fa trigger la o eroare.

Trigger eroare:
1. Creeaza o functie care trateaza eroare
2. Fa handle la functie
3. Fa trigger la eroare */

var_dump($argc);
var_dump($argv);

$x = $argv[1];
$y = $argv[2];
set_error_handler('erorica');

if (!is_numeric($x) || !is_numeric($y)) {
    trigger_error('Arde fum si iese Foc', E_USER_WARNING);

} elseif ($x * $y > 1000) {
    echo $x + $y;
} elseif ($x * $y <= 1000) {
    echo $x * $y;
}
function erorica(int $errno, string $errstr): void
{

    echo "[$errno] $errstr";
    die;
}
