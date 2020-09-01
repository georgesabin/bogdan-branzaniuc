<?php
namespace Model;

session_start();
include_once 'connectPDO.php';
use Model\ConnectPdo;

class ShoppingCartModel extends ConnectPdo
{
    const TableInventar = "inventar";

    public function dbSelect(int $idSpot): array
    {
        $pdo = $this->connectDb();
        return $pdo->query(sprintf("SELECT * FROM %s WHERE id_product=$idSpot", self::TableInventar))->fetch();
    }
}
//session_destroy();
