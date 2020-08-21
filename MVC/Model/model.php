<?php
/*Ai nevoie de un singur Model, asa cum am spus,
Modelul acceseaza informatii de baza de date.
Am vazut ca ai creat un Model care iti creeaza formularul.
Nu e asta scopul modelului.
Vei avea un model Product, pentru simplitate,
adauga in el si conexiunea la baza de date. Scapi de clasa ConnectBdate. */
namespace Model;

include_once 'connectPdo.php';
include_once '../Helper/helper.php';
use Model\ConnectPdo;

class Product extends ConnectPdo
{
    const Tabela_b_Date = "product";

    private $postId = '';
    private $postCurrency = '';
    public function __construct($postId, $postCurrency)
    {
        $this->postId = $postId;
        $this->postCurrency = $postCurrency;
    }

    private function numberOfProducts(): int
    {
        $pdo = $this->connectDb();
        $product = $pdo->query(sprintf("SELECT * FROM %s", self::Tabela_b_Date))->fetchAll();
        return count($product);
    }
    public function showProduct(): void
    {

        $pdo = $this->connectDb();

        $stmt = $pdo->prepare(sprintf("SELECT * FROM  %s WHERE id_product=:id", self::Tabela_b_Date));
        $stmt->execute(['id' => $this->postId]);
        $product = $stmt->fetch();

        if ($product != false) {
            echo "product ID:" . $product['id_product'] . "</br>";
            echo "product name:" . $product['name'] . "</br>";
            echo "product price:" . $product['price'] . "</br>";
            echo "vat:" . $product['vat'] . "</br>";
            echo "currency:" . $product['currency_code'] . "</br>";
        } else {

            echo "ID-ul introdus nu reprezinta nici un produs din tabela";
        }

    }
    //functii de editare a bazei de date
    public function vatTax()
    {
        $pdo = $this->connectDb();

        $product = $pdo->query(sprintf("SELECT * FROM %s", self::Tabela_b_Date))->fetchall();

        foreach ($product as $key => $value) {
            $tva = 0.19 * $value['price'];
            try {
                $data = [
                    'vat' => $tva,
                    'id_product' => $this->postId,
                ];
                $sql = sprintf("UPDATE %s SET vat=:vat WHERE id_product=:id_product", self::Tabela_b_Date);
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

        $stmt = $pdo->prepare(sprintf("SELECT price, currency_code  FROM %s WHERE id_product=:id", self::Tabela_b_Date));
        $stmt->execute(['id' => $this->postId]);
        $product = $stmt->fetch();

        $currentCurrency = $product['currency_code'];

        if ($this->postCurrency == "USD" && $currentCurrency == "EUR") {

            $this->operateTheCase($this->usdtoEur($product['price']));

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
        $pdo = $this->connectDb();
        $product = $pdo->query(sprintf("SELECT * FROM %s", self::Tabela_b_Date))->fetchAll();

        try {
            $data = [
                'price' => $calculCaz,
                'currencyCode' => $this->postCurrency,
                'id' => $this->postId,
            ];
            $sql = "UPDATE product SET price=:price, currency_code=:currencyCode WHERE id_product=:id";
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
    private function eurtoZar(float $pretCurent, float $raportEurZar = 0.048): float
    {
        return $pretCurent * $raportEurZar;
    }
    private function zartoEur(float $pretCurent, float $raportZarEur = 20.68): float
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
