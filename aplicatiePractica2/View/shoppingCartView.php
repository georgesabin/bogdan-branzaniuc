<?php
namespace View;

include_once '../Helper/helper.php';
include_once '../Controller/ScartController.php';
use Controller\ShoppingCart;
use Helper\Helper;

if (isset($_SESSION['shopping cart'])) {
    //daca clientul introduce de 2 ori acelasi produs, adunam cantitatea.
    //Helper::noDouble($_SESSION['shopping cart']);
    $shoppingCart = new ShoppingCart($_SESSION['shopping cart']);
    $shoppingCart->showShoppingCart();
    var_dump($_SESSION['shopping cart']);
}
