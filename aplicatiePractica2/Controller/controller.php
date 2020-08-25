<?php
namespace Controller;

include_once '../Model/inventar.php';

class ManipulateProduct
{
    private $productConn;
    private $showSelectTypes;
    public function __construct($productConn, string $selectTypes)
    {
        $this->showSelectTypes = $selectTypes;
        $this->productConn = $productConn;
    }
    public function showProduct(): void
    {
        $products = $this->productConn->showProduct();
        foreach ($products as $product) {

            $price = $product['price'];
            $vat = 0.19 * $price;
            echo "produs:" . $product['name'];
            echo $this->showSelectTypes;
            echo "tva: " . $product['currency'] . $vat;
            echo "pret: " . $price . $product['currency'] . "</br>";
            echo $product['in_stock'] == true ? "in stoc " . "</br>" : "produsul nu este in stoc, comanda va intarzia 4 zile " . "</br>";
            echo "producator: " . $product['producer'] . "</br>";
            echo $product['edition'] == 1 ? "Editie limitata" : "Editie nelimitata";
            echo "</br></br></br>";

        }
    }
}
