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
                echo 'Conectat cu succes!' . "</br>";
                return $conn;

            } catch (PDOException $e) {
                echo 'Conectare esuata: ' . $e->getMessage();
            }
        }
    }
    //functiile de afisare
    public function showTable(): void
    {
        $conn = $this->connectDb();
        $tableProduct = $conn->query("SELECT * FROM Product")->fetchAll();
        #foreach ($tableProduct as $key => $value) { //punerea tabelului in ordine (daca baza de date nu este ordonata by default)
        #    $key = $value['id_product'];
        #   $tableProduct[$key] = $value;
        #}

        foreach ($tableProduct as $product) {
            echo $product['id_product'] . "&nbsp &nbsp &nbsp";
            echo "pret: " . $product['price'] . "&nbsp &nbsp &nbsp";
            echo "tva: " . $product['vat'] . "&nbsp &nbsp &nbsp";
            echo "currency: " . $product['currency_code'] . "</br>";
        }
    }
    public function ShowProduct(): void
    {

        $conn = $this->connectDb();
        $product = $product[$_POST['ID']];
        $product = $conn->query("SELECT * FROM Product Where id_product= $product ")->fetchAll();
        foreach ($product as $key => $value) { //punerea tabelului in ordine (daca baza de date nu este ordonata by default)
            $key = $value['id_product'];
            $product[$key] = $value;
        }

        $product = $product[$_POST['ID']];
        echo "product ID:" . $product['0'] . "</br>";
        echo "product name:" . $product['1'] . "</br>";
        echo "product price:" . $product['2'] . "</br>";
        echo "vat:" . $product['3'] . "</br>";
        echo "currency:" . $product['4'] . "</br>";

    }
    //functii de editare a bazei de date
    public function vatTax()
    {
        $conn = $this->connectDb();
        #luam din baza de date preturile produselor si facem vat=19% din acestea.
        $product = $conn->query("SELECT * FROM product")->fetchAll();
        $tva = 0;
        foreach ($product as $key => $value) {
            $tva = 0.19 * $value['price'];
            try {
                $sql = "UPDATE product SET vat ='$tva' WHERE id_product = $value[id_product]";
                $conn->exec($sql);
            } catch (PDOException $e) {
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }
        }
    }
    #Cazurile perechilor valutare
    public function currencyCases(): void
    {
        $conn = $this->connectDb();

        //schimbam coloana currency_code cu codul trimis prin Post
        $currencyCode = $_POST['Currency'];
        try {
            $sql = "UPDATE product SET currency_code ='$currencyCode' ";
            $conn->exec($sql);
        } catch (PDOException $e) {
            die("ERROR: Could not able to execute $sql. " . $e->getMessage());
        }

        //aflam currency-ul tabelei
        $currentCurrency = $conn->query("SELECT currency_code FROM Product Where id_product=1 ")->fetchAll();
        $currentCurrency = $currentCurrency[0]['currency_code'];
        //luam pretul curent si updatam tabela cu pretul si currency-codul cerute de client
        $product = $conn->query("SELECT * FROM product")->fetchAll();
        $currencyCode = $_POST['Currency'];
        foreach ($product as $key => $value) {

            if ($_POST['Currency'] == "USD" && $currentCurrency = "EUR") {
                $this->operateTheCase(usdtoEur($value['price']));

            } elseif ($_POST['Currency'] == "EUR" && $currentCurrency = "USD") {
                $this->operateTheCase($this->eurtoUsd($value['price']));

            } elseif ($_POST['Currency'] == "USD" && $currentCurrency = "ZAR") {
                $this->operateTheCase($this->usdtoZar($value['price']));

            } elseif ($_POST['Currency'] == "ZAR" && $currentCurrency = "USD") {
                $this->operateTheCase($this->zartoUsd($value['price']));

            } elseif ($$_POST['Currency'] == "ZAR" && $currentCurrency = "EUR") {
                $this->operateTheCase($this->zartoEur($value['price']));

            } elseif ($_POST['Currency'] == "EUR" && $currentCurrency = "ZAR") {
                $this->operateTheCase($this->eurtoZar($value['price']));
            }
        }
    }
    private function operateTheCase($calculCaz): void
    {
        $conn = $this->connectDb();
        $product = $conn->query("SELECT * FROM product")->fetchAll();
        foreach ($product as $key => $value) {
            $pretNou = $calculCaz;
            $postCurrency = $_POST["Currency"];
            try {
                $sql = "UPDATE product SET price ='$pretNou' WHERE id_product = $value[id_product]";
                $conn->exec($sql);
            } catch (PDOException $e) {
                die("ERROR: Could not able to execute $sql. " . $e->getMessage());
            }
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
