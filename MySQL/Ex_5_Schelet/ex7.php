<?php
//Scrie codul PHP pentru conectarea la baza de date si afiseaza toate valorile coloanelor inserate in tabela de la exercitiul 6.
//$dbname = new CreateTable($dbName, $tableName, $colName, $colType, $colSize);
$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectat cu succes!' . "\n";

    $rows = $conn->query("SELECT * FROM numele_tabelului")->fetchAll();
    foreach ($rows as $row) {
        echo $row['test'] . "\n";
    }
} catch (PDOException $e) {
    echo 'Conectare esuata: ' . $e->getMessage();
}

// urmeaza inserarea
