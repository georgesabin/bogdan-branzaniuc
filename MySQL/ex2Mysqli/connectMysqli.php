<?php
/* 1- Creeaza o baza de date in phpMyAdmin (localhost/phpmyadmin).
Credentialele implicite sunt:

Username: root
Password: (fara parola)*/
#cheecked
/* 2- Scrie si executa codul pentru conectarea la baza de date folosind MySQLi.*/
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'baza_de_date';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    exit('Conexiune esuata: ' . $conn->connect_error);
} else {
    echo "Conectarea la baza de date a fost realizata cu succes tadaaaam !";
}
/*3-
