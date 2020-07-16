<?php
/* Creeaza o interfata CylinderInterface care va avea:
  1. o metoda area()
  2. o metoda volume()

Creeaza un trait cu numele Helper:
  1. va contine o metoda publica statica round, care va folosi functia built-in round si vei rotunji numarul
  EX: round(5.3) => 5; round(5.6) => 6

Creeaza o clasa Cylinder:
  1. va implementa interfata
  2. va avea o constanta PI ce va contine valoarea lui PI = 3.14
  3. va avea doua proprietati private $radius si $height
  4. va calcula aria unui cilindru (metoda va returna rezultatul)
  A = 2 * PI * r * (r + h)
  5. va calcula volumul unui cilindru (metoda va returna rezultatul)
  V = PI * r ^ 2 * h
  6. daca volumul sau aria, dupa calcul, are valoarea de tip double atunci folosind metoda
din trait vei face round. Metoda round va fi folosita in metoda de calcul al ariei si al volumului
Instantiaza obiectul si afiseaza aria/volumul sub forma:
The cylinder with $radius and $height has AREA and VOLUME */
interface CylinderInterface
{
    public function area();
    public function volume();
}
trait Helper
{
    public static function round($parametru)
    {
        round($parametru);
    }
}
class Cylinder implements CylinderInterface
{
    use Helper;
    const PI = 3.14;
    private $radius = 0;
    private $height = 0;
    private $volum = 0;
    private $arie = 0;
    //constructor
    public function __construct($r, $h)
    {
        $this->radius = $r;
        $this->height = $h;
    }
    //metoda arie
    public function area()
    {
        $this->arie = 2 * self::PI * $this->radius * ($this->radius + $this->height); //A = 2 * PI * r * (r + h)
        if (is_double($this->arie)) {
            return Helper::round($this->arie);
        } else {
            return $this->arie;
        }
    } // metoda volum
    public function volume()
    {
        $this->volum = self::PI * $this->radius ** 2 * $this->height; //V = PI * r ^ 2 * h
        if (is_double($this->volum)) {
            return Helper::round($this->volum);
        } else {
            return $this->volum;
        }
    }
    public function afisare(): void
    {
        echo "The cylinder with radius " . $this->radius . " and height " . $this->height . " has area " . $this->area() . " and volume " . $this->volume();
    }
}
$cilindru = new Cylinder(10.12341, 20);
$cilindru->afisare();
