<?php

include_once 'Classes/CreateTable.php';

use Clasees\CreateTable;

/**
 * Se fac verificarile informatiilor primite de la formular si se instantiaza clasa
 * CreateTable pentru a crea tabela pe serverul MySQL
 */
function preventXSS($x)
{
    function testImput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        return htmlspecialchars($data);
    }
    if (!empty($x)) {
        $x = testImput($x);
        return $x;
    }
}
$dbName = preventXSS($_POST['numeBazaDate']);
$tableName = preventXSS($_POST["numeTabel"]);
$colName = preventXSS($_POST['columnName[]']);
$colType = preventXSS($_POST['columnType']);
$colSize = preventXSS($_POST['columnSize[]']);

$Tabel = new CreateTable($dbName, $tableName, $colName, $colType, $colSize);
$Tabel->createTable();
