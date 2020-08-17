<?php
namespace Controller;

class ManipulateProduct
{
    private $productObject;
    public function __construct($productObject)
    {
        $this->productObject = $productObject;
    }
    // inmulteste pretul produselor din baza de date cu raportul valutar trimis de client prin codul valutar selectat in formular
   
    

    public function errorID(): void
    {

    }
    // VI
    private function verificareDate(): void
    {

    }
}

include_once 'abstract_form.php';
use Controller\AbstractForm;
class ClientForm extends AbstractForm
{

    public function buildForm(): string
    {
        $form = $this->startForm($this->action, $this->method);
        $form .= $this->intType("ID") . "\n";
        $form .= $this->selectType("Currency", ['USD' => 'USD', 'EUR' => 'EUR', 'ZAR' => 'ZAR']) . "\n";
        $form .= $this->submitType("Submit", "submit");
        $form .= $this->endForm();
        return $form;
    }

}
