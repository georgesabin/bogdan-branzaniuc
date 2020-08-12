<?php
namespace Controller;

class ManipulateStoc
{
    private $productObject;
    public function __construct($productObject)
    {
        $this->productObject = $productObject;
    }
    // inmulteste pretul produselor din baza de date cu raportul valutar trimis de client prin codul valutar selectat in formular
    public function currencyCases(): void
    {
        $post = 0;
        if ($post == "USD" && $valutaBdate = "EUR") {
            //change in baza de date.
        } elseif ($post == "EUR" && $valutaBdate = "USD") {
            //change in baza de date.
        } elseif ($post == "USD" && $valutaBdate = "ZAR") {
            //change in baza de date.
        } elseif ($post == "ZAR" && $valutaBdate = "USD") {
            //change in baza de date.
        } elseif ($post == "ZAR" && $valutaBdate = "EUR") {
            //change in baza de date.
        } elseif ($post == "EUR" && $valutaBdate = "ZAR") {
            //change in baza de date.
        }

    }
    // II
    public function showRequestedProduct(): void
    {

    }
    // III
    public function updatedVat(): void
    {

    }

    // IV
    public function updatedDb(): void
    {

    }
    // V
    public function errorID(): void
    {

    }
    // VI
    private function verificareDate(): void
    {

    }
}
