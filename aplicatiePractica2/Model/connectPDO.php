<?php
namespace Model;

use PDO;

class ConnectPdo
{
    public function connectDb()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=cardistryshop", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'Conectat cu succes!' . "</br>";
            return $conn;

        } catch (PDOException $e) {
            echo 'Conectare esuata: ' . $e->getMessage();
        }
    }
}
