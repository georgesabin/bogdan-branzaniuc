<?php
namespace Classes;

use \PDO;

class CreateTable
{
    private $server;
    private $user;
    private $password;
    private $dbName;
    private $tableName;
    private $columnsName = [];
    private $columnsType = [];
    private $columnsSize = [];

    public function __construct(
        string $dbName,
        string $tableName,
        array $columnsName,
        array $columnsType,
        array $columnsSize,
        string $server = 'localhost',
        string $user = 'root',
        string $password = ''
    ) {
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->tableName = $tableName;
        $this->columnsName = $columnsName;
        $this->columnsType = $columnsType;
        $this->columnsSize = $columnsSize;
    }

    public function createTable(): void
    {
        /**
         * Se va face un foreach prin $this->columnsName
         * si se va forma o interogare (query) de forma
         * NUME_COLOANA1 TIP_COLOANA1 (SIZE_COLOANA1), NUME_COLOANA2 TIP_COLOANA2 (SIZE_COLOANA2) ETC
         * Atentie la ultima iteratie pentru ca dupa ultima coloana nu trebuie sa apara ,
         * Acest query va fi stocat intr-o variabila si se apeleaza metoda de mai jos (connect)
         */
        $query = '';
        foreach ($this->columnsName as $key => $clName) {

            $query .= sprintf('%s %s(%d), ', $clName, $this->columnsType[$key], $this->columnsSize[$key]);

            if ($query[strlen($query) - 1] = ",") {
                $query = chop($query, $query[strlen($query) - 1]);
            }

        }
        $this->connect($query);
    }
    private function connect(string $query): void
    {
        $connection = new PDO("mysql:host={$this->server};dbname={$this->dbName}", $this->user, $this->password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /**
         * In aceasta variabila vei avea toata interogarea, adica:
         * CREATE TABLE $this->tableName (
         *  ID INT(11) AUTO_INCREMENT PRIMARY KEY,
         *  $query (AICI VOR FI COLOANELE)
         * );
         */
        $createTable = "CREATE TABLE $this->tableName(ID INT(11) AUTO_INCREMENT PRIMARY KEY, $query)";
        $connection->exec($createTable);
    }

}
