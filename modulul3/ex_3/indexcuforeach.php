<?php

$fisier = file_get_contents('companie.dat.txt');
$angajati = explode("\n", $fisier);

foreach ($angajati as $angajat) {
    list($nume, $prenume, $functie, $salariu, $bonus, $dataAngajare) = explode(", ", $angajat);

    //1. Calculeaza media salariilor per functie. Afisesaza fiecare medie in parte.
    $joburi[$functie][] = $salariu;
    $tipJob = [];
    $mediiJoburi = [];
    foreach ($joburi as $key => $nrAngajati) {
        $tipJob[] = $key;
        $mediiJoburi[] = array_sum($nrAngajati) / count($nrAngajati);
    }

    #2. Daca data vechime angajat >= 1 an, calculeaza si adauga bonusul la salariu.
    $arAngajat = [];
    $arAngajat[] = explode(", ", $angajat); //pentru a putea insera salariu nou
    $dif = 0;
    $years = 0;
    $date1 = date('Y-m-d');
    $dif = abs(strtotime($dataAngajare) - strtotime($date1));
    $years = floor($dif / (365 * 60 * 60 * 24));
    $bonusVal = floor($bonus);

    if ($years >= 1) {
        $salariuNou = $salariu + $salariu * $bonusVal / 100;
    } else {
        $salariuNou = $salariu;
    }
    $arAngajat[] = $salariuNou;

    /*.3. Afiseaza in browser un tabel de forma:
    Nume    Prenume    Functie    Salariu Nou    Bonus    Data Angajare
    Sabin    George    Web Developer    2000 E    1000 E    01-10-2020  */
    $bonus = $bonusVal / 100 * $salariu;
    ?>
<html>
    <table border="1">
      <tr>
        <td>Nume</td>
        <td>Prenume</td>
        <td>Functie</td>
        <td>Salariu Nou</td>
        <td>Bonus</td>
        <td>Data Angajare</td>
      </tr>
      <tr>
        <td><?php echo $nume; ?></td>
        <td><?php echo $prenume; ?></td>
        <td><?php echo $functie; ?></td>
        <td><?php echo $salariuNou; ?></td>
        <td><?php echo $bonus; ?></td>
        <td><?php echo $dataAngajare; ?></td>
      </tr><br>
</html><?php
}
#afisare 1.
var_dump(array_combine($tipJob, $mediiJoburi));
