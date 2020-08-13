<?php
namespace Model;

//$produs = new Product($connection); PENTRU VIEW
//ClientForm va construi formularul afisat clientului  cu int imput ID, select type Valute si submit-button
class ClientForm extends AbstractForm
{
    public function buildForm()
    {
        $form = $this->startForm("POST", "index.php");
        $form .= $this->intType("ID") . "\n";
        $form .= $this->selectType("Currency", ['USD' => 'USD', 'EUR' => 'EUR', 'ZAR' => 'ZAR']) . "\n";
        $form .= $this->submitType("Submit", "submit");
        $form .= $this->endForm();
    }

}
