<?php
namespace Controller;

$connectToProduct = new ConnectBdate;

class SelectedProduct
{
    private $productDb;
    public function __construct($connectToProduct)
    {
        $this->productDb = $connectToProduct;
    }
    //echo produs pret tva si valuta din baza de date
}
