<?php
namespace Model;

session_start();
include_once 'connectPDO.php';
use Model\ConnectPdo;

class ShoppingCartModel extends ConnectPdo
{
    public $shoppingCart = [];
    public function __construct($session)
    {
        $this->shoppingCart = $session;
    }
    public function showProductSpecs(): array
    {
        $pdo = $this->connectDb();
        return $pdo->query(sprintf("SELECT * FROM %s WHERE id_product=$_SESSION[ID]", self::TabeleInventar))->fetchAll();
    }
}
