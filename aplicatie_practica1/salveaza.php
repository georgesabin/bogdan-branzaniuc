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
$calendar['events'][] = $event; //aici testam dubland arrayul sa vad daca merge foreachul din helper.phph =)
var_dump($calendar['events']);

//Un eveniment nu poate exista de mai multe ori în sesiune:
$numeEv = $event['nume'];
singleEv($calendar, $event);
//o persoana poate participa de maxim 2 ori la evenimente in aceeasi zi
//foreach de la fiecare sa ia dataS si sa faca array cu cheia dataS si participantii
grupareDate($calendar['events'], $event['dataS'], $event['participanti']);
