<?php
/* Creeaza un fisier sell.php:
  1. defineste namespace-ul
  2. creeaza o clasa Sell ce va avea o singura metoda publica product
  3. metoda va returna un string (numele unui produs)

Creeaza un fisier shop.php in care sa folosesti namespace-ul, instantiezi clasa si afisezi numele produsului:
  1. namespace-ul va fi folosit prin cele trei variante prezentate in curs
  - direct
  - prin cheia use
  - cu alias (as) */
namespace Selling;

class Sell
{
    private $name = "";
    public function __construct($n)
    {
        $this->name = $n;
    }
    public function product()
    {
        return $this->name;
    }
}
