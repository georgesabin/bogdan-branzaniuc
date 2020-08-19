<?php
namespace Controller;

class ManipulateProduct
{
    private $product;
    public function __construct($product)
    {
        $this->product = $product;
    }

    public function errorID(): void
    {
// to be continued
    }

    public function showTable()
    {
        $this->product->showTable();
    }
    public function showProduct()
    {
        $this->product->showProduct();
    }
    public function vatTax()
    {
        $this->product->vatTax();
    }
    public function currencyCases()
    {
        $this->product->currencyCases();
    }
}
