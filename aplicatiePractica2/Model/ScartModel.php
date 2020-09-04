<?php
namespace Model;

session_start();
include_once 'connectPDO.php';
use Model\ConnectPdo;

class ShoppingCartModel extends ConnectPdo
{
    const TableInventar = "inventar";

    public function getProduct(int $idSpot): array
    {
        $pdo = $this->connectDb();
        return $pdo->query(sprintf("SELECT * FROM %s WHERE id_product=$idSpot", self::TableInventar))->fetch();
    }
    public function connectingPdo()
    {
        $pdo = $this->connectDb();
        return $pdo;
    }
}
//session_destroy();
