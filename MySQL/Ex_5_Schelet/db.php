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
function preventXSSArray(array $arr): array
{if (!empty($arr)) {
    $preventArray = [];
    foreach ($arr as $value) {
        $preventArray[] = preventXSS($value);
    }
    return $preventArray;
} else {
    return 0;
}
}
var_dump($_POST);

$dbName = preventXSS($_POST['numeBazaDate']);
$tableName = preventXSS($_POST['numeTabel']);
$colName = preventXSSArray($_POST['columnName']);
$colType = preventXSSArray($_POST['columnType']);
$colSize = preventXSSArray($_POST['columnSize']);

$db = new CreateTable($dbName, $tableName, $colName, $colType, $colSize);
$db->createTable();
