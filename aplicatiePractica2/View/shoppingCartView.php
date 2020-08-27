<?php
namespace View;

include_once '../Controller/ScartController.php';
use Controller\ShoppingCart;

$shoppingCart = new ShoppingCart($_SESSION['shopping cart']);
