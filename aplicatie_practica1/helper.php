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
function singleEv(array $arrayulCalendar, array $evenimentulCurent)
{
    if (!in_array($arrayulCalendar, $evenimentulCurent)) {
        $arrayulCalendar[] = $evenimentulCurent;
    } else {
        return in_array($arrayulCalendar, $evenimentulCurent);
    }
}
//o persoana poate participa de maxim 2 ori la evenimente in aceeasi zi
//foreach de la fiecare sa ia dataS si sa faca array cu cheia dataS si participantii

#toate variabilele sunt nume alias pentru parametrii array-ului $calendar din salveaza.php
function grupareDate(array $calendarul, $data, $persoane): void
{
    $grupareDate = [];
    $dataCurenta = '';

    foreach ($calendarul as $key) {
        #adaptarea parametrilor importati la functie
        $key['data'] = $data;
        $key['persoane'] = $persoane;
        #conectarea
        $dataCurenta = $key['data'];
        $grupareDate[$dataCurenta][] = $key['persoane'];
    }
    //var_dump($grupareDate[$dataCurenta]);
    //var_dump($persoane);

    foreach ($grupareDate[$dataCurenta] as $pozitie => $persoana) {
        //var_dump($persoane);
        if ($data === $dataCurenta) {
            $persoane = array_merge( /* blocaj */$persoane);
        }

    }
    var_dump($persoane);
}
