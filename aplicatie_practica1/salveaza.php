<?php
session_start();
include_once 'helper.php';

/*helpers:
testImput($data)
verificareDate($x)
 */

$calendar['events'] = [];
$event['nume'] = verificareDate($_POST['evName']);
$event['dataS'] = verificareDate($_POST['evStartDate']);
$event['dataF'] = verificareDate($_POST['evFinishDate']);
$event['descriere'] = verificareDate($_POST['eventDescription']);
$event['participanti'] = $_POST['persoana'];

$calendar['events'][] = $event;
$calendar['events'][] = $event;
$calendar['events'][] = $event; //aici testam dubland/tripland arrayul simuland baza de date

//Un eveniment nu poate exista de mai multe ori în sesiune:

singleEv($calendar, $event);
/*o persoana poate participa de maxim 2 ori la evenimente in aceeasi zi
Verifică dacă evenimentul există în sesiune apelând funcția de la bulina 2. Dacă false,
atunci apelezi pentru ștergerea participantului/participanților.*/

if (singleEv($calendar, $event) == false) {
    grupareDate($calendar['events'], $event['dataS'], $event['participanti']);
    $_SESSION['events'] = $event;
}
