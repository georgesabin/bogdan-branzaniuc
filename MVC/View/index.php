<?php
use Controller\ConnectBdate;

$connectDb = new ConnectBdate();
$connectDb = $connectDb->connectDb( /*  instructiunea  de citire din baza de date */);
//Show tabele Product
$showTable = new ShowTable($connectDb);
$showTable->showTheTable();
//afisare formular

//if Id inexistent, eroare : ID-ul produsului nu exista in stocul nostru

//show updated table Product

//afisare formular

//afisare produs selectat cu pret si tva, extrase direct din tabela updatata.
