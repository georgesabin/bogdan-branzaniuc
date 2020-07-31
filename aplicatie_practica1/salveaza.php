<?php
session_start();
include_once 'helper.php';

if (!isset($_SESSION['events'])) {
    $_SESSION['events'] = [];
}

$event = [];
$event['nume'] = verificareDate($_POST['evName']);
$event['dataS'] = verificareDate($_POST['evStartDate']);
$event['dataF'] = verificareDate($_POST['evFinishDate']);
$event['descriere'] = verificareDate($_POST['eventDescription']);
$event['participanti'] = $_POST['persoana'];

//Un eveniment nu poate exista de mai multe ori în sesiune:

var_dump(singleEv($_SESSION['events'], $event));

//adaugarea evenimentului in sesiune
if (singleEv($_SESSION['events'], $event) === false) {
    $_SESSION['events'][] = $event;
    var_dump($_SESSION['events']);
} else {
    $event = grupareDate($_SESSION['events'], $event); // returneaza event de aici
    var_dump($event); //de aici vine stocat intr-o baza de date
}

////////////////////////////PE VIITOR////////////////////////////////
// caz red 1-- nu ai inscris pe nimeni din lista la eveniment
/* caz red 2-- cand un eveniment e de mai multe ori in sesiune (prin alta metoda decat submit care e conditionat)
sterge-l si pastreaza doar un exemplar al evenimentului curent */

// caz red 3-- afiseaza mesaj utilizatorului cand un participant e de mai mult de 2 ori intr-o zi

//session_destroy();
