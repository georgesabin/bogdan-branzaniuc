<?php
namespace View;

include_once '../Controller/ScartController.php';
use Controller\ShoppingCart;
if (isset($_SESSION['shopping cart'])) {
    $shoppingCart = new ShoppingCart($_SESSION['shopping cart']);
    $shoppingCart->showShoppingCart();
}
