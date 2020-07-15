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
    public function round($parametru)
    {
        $this->x = $parametru;
        echo round($this->x);
    }
}
class Cylinder implements CylinderInterface
{
    use Helper;
    const PI = 3.14;
    private $r = 0;
    private $h = 0;
    private $v = 0;
    private $a = 0;
    //constructor
    public function __construct($radius, $height)
    {
        $this->r = $radius;
        $this->h = $height;
    }
    //metoda arie
    public function area()
    {
        $this->a = 2 * self::PI * $this->r * ($this->r + $this->h); //A = 2 * PI * r * (r + h)
        if (is_double($this->a)) {
            return round($this->a);
        } else {
            return $this->a;
        }
    } // metoda volum
    public function volume()
    {
        $this->v = self::PI * $this->r ^ 2 * $this->h; //V = PI * r ^ 2 * h
        if (is_double($this->v)) {
            return round($this->v);
        } else {
            return $this->v;
        }
    }
    public function afisare(): void
    {
        echo "The cylinder with radius " . $this->r . " and height " . $this->h . " has area " . $this->area() . " and volume " . $this->volume();
    }
}
$cilindru = new Cylinder(10.12341, 20);
$cilindru->afisare();
