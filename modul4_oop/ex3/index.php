<?php
/* Creeaza o clasa care sorteaza un vector cu elemente intregi, folosind functia PHP sort().

Clasa va avea:
1. O proprietate privata ce va fi vectorul tau.
2. O metoda publica set, care seteaza proprietatea din exterior.
3. O metoda publica in care se sorteaza vectorul si se afiseaza utilizatorului array-ul sortat. */

class SortareArray
{
    private $vector = [];
    public function setArray(array $adaptor = []): void
    {
        $this->vector = $adaptor;
    }

    public function sortare(): void
    {
        sort($this->vector);
        var_dump($this->vector);

    }

}
$obj = new SortareArray();
$obj->setArray([1, 2, 6, 8, 5, 3, 4, 7, 20, 25, 23, 28, 21]);
$obj->sortare();
