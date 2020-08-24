<?php
namespace Model;

include_once 'connectPDO.php';
include_once '../View/stocSelectTypes.php'; //formularul pentru culoare, model, cantitate

class Product extends ConnectPdo
{
    private $showSelectTypes = '';
    public function __construct($showSelectTypes)
    {
        $this->showSelectTypes = $showSelectTypes;
    }
    const TabeleInventar = "inventar";
    private function doReload(string $reloadSpot): void
    {

    }
    public function showProduct(): void
    {
        $pdo = $this->connectDb();
        $products = $pdo->query(sprintf("SELECT * FROM %s", self::TabeleInventar))->fetchAll();
        $price = $product['price'] * $_POST["Quantity"]; # cantitatea selectata va fi afisata in timp real prin "onchange="PostName.submit()" -abstractForm.php linia 37
        $vat = 0.19 * $price;
        foreach ($products as $product => $value) {
            echo "produs:" . $product['name'];
            echo $showSelectTypes;
            echo "tva: " . $vat;
            echo "pret: " . $price . "</br>";
            echo $product['in_stock'] == true ? "in stoc " . "</br>" : "produsul nu este in stoc, comanda va intarzia 4 zile " . "</br>";
            echo $product['producer'] . "</br>";
            echo $product['edition'] . "</br>";
        }
    }
}
