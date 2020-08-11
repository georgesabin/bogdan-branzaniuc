<?php
namespace Controller;

use Model\Product as ModelProdus;

#controler test
$productObject = new ModelProdus;
$productObject->connectDb();

$productObject = new ModelProdus;
class Product
{
    private $productObject;
    public function __construct($productObject)
    {
        $this->productObject = $productObject;
    }
    // I
    public function cazuriValutare()
    {

    }
    // II
    public function showRequestedProduct()
    {

    }
    // III
    public function updatedVat()
    {

    }

    // IV
    public function updatedDb()
    {

    }
    // V
    public function errorID()
    {

    }
    // VI
    private function verificareDate()
    {

    }
}

/*„Schimba pretul, codul valutar, si tva-ul produsului in functie de requestul din form ( controller ).
-Va avea ca si componenta clasa DataBase care se va conecta la baza de date, avand urmatoarele metode:
I – o metoda cu toate cazurile posibile de perechi valutare cu operatiile/raporturile dintre valutele date de actuala baza de date si request-ul din form;
II – o metoda care schimba tva-ul in functie de noul pret;
III – o metoda care face verificarea datelor trimise de formular la ID
IV – o metoda care face afisarea bazei de date editate inurma requestului din form
V – o metoda care da eroare, Cazul red in care ID-ul produsului nu exista- echo mesaj eroare.
VI –o metoda care va afisa requestul utilizatorului (produsul selectat in particular).*/
