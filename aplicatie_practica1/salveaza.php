<?php
session_start();
/* in acest fisier vom face verificarea ("engine-ul manipularii datelor")*/

//1-the big bad wardrobe
$calendar['events'] = [];
//2-the average sertar
$event = [];

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

    } elseif (empty($x)) {
        echo "Fundatura lui kariovsqy (personaj fake)";
    }
}

//verificare si introducere date

$event[] = verificareDate($_POST['evName']);
$event[] = verificareDate($_POST['evStartDate']);
$event[] = verificareDate($_POST['evFinishDate']);
$event[] = verificareDate($_POST['eventDescription']);
$event['participanti'] = $_POST['persoana'];
//var_dump($event);

$calendar['events'] = $event;
var_dump($calendar);
