<?php
namespace controller;

include_once '../Model/ScartModel.php';
include_once '../Helper/helper.php';
use Helper\Helper;

class ShoppingCart
{
    private $shoppingCart = array();
    private $modelSelect;

    public function __construct($session, $modelSelect)
    {
        $this->shoppingCart = $session;
        $this->modelSelect = $modelSelect;
    }

    const currency = " USD ";

    public function showShoppingCart()
    {
        //var_dump($this->shoppingCart);
        //if value[id]&&value[color]&&value[model] aduna cantitatile.

        $total = 0;
        $transport = 10;
        $freeTransportLimit = 200;
        $grandTotal = 0;

        foreach ($this->shoppingCart as $key => $value) {
            $product = $this->modelSelect->dbSelect($value['id']);
            $prName = $product['name'];
            $prPrice = $product['price'];
            $priceQty = $product['price'] * $value['quantity'];
            $vat = round(0.19 * $priceQty, 2);
            $model = $value['model'];
            $color = $value['color'];
            $edition = $product['edition'];
            $producer = $product['producer'];
            $inStock = $product['in_stock'];

            echo Helper::actionButton("shoppingCartView.php", "deleteProduct" . $key, "POST", "delete this article from shopping cart");
            echo "product name: " . $product['name'] . "</br>";
            echo "quantity: " . $value['quantity'];
            echo Helper::addOrRemoveQty("shoppingCartView.php", "add" . $key, "remove" . $key) . "</br>";
            echo "price/product: " . $prPrice . " ";
            echo self::currency . "</br>";
            echo "total price: " . $priceQty . " ";
            echo self::currency . "</br>";
            echo "vat: " . $vat . " " . self::currency . "</br>";
            echo "model: " . $model . "</br>";
            echo "color type: " . $color . "</br>";
            echo $edition == false ? "unlimited " : " limited ";
            echo " edition " . "</br>";
            echo $inStock == true ? "in stock" . "</br>" : "out of stock (takes 4 more days to deliver)" . "</br>";
            echo $producer . "</br></br></br></br></br></br></br>";
            $total += $priceQty;

        }
        $total <= 200 ? $grandTotal = $total + $transport : $grandTotal = $total;
        $total <= 200 ? $transport = 10 : $transport = 0;
        $totalVat = round(0.19 * $total, 2);
        echo "total: " . $total . " " . self::currency . "</br>";
        echo "Vat: " . $totalVat . " " . self::currency . "</br>";
        echo $total < 200 ? " the transport fee is $transport" . self::currency . "for orders under $freeTransportLimit" . self::currency . "</br>" : "transport fee: " . $transport = 0 . self::currency . "</br>";
        echo "grand total: " . $grandTotal . self::currency . "</br>";
    }
    public function calculate()
    {

        foreach ($this->shoppingCart as $key => $value) {
            //delete the whole article
            if (isset($_POST["deleteProduct" . $key])) {
                unset($this->shoppingCart[$key]);
                $this->shoppingCart = array_values($this->shoppingCart);
            }
            //mareste cantitatea
            if (isset($_POST["add" . $key])) {
                Helper::verificareDate($_POST["add" . $key]);
                $this->shoppingCart[$key]['quantity'] += $_POST['quantity'];

                //scade cantitatea
            } elseif (isset($_POST["remove" . $key])) {
                Helper::verificareDate($_POST["remove" . $key]);
                $this->shoppingCart[$key]['quantity'] -= $_POST['quantity'];
                //caz red, cantitatea devine 0
                if ($this->shoppingCart[$key]['quantity'] <= $_POST["remove" . $key]) {
                    unset($this->shoppingCart[$key]);
                    $this->shoppingCart = array_values($this->shoppingCart);
                }

            } elseif (isset($_POST["remove"]) && !is_numeric($_POST["remove" . $key])) {
                Helper::verificareDate($_POST["remove" . $key]);
                $_POST["remove" . $key] = 0;

            } elseif (isset($_POST["add"]) && !is_numeric($_POST["add" . $key])) {
                Helper::verificareDate($_POST["add" . $key]);
                $_POST["add" . $key] = 0;
            }

            $_SESSION['shopping cart'] = $this->shoppingCart;
        } //var_dump($this->shoppingCart);
    }
}
