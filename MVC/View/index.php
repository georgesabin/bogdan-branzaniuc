<?php

use Controller\ClientForm;
use Model\Product;
include_once '../Model/model.php';
include_once '../Controller/controller.php';
//Show product tabele
$table = new Product();
$table->showTable();

//afisare formular

$clientForm = new ClientForm('index.php', 'POST');
echo $clientForm->buildForm();
//if Id inexistent, eroare : ID-ul produsului nu exista in stocul nostru

//show updated table Product

//afisare formular

//afisare produs selectat cu pret si tva, extrase direct din tabela updatata.
if (isset($_POST['ID'])) {
    $table->ShowProduct();
}
$table->vatTax();
$table->currencyCases();
