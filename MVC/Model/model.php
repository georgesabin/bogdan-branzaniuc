<?php
namespace Model;

use PDO;

abstract class ConnectBdate
{
    abstract protected function connectDb();
}

class Product extends ConnectBdate
{
    public function connectDb()
    {
        {
            $servername = 'localhost';
            $username = 'root';
            $password = '';

            try {
                $conn = new PDO("mysql:host=$servername;dbname=Stoc", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Conectat cu succes!';

            } catch (PDOException $e) {
                echo 'Conectare esuata: ' . $e->getMessage();
            }
        }
    }
}
