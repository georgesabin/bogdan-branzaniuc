<?php
namespace Model;

class TableProduct extends ConnectPdo
{

    public function showTable(): void
    {
        $pdo = $this->connectDb();

        $tableProduct = $pdo->query("SELECT * FROM Product")->fetchAll();

        foreach ($tableProduct as $product) {
            echo "id produs: " . $product['id_product'] . "&nbsp &nbsp &nbsp";
            echo "pret: " . $product['price'] . "&nbsp &nbsp &nbsp";
            echo "tva: " . $product['vat'] . "&nbsp &nbsp &nbsp";
            echo "currency: " . $product['currency_code'] . "</br>";
        }
    }
}
