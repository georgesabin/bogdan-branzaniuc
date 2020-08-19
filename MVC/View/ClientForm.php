<?php
namespace View;

include_once '../Controller/abstract_form.php';
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
