<?php

namespace Controller;

class showTable
{

    private $connection;
    public function __construct($connection)
    {
        $this->$connection = $connection;
    }
    public function showTheTable(): void
    {
//functie de citire a tabelei de la baza de date
    }
}
