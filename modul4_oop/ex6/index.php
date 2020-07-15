<?php
/* Pe baza principiului mostenirea din OOP:
  1. Creeaza o clasa parinte numita Vehicle ce va contine urmatoarele:
  - Proprietati protected:
   * $color -> string
   * $weight -> double
   * $consumption -> double
   * $countryOfOrigin -> string
   * $fuelType -> string
   * $tachometer -> double
  - Un constructor care sa initializeze proprietatile (vor avea valori predefinite)
  - Un destructor ce va afisa un simplu string: The destruct method was called!
  - O metoda publica care afiseaza informatiile despre vehicul
  2. Creeaza o clasa copil numita Car ce va contine:
  - Proprietati private ce vor forma numarul de inmatriculare:
   * $county -> string (doar 2 caractere, ex: IS)
   * $number -> string (doar 2 cifre, ex: 01)
   * $characters -> string (doar 3 caractere, ex: ABC)
  - O metoda publica ce va afisa numarul de inmatriculare sub forma: IS 01 ABC
  - Creeaza doua obiecte si apeleaza metodele.
  3. Creeaza o clasa copil numita Bike:
  - Suprascrie metoda din clasa parinte si afiseaza doar $color si $weight.
Ex: The bike has a $color color and a weight of $weight.
  - Creeaza un obiect si apeleaza metoda de afisare a informatiilor.  */
class Vehicle
{
    protected $color = '';
    protected $weight = 0;
    protected $consumption = 0;
    protected $countryOfOrigin = '';
    protected $fuelType = '';
    protected $tachometer = 0;

    public function __construct(string $col, float $w, float $cons, string $country, string $f, float $t)
    {
        $this->color = $col;
        $this->weight = $w;
        $this->consumption = $cons;
        $this->countryOfOrigin = $country;
        $this->fuelType = $f;
        $this->tachometer = $t;
    }
    public function __destruct()
    {
        echo "The destruct method was called!" . "</br>";
    }
    public function afisare(): void
    {
        echo "culoare:" . "&nbsp" . "&nbsp" . $this->color . "</br>";
        echo "greutate:" . "&nbsp" . "&nbsp" . $this->weight . "</br>";
        echo "consum:" . "&nbsp" . "&nbsp" . $this->consumption . "</br>";
        echo "tara de origine:" . "&nbsp" . "&nbsp" . $this->countryOfOrigin . "</br>";
        echo "tip combustibil:" . "&nbsp" . "&nbsp" . $this->fuelType . "</br>";
        echo "tahometru:" . "&nbsp" . "&nbsp" . $this->tachometer . "</br>";

    }
}
class Car extends Vehicle
{
    private $county = ""; #(doar 2 caractere, ex: IS)
    private $number = 0; #(doar 2 cifre, ex: 01)
    private $characters = ""; #(doar 3 caractere, ex: ABC)
    public function __construct(string $county, int $number, string $characters, string $col, float $w, float $cons, string $country, string $f, float $t)
    {
        $this->county = $county;
        $this->number = $number;
        $this->characters = $characters;
        parent::__construct($col, $w, $cons, $country, $f, $t);
    }
    public function placaM(): void
    {
        echo $this->county . "" . $this->number . "" . $this->characters;
    }
}
//masina1
$masinaCluj = new Car("CJ", 41, "IFE", "red", 1115.52, 15.2, "Romania", "cherosen", 22.22);
$masinaCluj->placaM();
$masinaCluj->afisare();

//masina2
$masinaIasi = new Car("IS", 41, "IFE", "green", 1115.52, 15.2, "Romania", "cherosen carcinogenic", 22.22);
$masinaCluj->placaM();
$masinaCluj->afisare();

//bicicleta
class Bike extends Vehicle
{
    public function afisare(): void
    {
        echo "culoare:" . "&nbsp" . "&nbsp" . $this->color . "</br>";
        echo "greutate:" . "&nbsp" . "&nbsp" . $this->weight . "</br>";
    }
}

$bicicleta = new Bike("red", 12.31, 0, "Romania", "gambe", 1000.24);
$bicicleta->afisare();
