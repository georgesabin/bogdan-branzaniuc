<?php
namespace Model;

include_once 'connectPDO.php';

class Product extends ConnectPdo
{
    const TabeleInventar = "inventar";

    public function showProduct(): array
    {
        $pdo = $this->connectDb();
        return $pdo->query(sprintf("SELECT * FROM %s ", self::TabeleInventar))->fetchAll();
    }
    public function connectingPdo()
    {
        return $this->connectDb();
    }
}
