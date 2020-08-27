<?php
namespace controller;

include_once '../Model/ScartModel.php';
use Model\ShoppingCartModel;

class ShoppingCart extends ShoppingCartModel
{
    public function __construct($session)
    {
        parent::__construct();
    }
    ////////////////////////////////////////////FUNCTII//////////////////////////////////
    //afiseaza un buton de stergere a produsului din cos in functie de cantitatea selectata,
    #daca q(erase)=5 && q(introdusa in cos)=7, {q=7-5} , elseif q(erase)==q(initiala) || q(erase)>q(initiala) {unlink product from session}
    //un select pentru schimbarea culorii
    //calcularea pretului in functie de cantitatea produsului
}
