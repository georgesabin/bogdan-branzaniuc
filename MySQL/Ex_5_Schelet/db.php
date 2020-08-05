<?php

include_once 'Classes/CreateTable.php';
use Classes\CreateTable;
/**
 * Se fac verificarile informatiilor primite de la formular si se instantiaza clasa
 * CreateTable pentru a crea tabela pe serverul MySQL
 */
function testImput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
function preventXSS($x)
{

    if (!empty($x)) {
        $x = testImput($x);
        return $x;
    }
}
var_dump($_POST);

$dbName .= preventXSS($_POST['numeBazaDate']);
$tableName .= preventXSS($_POST['numeTabel']);
$colName[] = preventXSS($_POST['columnName']);
$colType[] = preventXSS($_POST['columnType']);
$colSize[] = preventXSS($_POST['columnSize']);

$db = new CreateTable($dbName, $tableName, $colName, $colType, $colSize);
$db->createTable();
