<?php

include_once 'Classes/AbstractForm.php';
include_once 'Classes/NumberOfColumnsForm.php';
include_once 'Classes/ColumnsForm.php';

use Classes\ColumnsForm;
use Classes\NumberOfColumnsForm;

/**
 * Instantiaza clasa NumberOfColumnsForm ce va avea ca action fisierul curent si un method type
 * Se verifica daca informatia din formular a fost trimisa la server si se creeaza o instanta din
 * ColumnsForm si se afiseaza noul formular
 * Formularul nou va avea action-ul fisierul db.php, loc in care se face crearea tabelei
 */
$nrColumns = new NumberOfColumnsForm("index.php", "POST");

echo $nrColumns->buildForm();

if (isset($_POST['nrColumns'])) {

    $numberOfColumns = (int) $_POST['nrColumns'];
    $columnsForm = new ColumnsForm("db.php", "POST", $_POST['nrColumns']);
    echo $columnsForm->buildForm();
}
