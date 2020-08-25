<?php
namespace View;

//aici se afiseaza magazinul cu lista de produse

include_once 'stocSelectTypes.php'; //formularul pentru culoare, model, cantitate
include_once '../Model/inventar.php';
include_once '../Controller/controller.php';
use Controller\ManipulateProduct;
use Model\Product;

$productConn = new Product;
$inventar = new ManipulateProduct($productConn, $showSelectTypes);
$inventar->showProduct();
