<?php
/*Ai nevoie de un singur Model, asa cum am spus,
Modelul acceseaza informatii de baza de date.
Am vazut ca ai creat un Model care iti creeaza formularul.
Nu e asta scopul modelului.
Vei avea un model Product, pentru simplitate,
adauga in el si conexiunea la baza de date. Scapi de clasa ConnectBdate. */
namespace Model;

use PDO;

class Product
{
    private $postId;
    private $postCurrency;
    public function __construct($postId, $postCurrency)
    {
        $this->postId = $post;
        $this->postSelect = $postSelect;
    }
    //conectarea la baza de date
    public function connectDb()
    {
        {
            $servername = 'localhost';
            $username = 'root';
            $password = '';

            try {
                $conn = new PDO("mysql:host=$servername;dbname=Stoc", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo 'Conectat cu succes!' . "</br>";
                return $conn;

            } catch (PDOException $e) {
                echo 'Conectare esuata: ' . $e->getMessage();
            }
        }
    }
    //functiile de afisare
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
    public function ShowProduct(): void
    {

        $pdo = $this->connectDb();

        $stmt = $pdo->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute(['id' => $this->postId]);
        $product = $stmt->fetch();

        echo "product ID:" . $product['id_product'] . "</br>";
        echo "product name:" . $product['name'] . "</br>";
        echo "product price:" . $product['price'] . "</br>";
        echo "vat:" . $product['vat'] . "</br>";
        echo "currency:" . $product['currency_code'] . "</br>";

    }
    //functii de editare a bazei de date
    public function vatTax()
    {
        $pdo = $this->connectDb();

        $product = $pdo->query("SELECT * FROM Product")->fetchAll();
        // aici le schimb mereu pe toate ca sa consolidez bine functia de tva,
        // daca completeaza cineva cumva in 2 locuri diferite, sa dea un refresh la toate tva-urile
        foreach ($product as $key => $value) {
            $tva = 0.19 * $value['price'];
            try {
                $data = [
                    'vat' => $tva,
                    'id_product' => $id,
                ];
                $sql = "UPDATE Product SET vat=:vat WHERE id_product=:id_product";
                $stmt = $pdo->prepare($sql);
                $stmt->execute($data);
            } catch (PDOException $e) {
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }
        }
    }
    #Cazurile perechilor valutare
    public function currencyCases(): void
    {
        $pdo = $this->connectDb();

        $stmt = $pdo->prepare("SELECT price FROM users WHERE id=:id");
        $stmt->execute(['id' => $this->postId]);
        $product = $stmt->fetch();

        $currentCurrency = $product['currency_code'];

        if ($this->postCurrency == "USD" && $currentCurrency == "EUR") {

            $this->operateTheCase(usdtoEur($product['price']));

        } elseif ($this->postCurrency == "EUR" && $currentCurrency == "USD") {
            $this->operateTheCase($this->eurtoUsd($product['price']));

        } elseif ($this->postCurrency == "USD" && $currentCurrency == "ZAR") {
            $this->operateTheCase($this->usdtoZar($product['price']));

        } elseif ($this->postCurrency == "ZAR" && $currentCurrency == "USD") {
            $this->operateTheCase($this->zartoUsd($product['price']));

        } elseif ($this->postCurrency == "ZAR" && $currentCurrency == "EUR") {
            $this->operateTheCase($this->zartoEur($product['price']));

        } elseif ($this->postCurrency == "EUR" && $currentCurrency == "ZAR") {
            $this->operateTheCase($this->eurtoZar($product['price']));
        }

    }
    private function operateTheCase($calculCaz): void
    {
        $conn = $this->connectDb();
        $product = $conn->query("SELECT * FROM product")->fetchAll();

        $pretNou = $calculCaz;

        try {
            $data = [
                'price' => $pretNou,
                'currencyCode' => $postCurrency,
                'id' => $postId,
            ];
            $sql = "UPDATE users SET price=:price, currencyCode=:currencyCode, WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($data);

        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }
    }

    private function eurtoUsd(float $pretCurent, float $raportEurUsd = 0.84): float
    {
        return $pretCurent * $raportEurUsd;
    }
    private function usdtoEur(float $pretCurent, float $raportUsdEur = 1.19): float
    {
        return $pretCurent * $raportUsdEur;
    }
    private function eurtoZar(float $pretCurent, float $raportEurZar = 20.68): float
    {
        return $pretCurent * $raportEurZar;
    }
    private function zartoEur(float $pretCurent, float $raportZarEur = 0.048): float
    {
        return $pretCurent * $raportZarEur;
    }
    private function zartoUsd(float $pretCurent, float $raportZarUsd = 0.057): float
    {
        return $pretCurent * $raportZarUsd;
    }
    private function usdtoZar(float $pretCurent, float $raportUsdZar = 17.41): float
    {
        return $pretCurent * $raportUsdZar;
    }
}
