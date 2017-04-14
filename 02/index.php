<?php

require 'User.php'; // require >> digunakan untuk memanggil atau menggunakan file lain

$budi = new User(); // ini adalah object, object adalah cara untuk menggunakan class
$budi->setPassword('passwordku'); // ini adalah cara untuk menggunakan function dari class User()
                                // caranya yaitu menulis object terlebih dahulu ( $budi-> ) lalu nama function nya
var_dump($budi); // var_dump digunakan untuk mengetahui tipe data dan isi dari sebuah variabel
