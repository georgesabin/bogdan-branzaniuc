<?php

include_once 'Selling/sell.php';

$vanzare = new Selling\Sell('perie tintoretto de parpriz');
echo $vanzare->product() . "\n";

use Selling\Sell as Sold;
$vanzare2 = new Sold('palarie');
echo $vanzare2->product() . "\n";
