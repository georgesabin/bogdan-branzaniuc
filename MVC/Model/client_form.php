<?php
namespace Model;

use Controller\ConnectBdate;

$connection = new ConnectBdate;
//baza de date se numeste Stoc iar tabela Product,
#### voi folosi Product la clasa care va afisa produsul particular selectat de client
class Stoc
{
    private $conn;
    public function __construct($connection)
    {
        $this->$conn = $conn;
    }
    //aici chemam din controller ce avem nevoie
}

//$produs = new Product($connection); PENTRU VIEW
//ClientForm va construi formularul afisat clientului  cu int imput ID, select type Valute si submit-button
class ClientForm extends AbstractForm
{
    public function buildForm()
    {
        $form = $this->startForm("POST", "index.php");
        $form .= $this->intType("ID") . "\n";
        $form .= $this->selectType("Currency", ['USD' => 'USD', 'EUR' => 'EUR', 'VAT' => 'VAT']) . "\n";
        $form .= $this->submitType("Submit", "submit");
        $form .= $this->endForm();
    }

}
