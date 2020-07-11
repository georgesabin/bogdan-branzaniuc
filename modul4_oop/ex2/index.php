<?php
/* Creeaza o clasa simpla care afiseaza un mesaj introductiv de forma:
Hi! I'm NAME
NAME va fi valoarea unui parametru al unei metode din clasa. */
class MesajIntroductiv
{
    public $msg = "HI! I'm" . " ";
    function echo (string $name): void { // extensia de indentare imi scoate public de la function,
        echo $name;
    }

}

$mesaj = new MesajIntroductiv();
$numeUtilizator = "Paguba";
echo $mesaj->msg;
$mesaj->echo($numeUtilizator);
