<?php
namespace Model;

include_once 'connectPDO.php';

class Product extends ConnectPdo
{
    const TabeleInventar = "inventar";

    public function showProduct(): array
    {
        $pdo = $this->connectDb();
        $product = $pdo->query(sprintf("SELECT * FROM %s", self::TabeleInventar))->fetchAll();
        return $product;
        var_dump($product);
    }
}
