<?php
namespace View;

session_start();
include_once '../Helper/helper.php';
include_once '../Model/product.php';
include_once '../Controller/controller.php';
use Controller\ManipulateProduct;
use Helper\Helper;
use Model\Product;

echo Helper::actionButton("shoppingCartView.php", "see shopping cart", "POST", "See your Shopping Cart");

$productConn = new Product;
$inventar = new ManipulateProduct($productConn);

$inventar->showProduct();
if ($_POST["productId"] != null) {
    $_SESSION['shopping cart'][] = ["id" => $_POST["productId"], "quantity" => $_POST["quantity"], "color" => $_POST["color"], "model" => $_POST["model"]];
}
//var_dump($_SESSION['shopping cart']);
