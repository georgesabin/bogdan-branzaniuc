<?php
namespace View;

include_once '../Model/model.php';
include_once '../Controller/controller.php';
//include_once '../Model/tableProduct.php';
include_once '../Helper/helper.php';
//include_once 'index.php';
use controller\ManipulateProduct;
use Helper\Helper;
use model\Product;

//afisare produs selectat cu pret si tva, extrase direct din tabela updatata.

if (isset($_POST['ID'])) {
    $postId = Helper::verificareDate($_POST["ID"]);
    $product = new Product($postId, $_POST['Currency']);
    $productController = new ManipulateProduct($product);

    $productController->showProduct();
    $productController->vatTax();
    $productController->currencyCases();
}
