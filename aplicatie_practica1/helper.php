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
function grupareDate(array $evenimente, array $event): array
{ //caz red - 0 fara evenimente
    //daca session empty Session 'events' ,  afisezi return events.
    if (empty($evenimente)) {
        return $event;
    }
    $grupareDupaData = [];
    foreach ($evenimente as $ev) {

        $grupareDupaData[$ev['dataS']][] = $ev['participanti'];
    }

    foreach ($grupareDupaData as $data => $persoane) {

        if ($data === $event['dataS']) {
            $totalPersData = array_merge(...$persoane);
            $nrAparitii = array_count_values($totalPersData);
            $persoaneRamase = [];
            foreach ($event['participanti'] as $participant) {

                if ($nrAparitii[$participant] >= 2) {
                    $persoaneRamase = array_diff($event['participanti'], [$participant]);

                }
            }
            $event['participanti'] = $persoaneRamase;
            //var_dump($event);

        }
    }

    return $event;
}

//afisare baza de date in afisare.php
function afisareBdate(array $evenimente): void
{
    foreach ($evenimente as $eveniment) {
        echo "eveniment - " . $eveniment['nume'] . "</br>";
        echo "data start - " . $eveniment['dataS'] . "</br>";
        echo "data sfarsit - " . $eveniment['dataF'] . "</br>";
        echo "descriere - " . $eveniment['descriere'] . "</br>";
        echo "participanti- ";foreach ($eveniment['participanti'] as $nume) {
            echo $nume . ", ";
        }
        echo "</br>" . "</br>" . "</br>" . "</br>";
    }
}
