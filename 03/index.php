<?php

require 'User.php';

$budi = new User();
$budi->setPassword('12121212');

var_dump($budi->getPassword());
