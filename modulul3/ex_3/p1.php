<?php
function medieSalarJob(string $x)
{
    $salarii = [];
    $fisier = file_get_contents('companie.dat.txt');
    $angajati = explode("\n", $fisier);
#var_dump($angajati);
    for ($i = 0; $i < count($angajati); $i++) {
        $z = explode(",", $angajati[$i]);
        if ($z[2] === $x) {
            $salarii[] = $z[3];
            $numeAngj[] = $z[0];} else {
            0;
        }
    }
    if (empty($salarii)) {
        0;
    } else {
        $r = array_sum($salarii);
        $m = $r / count($salarii);
    }
    ;
    if (empty($salarii)) {
        echo "nu exista jobul", '&nbsp', '"', $x, '&nbsp', '"', '&nbsp', "si daca exista, nu avem cobai";
        echo "</br>";
    } else {
        echo 'media salariilor jobului de', $x, '&nbsp', 'din compania noastră', '&nbsp', 'este', '&nbsp', $m, '$';
    }

    echo "</br>";
}

medieSalarJob(' Web Developer');
medieSalarJob(' actor');
medieSalarJob(' secerator');
medieSalarJob(' HR');
medieSalarJob(' Tester');
