<?php

include_once '../Model/model.php';
include_once '../Controller/controller.php';
include_once 'ClientForm.php';
include_once '../Model/tableProduct.php';

use Model\TableProduct;
use View\ClientForm;
use View\Helper;
//tabela
$table = new TableProduct;
$table->showTable();
//formular
$clientForm = new ClientForm('view.php', 'POST');
echo $clientForm->buildForm();

//if Id inexistent, eroare : ID-ul produsului nu exista in stocul nostru
