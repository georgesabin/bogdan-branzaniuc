<?php
session_start();
include_once 'helper.php';

/*helpers:
testImput($data)
verificareDate($x)
 */

$calendar['events'] = [];

$event = [];

$event['nume'] = verificareDate($_POST['evName']);
$event['dataS'] = verificareDate($_POST['evStartDate']);
$event['dataF'] = verificareDate($_POST['evFinishDate']);
$event['descriere'] = verificareDate($_POST['eventDescription']);
$event['participanti'] = $_POST['persoana'];

$calendar['events'] = $event;
var_dump($calendar['events']);

//Un eveniment nu poate exista de mai multe ori în sesiune:
$numeEv = $event['nume'];
singleEv($calendar, $event);
