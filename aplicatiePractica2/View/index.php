<?php
namespace View;

session_start();

//aici se afiseaza magazinul cu lista de produse + butonul "spre cosul de cumparaturi"

include_once '../Model/product.php';
include_once '../Controller/controller.php';
use Controller\ManipulateProduct;
use Model\Product;

$button = '<form action="shoppingCartView.php" method="POST">';
$button .= ' <button type="submit" formaction="shoppingCartView.php">See your Shopping Cart</button>';
$button .= '</form>';
echo $button . "</br>";

$productConn = new Product;
$inventar = new ManipulateProduct($productConn);

$inventar->showProduct();

$_SESSION['shopping cart'][] = [$_POST["productId"], $_POST["quantity"]];
var_dump($_SESSION['shopping cart']);
