<?php
/* 7.Creeaza o clasa MyClass ce va preveni mostenirea.
8.Creeaza o clasa Oject ce va contine o metoda ce nu va oferi posibilitatea suprascrierii ei. */
final class MyClass
{
    private $x = "";
    final public function __construct($testament)
    {
        $this->x = $testament;
    }
    final public function pentruNepoti()
    {
        echo $this->x;
    }
}
$secret = new MyClass("nu va dau nimic");
$secret->pentruNepoti();
//am scris totul dintr-un shot si am verificat doar la final :)) a little and significant improovment
