<?php
class Database
{
    private $serverName;
    private $userName;
    private $password;
    private $databaseName;

    public function __construct($sName = 'localhost', $uName = 'root', $psw = '', $dbName)
    {
        $this->serverName = $sName;
        $this->userName = $uName;
        $this->password = $psw;
        $this->databaseName = $dbName;
    }
    /* HINT:
    $connection = new PDO("mysql:host={$this->serverName}", $this->userName, $this->password);
    $connection->exec("CREATE DATABASE `{$this->databaseName}`");
    // logic here */
    public function connectAndCreateDatabase(): void
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';

        try {
            $connection = new PDO("mysql:host={$this->serverName}", $this->userName, $this->password);
            $connection->exec("CREATE DATABASE `{$this->databaseName}`");
            echo 'Conectat cu succes!';
        } catch (PDOException $e) {
            echo 'Conectare esuata: ' . $e->getMessage();
        }

    }
}

$bazaDate = new Database($_POST["db"]);
$bazaDate->connectAndCreateDatabase();
