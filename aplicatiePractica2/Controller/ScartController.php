<?php
namespace controller;

include_once '../Model/ScartModel.php';
include_once '../Helper/helper.php';
use Helper\Helper;
use Model\ShoppingCartModel;

class ShoppingCart extends ShoppingCartModel
{
    public function __construct($session)
    {
        parent::__construct($session);
    }
    public function showShoppingCart()
    {
        //var_dump($this->shoppingCart);
        //if value[id]&&value[color]&&value[model] aduna cantitatile.

        $totalCart = 0;
        $transport = 10;
        $currency = $this->dbSelect(1);
        $currency = $currency['currency'];
        $freeTransportLimit = 200;

        foreach ($this->shoppingCart as $key => $value) {
            $product = $this->dbSelect($value['id']);
            //var_dump($value);

            //SHOW CART PRODUCTS SPECS//
            $currency = $product['currency'];
            $priceQty = $product['price'] * $value['quantity'];
            $vat = round(0.19 * $priceQty, 2);

            echo Helper::actionButton("shoppingCartView.php", "deleteProduct" . $key, "POST", "delete this article from shopping cart");
            echo "product name: " . $product['name'] . "</br>";
            echo "quantity: " . $value['quantity'];
            echo Helper::addOrremoveQty("shoppingCartView.php", "add" . $key, "remove" . $key) . "</br>";
            echo "price/product: " . $product['price'] . " ";
            echo $currency . "</br>";
            echo "total price: " . $priceQty . " ";
            echo $currency . "</br>";
            echo "vat: " . $vat . " " . $currency . "</br>";
            echo "model: " . $value['model'] . "</br>";
            echo "color type: " . $value['color'] . "</br>";
            echo $product['edition'] == false ? "unlimited " : " limited ";
            echo " edition " . "</br>";
            echo $product['in_stock'] == true ? "in stock" . "</br>" : "out of stock (takes 4 more days to deliver)" . "</br>";
            echo $product['producer'] . "</br></br></br></br></br></br></br>";
            $totalCart += $priceQty;

            //the delete product button logic//

            if (isset($_POST["deleteProduct" . $key])) {
                unset($_SESSION['shopping cart'][$key]);
                $_SESSION['shopping cart'] = array_values($_SESSION['shopping cart']);
            }

            //the add or remove qty button logic
            if (isset($_POST["add" . $key])) {
                $value['quantity'] += $_POST["add" . $key];

            } elseif (isset($_POST["remove" . $key])) {
                $value['quantity'] -= $_POST["remove" . $key];
            }
        }
        $totalVat = round(0.19 * $totalCart, 2);
        $priceMinusVat = $totalCart - $totalVat;
        echo "price minus vat: " . $priceMinusVat . " " . $currency . "</br>";
        echo "total Vat: " . $totalVat . " " . $currency . "</br>";
        echo $totalCart < 200 ? " the transport fee is $transport  $currency for orders under $freeTransportLimit $currency" . "</br>" : "transport fee: " . $transport = 0;
        echo "</br>";
        $totalCart += $transport;
        echo "total price order: " . $totalCart;
        ///////////////////////////////////////////////////////////////////////FUNCTII/////////////////////////////////////////////////////////////////////////
        //the add or remove qty button logic

        //Daca clientul adauga de 2 ori acelasi produs, aduna cantitatile in sesiune.
        //Helper::noDouble();
        //afiseaza un buton de stergere a produsului din cos in functie de cantitatea selectata,

        #daca q(erase)=5 && q(introdusa in cos)=7, {q=7-5} , elseif q(erase)==q(initiala) || q(erase)>q(initiala) {unlink product from session}
        //schimbarea cantitatii din cosul de cumparaturi

        //schimbarea modelului produselor din cosul de cumparaturi
        //calcularea pretului in functie de cantitatea produsului -----------------checked
        //afiseaza-i clientului totalul, tva-ul ---------------------------------- checked.
        //buton de check-out (trimitere email)
        //
        //
        //
        //
        //
    }
}
