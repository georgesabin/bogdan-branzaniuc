<?php
namespace View;

include_once '../Controller/abstractForm.php';

class StocSelectTypes extends AbstractForm
{
    public function buildForm()
    {
        $form = $this->startForm("inventarView.php", "POST");
        $form .= $this->selectType("Color", ["Red", "Green", "Dark"]);
        $form .= $this->selectType("Model", ["1", "2"]);
        $form .= $this->selectType("Quantity", ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"]); // mai tarziu voi refactoriza acest input type sa fie de tip int si submit, cu butoane "+"/"-"
        $form .= $this->endForm();
        return $form;
    }
}
$stocSelectTypes = new StocSelectTypes;
$showSelectTypes = $stocSelectTypes->buildForm();
