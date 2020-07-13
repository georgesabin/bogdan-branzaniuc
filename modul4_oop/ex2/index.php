<?php
/* Creeaza o clasa simpla care afiseaza un mesaj introductiv de forma:
Hi! I'm NAME
NAME va fi valoarea unui parametru al unei metode din clasa. */
class MesajIntroductiv
{
    public $msg = "HI! I'm" . " ";
    public function ecou(string $name): void
    {
        echo $this->msg . $name;
    }

}

$mesaj = new MesajIntroductiv();
$mesaj->ecou("Paguba");
