<?php

require 'Mobil.php';

$car = new Mobil();
$car->setWarna("Merah");
$car->setMerk("Toyota");
$car->roda = 4;

$car->cekMobil();
echo "<hr>";
var_dump($car);
