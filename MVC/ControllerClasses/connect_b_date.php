<?php
namespace Controller;

use PDO;

class ConnectBdate
{
    private $instructionF;
    public function __construct($instructionF)
    {
        $this->instructionF = $instructionF;
    }
    protected static function connectDb($instruction): void
    {
        {
            $servername = 'localhost';
            $username = 'root';
            $password = '';

            try {
                $conn = new PDO("mysql:host=$servername;dbname=Stoc", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo 'Conectat cu succes!';

                $tableProduct = $conn->query("SELECT * FROM Product")->fetchAll();
                foreach ($tableProduct as $product) {
                    echo $product['id_product'] . "\n";
                    echo $product['price'] . "\n";
                    echo $product['vat'] . "\n";
                    echo $product['currency_code'] . "\n";
                }
                $selectedProduct = $conn->query("SELECT id_product,price,currency_code,vat FROM Product")->fetchAll();

            } catch (PDOException $e) {
                echo 'Conectare esuata: ' . $e->getMessage();
            }
        }
    }
//functie de schimbare
}
