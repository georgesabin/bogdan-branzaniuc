<?php

//helper pentru transformarea datelor trimise la server
function testImput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
//helper pentru verificarea si trimiterea datelor la server
function verificareDate($x)
{

    if (!empty($x)) {
        $x = testImput($x);
        return $x;
    }
}
//helper pentru verificarea existentei evenimentului curent in sesiune
function singleEv(array $sesiune, array $event): bool
{
    return in_array($event, $sesiune);
}

//o persoana poate participa de maxim 2 ori la evenimente in aceeasi zi

//grupareDate($_SESSION['events'], $event['participanti'])
function grupareDate(array $evenimente, $persoane): void
{
    $grupareDupaData = [];
    foreach ($evenimente as $event) {
        $dataEv = $event['dataS'];

        $event[$dataEv] = $event;
        $grupareDupaData[$dataEv][] = $event['participanti'];

    }
    var_dump($grupareDupaData);

    /*////testat merge-ul arrayului $totalPrezente = array_merge(...$grupareDupaData[$dataEv]);
    var_dump($totalPrezente);//////*/

    $dataCurenta = date("Y-m-d"); //intrebare

    foreach ($grupareDupaData as $data => $persoane) {
        var_dump($persoane);
        if ($data === $dataCurenta) {
            $totalPersData = array_merge(...$grupareDupaData);

        }
    }

}

//afisare baza de date in afisare.php
function afisareBdate($eveniment)
{
    echo "eveniment - " . $eveniment['nume'] . "</br>";
    echo "data start - " . $eveniment['dataS'] . "</br>";
    echo "data sfarsit - " . $eveniment['dataF'] . "</br>";
    echo "descriere - " . $eveniment['descriere'] . "</br>";
    echo "participanti- ";foreach ($eveniment['participanti'] as $nume) {
        echo $nume . ", ";
    }
}
