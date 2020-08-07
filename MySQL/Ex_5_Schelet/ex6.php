<?php

$servername = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Conectat cu succes!';

    inserare($conn, $argv);

} catch (PDOException $e) {
    echo 'Conectare esuata: ' . $e->getMessage();
}

function inserare($conn, $x): void
{
    $data = [
        'test' => "$x[1]",
    ];
    $sql = "INSERT INTO numele_tabelului (test) Values (:test)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);

}

// urmeaza inserarea
