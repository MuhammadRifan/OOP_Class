<?php

class Mobil
{
    public $warna;
    public $merk;
    const BAN = 4;

    public function cekMobil($roda)
    {
        if ($roda != self::BAN) {
            throw new Exception('Itu bukan termasuk mobil karena roda mobil anda = '.$roda);
        } else {
            $warna = $this->warna;
            $merk = $this->merk;
            $text = "Mobil anda berwarna $warna, dan bermerk $merk";
            return $text;
        }
    }
}
