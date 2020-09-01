<?php
namespace View;

include_once '../Helper/helper.php';
include_once '../Controller/ScartController.php';
include_once '../Model/ScartModel.php';
use Controller\ShoppingCart;
use Model\shoppingCartModel;

if (isset($_SESSION['shopping cart'])) {
    //daca clientul introduce de 2 ori acelasi produs, adunam cantitatea.
    //Helper::noDouble($_SESSION['shopping cart']);
    $select = new shoppingCartModel();
    $shoppingCart = new ShoppingCart($_SESSION['shopping cart'], $select);
    $shoppingCart->calculate();
    $shoppingCart->showShoppingCart();
    
    // var_dump($_SESSION['shopping cart']);
}
