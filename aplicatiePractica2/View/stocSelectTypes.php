<?php
namespace View;

include_once '../Controller/abstractForm.php';
use Controller\AbstractForm;

class StocSelectTypes extends AbstractForm
{
    public function buildForm(): string
    {
        $form = $this->startForm($this->action, $this->method);
        $form .= $this->selectType("Color", ["Red", "Green", "Dark"], "culoare");
        $form .= $this->selectType("Model", ["1", "Cardistry Model", "Poker Model"], "model");
        $form .= $this->selectType("Quantity", ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10"], "cantitate"); // mai tarziu voi refactoriza acest input type sa fie de tip int si submit, cu butoane "+"/"-"
        $form .= $this->submitType("submit", "adauga in cos");
        $form .= $this->endForm();
        return $form;
    }
}
$stocSelectTypes = new StocSelectTypes("index.php", "POST");
$showSelectTypes = $stocSelectTypes->buildForm();
