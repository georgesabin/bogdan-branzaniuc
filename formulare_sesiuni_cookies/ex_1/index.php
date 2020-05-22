<?php
/* Creeaza o pagina index.php prin care vei seta in sesiune
un array multidimensional si o pagina process.php prin care
sa accesezi array-ul din sesiune si sa-l afisezi folosind o instructiune repetitiva.
In aceeasi pagina, process.php, afiseaza id-ul sesiunii si in final distruge sesiunea.
Noteaza id-ul sesiunii,
mergi in browser si apasa F12 -> Application si in meniul din stanga expandeaza Cookies si vezi daca PHPSESSID este identic cu cel notat de tine.  */

session_start();
$x = [[1, 2, 3, 4, 5], [100, 122, 133, 144, 155]];

echo 'index';

$_SESSION['values'] = $x;
