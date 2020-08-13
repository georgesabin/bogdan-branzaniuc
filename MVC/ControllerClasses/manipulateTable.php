<?php
namespace Controller;
//aceasta clasa schimba datele din baza de date la cerinta formularului completat de client
class ManipulateProduct
{
    private $productObject;
    public function __construct($productObject)
    {
        $this->productObject = $productObject;
    }
    // inmulteste pretul produselor din baza de date cu raportul valutar trimis de client prin codul valutar selectat in formular
    public function currencyCases(): void
    {

        if ($_POST['Currency'] == "USD" && $valutaBdate = "EUR") {
            //change in baza de date.
        } elseif ($_POST['Currency'] == "EUR" && $valutaBdate = "USD") {
            //change in baza de date.
        } elseif ($_POST['Currency'] == "USD" && $valutaBdate = "ZAR") {
            //change in baza de date.
        } elseif ($_POST['Currency'] == "ZAR" && $valutaBdate = "USD") {
            //change in baza de date.
        } elseif ($$_POST['Currency'] == "ZAR" && $valutaBdate = "EUR") {
            //change in baza de date.
        } elseif ($_POST['Currency'] == "EUR" && $valutaBdate = "ZAR") {
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
