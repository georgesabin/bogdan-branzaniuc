<?php
include_once 'index.php';
//afisare produs selectat cu pret si tva, extrase direct din tabela updatata.

if (isset($_POST['ID'])) {
    $productController->showProduct();
    $productController->vatTax();
    $productController->currencyCases();
}
