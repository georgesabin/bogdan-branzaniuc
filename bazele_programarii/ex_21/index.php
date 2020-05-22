<?php
/* Creaza logica unui calculator minimal. Logica operatorilor (**; +; -; *; /; %) va fi creata in functii separate.
1. Fiecare functie are doi parametri de tipul int si/sau float (combinate)
2. Afiseaza ceea ce returneaza fiecare functie (rezultatul operatiei)
3. Foloseste return type hint unde este cazul
 */

function adunare(float $x, int $y): void
{
    $z = 0;
    echo $z = $x + $y;
    echo "</br>";
}
adunare(10.3, 5);

function scadere(float $x, int $y): void
{
    $z = 0;
    echo $z = $x - $y;
    echo "</br>";
}
scadere(500.2, 20);

function inmultire(int $x, float $y): void
{
    $z = 0;
    echo $z = $x * $y;
    echo "</br>";

}
inmultire(2, 16.5);

function impartire(int $x, float $y): void
{
    $z = 0;
    echo $z = $x / $y;
    echo "</br>";
}
impartire(10, 2.5);

function exponentiere(int $x, float $y): void
{
    $z = 0;
    echo $z = $x ** $y;
    echo "</br>";
}
exponentiere(2, 5.7);

function calculRest(float $x, int $y): void
{
    $z = 0;
    echo $z = $x % $y;
    echo "</br>";
}
calculRest(100.56, 6);
