<?php
/*Defineste doua variabile si initializeaza-le cu valori intregi.
Verifica daca cele doua valori sunt in intervalul inchis [10, 99].
Returneaza true daca o cifra apare o singura data (minim)
la ambele valori, spre exemplu 3 in 13 si 33. In caz contrat false.
 */
function inInterval(int $k = 6, int $x = 46, int $y = 56): void
{
    if (($x > 10 && $x < 99) &&
        ($y > 10 && $y < 99)) {

        $convertedX = (string) $x;
        for ($i = 0; $i < strlen($convertedX); $i++) {
            if ($convertedX[$i] !== $k) {
                $i++;
            }
        }
        $c1 = false;

        $convertedY = (string) $y;
        for ($i = 0; $i < strlen($convertedY); $i++) {
            if ($convertedY[$i] !== $k) {
                $i++;
            }
        }
        $c2 = false;

        if ($c1 = false || $c2 = false) {
            echo false;
        }
        echo true;

    } else {
        echo false;
    }
}
inInterval();
