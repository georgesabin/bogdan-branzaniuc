<?php

include_once '../Model/model.php';
include_once '../Controller/controller.php';
include_once 'ClientForm.php';
include_once '../Model/tableProduct.php';
include_once 'helper.php';
use Controller\ManipulateProduct;
use Model\Product;
use Model\TableProduct;
use View\ClientForm;
use View\Helper;
//tabela
$table = new TableProduct;
$table->showTable();
//formular
$clientForm = new ClientForm('view.php', 'POST');
echo $clientForm->buildForm();

//verificare date

if (isset($_POST["ID"])) {

    $postId = Helper::verificareDate($_POST["ID"]);
    $product = new Product($postId, $_POST['Currency']);
    $productController = new ManipulateProduct($product);
}

//if Id inexistent, eroare : ID-ul produsului nu exista in stocul nostru
