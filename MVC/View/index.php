<?php
include_once 'abstract_form.php';
include_once '../Model/model.php';
include_once '../Controller/controller.php';
use Controller\AbstractForm;
use Controller\ManipulateProduct;
use Model\Product;

//formular
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

};
$clientForm = new ClientForm('index.php', 'POST');
echo $clientForm->buildForm();

//the big deal /////////// logica dintre model si constructor /////////////
$postID = verificareDate($_POST['ID']);

$product = new Product($postID, $_POST['Currency']);
$productController = new ManipulateProduct;

//if Id inexistent, eroare : ID-ul produsului nu exista in stocul nostru

//afisare produs selectat cu pret si tva, extrase direct din tabela updatata.

//preventXSS la ID
function testImput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
function verificareDate($x)
{
    if (!empty($x)) {
        $x = testImput($x);
        return $x;
    }
}
