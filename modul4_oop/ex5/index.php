<?php
/* Creeaza o clasa numita Calculator care va primi 2 valori trimise ca parametru ce vor reprezenta operanzii.

Clasa va avea:
1. un constructor
2. o metoda private pentru operatia de adunare
3. o metoda private pentru operatia de scadere
4. o metoda private pentru operatia de inmultire
5. o metoda privata pentru operatia de modulo */

class Calculator
{
    private $a = 0;
    private $b = 0;
    public function __construct($x, $y)
    {
        $this->a = $x;
        $this->b = $y;
    }
    private function adunare(): void
    {
        echo $this->a + $this->b;
        echo "</br>";
    }
    private function scadere(): void
    {
        echo $this->a - $this->b;
        echo "</br>";
    }
    private function inmultire(): void
    {
        echo $this->a * $this->b;
        echo "</br>";
    }private function modulo(): void
    {
        echo $this->a % $this->b;

    }
    public function operare($z): void
    {
        switch ($z) {
            case 1:
                $this->modulo();
                break;
            case 2:
                $this->scadere();
                break;
            case 3:
                $this->adunare();
                break;
            case 4:
                $this->inmultire();
                break;
            default:
                $this->modulo();
                $this->scadere();
                $this->inmultire();
                $this->adunare();
                break;
        }
    }

}
$miniPc = new Calculator(15, -17);
$post = $miniPc->operare(0);
