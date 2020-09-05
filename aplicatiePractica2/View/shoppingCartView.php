<?php
namespace View;

include_once '../inc/header.php';
include_once '../Helper/helper.php';
include_once '../Controller/ScartController.php';
include_once '../Model/ScartModel.php';
use Controller\ShoppingCart;
use Helper\Helper;
use Model\shoppingCartModel;

if (isset($_SESSION['shopping cart'])) {
    $select = new shoppingCartModel();
    $shoppingCart = new ShoppingCart($_SESSION['shopping cart'], $select);
    $shoppingCart->calculate();
    $shoppingCart->showShoppingCart();
    echo "</br></br></br>";
    echo "Chgeck out: " . "</br>";
    echo Helper::emailForm("../View/shoppingCartView.php", "emailSubmit", "POST");
    if (isset($_POST['emailSubmit'])) {
        $_POST['emailSubmit'] = Helper::verificareDate($_POST['emailSubmit']);
        echo Helper::sendEmail($_POST['emailSubmit']);
    }
}
