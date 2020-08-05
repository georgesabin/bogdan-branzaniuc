<?php

include_once 'db.php';
include_once 'Classes/CreateTable.php';

$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectat cu succes!';
} catch (PDOException $e) {
    echo 'Conectare esuata: ' . $e->getMessage();
}
function afisare()
{
    echo "SELECT $dbName from $dbex6";

}
afisare();

// urmeaza inserarea
