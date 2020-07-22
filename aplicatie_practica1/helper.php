<?php
include_once 'salveaza.php';
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
        unset($_SESSION['event']);
    }
}
