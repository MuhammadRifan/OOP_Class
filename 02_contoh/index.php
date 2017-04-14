<?php

require 'Mobil.php';

$car = new Mobil();
$car->warna = "Merah"; // digunakan untuk mengisi property pada class
$car->merk = "Toyota"; // caranya yaitu menulis object terlebih dahulu ( $car-> ) lalu nama property nya

echo $car->cekMobil(4);
echo "<hr>";
var_dump($car);
