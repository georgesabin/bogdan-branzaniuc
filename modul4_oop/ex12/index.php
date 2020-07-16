<?php
/* Creeaza:
  1. o clasa abstracta Rectangle
  2. o clasa Square ce va extinde clasa Rectangle
  3. o clasa Circle
  4. o interfata CircleInterface>

Clasa Rectangle:
  1. va avea doua proprietati private $width si $height
  2. o metoda publica area() ce va calcula aria si o va returna
  A = w x h

Clasa Cirlce va avea:
  1. o constanta PI = 3.14
  2. o proprietate privata $radius
  3. o metoda publica area() ce va calcula aria si o va returna
  A = PI * ( r ^ 2)

Instantiaza cele doua clase si afiseaza ariile */
abstract class Rectangle
{
    private $width = 0;
    private $height = 0;
    abstract public function area(): void;
}
class Square extends Rectangle
{
    public function __construct(float $h, float $w)
    {
        $this->height = $h;
        $this->width = $w;
    }
    public function area(): void
    {
        echo $this->width * $this->height . "</br>";
    }
}
interface CircleInterface
{
    public function area(): void;
    const PI = 3.14;
}
class Circle implements CircleInterface
{
    private $radius = 0;
    public function __construct(float $r)
    {
        $this->radius = $r;
    }
    public function area(): void
    {
        echo self::PI * $this->radius . "</br>";
    }
}
$lilSquare = new Square(20, 20);
$lilSquare->area();

$lilCircle = new Circle(10);
$lilCircle->area();
