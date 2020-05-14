<?php
/* Se da urmatorul array [1, 2, 3, 4, 5]. Sterge elementul de pe pozitia 3 si normalizeaza array-ul (reindexeaza-l).
Vezi functia array_values() */
function delPos3(array $x): void
{
    unset($x[3]);
    $x = array_values($x);
    var_dump($x);
}
delPos3([1, 2, 3, 4, 5]);
