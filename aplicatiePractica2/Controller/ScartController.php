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

        foreach ($this->shoppingCart as $key => $value) {
            $product = $this->dbSelect($value['id']);
            //var_dump($value);

            //SHOW CART PRODUCTS SPECS//
            $priceQty = $product['price'] * $value['quantity'];
            $vat = round(0.19 * $priceQty, 2);
            $currency = $product['currency'];
            echo Helper::actionButton("shoppingCartView.php", "deleteProduct" . $key, "POST", "delete product from shopping cart");
            echo "product name: " . $product['name'];
            echo "quantity: " . $value['quantity'] . "</br>";
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

            //the delete product button//

            if (isset($_POST["deleteProduct" . $key])) {
                unset($_SESSION['shopping cart'][$key]);
                array_values($_SESSION['shopping cart']);
            }

        }
        echo "total price: " . $totalCart . " " . $currency . "</br>";
        $totalVat = round(0.19 * $totalCart, 2);
        echo "total Vat: " . $totalVat . " " . $currency . "</br>";
        ///////////////////////////////////////////////////////////////////////FUNCTII/////////////////////////////////////////////////////////////////////////

        //Daca clientul adauga de 2 ori acelasi produs, aduna cantitatile in sesiune.

        //afiseaza un buton de stergere a produsului din cos in functie de cantitatea selectata,

        #daca q(erase)=5 && q(introdusa in cos)=7, {q=7-5} , elseif q(erase)==q(initiala) || q(erase)>q(initiala) {unlink product from session}

        //un select pentru schimbarea culorii
        //schimbarea cantitatii prn cosul de cumparaturi
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
