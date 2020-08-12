<?php
use Controller\ConnectBdate;

$connection = new ConnectBdate;
//baza de date se numeste Stoc iar tabela Product,
#### voi folosi Product la clasa care va afisa produsul particular selectat de client
class Product
{
    private $conn;
    public function __construct($connection)
    {
        $this->$conn = $conn;
    }
    //aici chemam din controller ce avem nevoie
}
