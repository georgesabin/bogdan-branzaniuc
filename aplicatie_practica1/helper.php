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
function singleEv(array $arrayulCalendar, array $evenimentulCurent): bool
{
    return in_array($arrayulCalendar, $evenimentulCurent);
}
//o persoana poate participa de maxim 2 ori la evenimente in aceeasi zi
//foreach de la fiecare sa ia dataS si sa faca array cu cheia dataS si participantii

#numele parametrilor de mai jos sunt nume alias pentru parametrii array-ului $calendar din salveaza.php
#ca sa nu primesc eroare
function grupareDate(array $evenimente, $data, $persoane): void
{
    $grupareDate = [];
    $dataCurenta = '';

    foreach ($evenimente as $eveniment) {

        $grupareDate[$data][] = $persoane;
    }
    //var_dump($grupareDate[$data]);
    $totalPrezente = [];
    $dataCurenta = date("Y-m-d");

    if ($data === $dataCurenta) { //?
        $totalPrezente = array_merge(...$grupareDate[$data]);
        $prezentzePersoana = (array_count_values($totalPrezente));
        //var_dump($prezentzePersoana);

        $refuzati = [];
        foreach ($persoane as $key => $persoana) {
            if ($prezentzePersoana[$persoana] > 2) {
                unset($persoane[$key]);
                $refuzati[] = $persoana;
            }
        }

        //var_dump($totalPrezente);

    }

    echo "persoana/persoanele : (" . implode(" , ", $refuzati) . ") deja participa la doua evenimente in
            aceasta data " . "</br>";
    var_dump($persoane);

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
