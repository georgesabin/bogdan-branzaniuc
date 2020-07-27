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
    return in_array($sesiune, $event);
}
//o persoana poate participa de maxim 2 ori la evenimente in aceeasi zi

var_dump($_SESSION['events']);
function grupareDate(array $evenimente, $persoane): void
{
    var_dump($evenimente['dataS']);
    foreach ($evenimente as $eveniment) {
        $grupareDate[$eveniment['dataS']][] = $eveniment['participanti'];
        // primesc erori , ca sa nu pierd mai mult timp , rezolvam la urmatorul code review

        foreach ($_SESSION['persoane'] as $eveniment['dataS'] => $persoana) {
            $totalPersoane = array_merge(...$persoane);
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
