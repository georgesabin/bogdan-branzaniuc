<?php
include_once 'database.php';
include_once 'form.php';
$formObject = new Form('POST', 'index.php');
echo $formObject->build();

if (isset($_POST['db'])) {

    $dbName = $formObject->preventXSS($_POST['db']);
    $dbObject = new Database($dbName);
    $dbObject->connectAndCreateDatabase();
    header("Location: index.php?mesaj=Baza de date a fost creata cu succes");
}
if (isset($_GET['mesaj'])) {
    echo sprintf('<span class="mesaj">%s</span>', $_GET['mesaj']);
}
