<?php
/* Creeaza o interfata Animal si o clasa Dog:
  1. Interfata va avea o metoda numita action ce va returna un string (actiunea pe care o face, ex: Alearga, Mananca etc)
  2. Clasa va implementa interfata
  3. Creeaza un obiect din clasa Dog si afiseaza ce returneaza metoda */
interface Animal
{
    public function afisareSpecie(): void;
}

class Dog implements Animal
{
    public $specie = "";
    public function __construct($specieAnimal)
    {
        $this->specie = $specieAnimal;
    }
    public function afisareSpecie(): void
    {
        echo "specia este: " . $this->specie;
    }
}
$caine = new Dog("labradorul lui Sabin <3");
$caine->afisareSpecie();
