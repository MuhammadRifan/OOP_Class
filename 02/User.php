<?php

class User // class itu seperti kerangka dalam php yang berisi beberapa method dan property
{
    public $email; // property >> berfungsi seperti variabel
    public $password; // property
    const MINCHARS = 8; // constanta hampir sama seperti property tetapi dia tidak bisa diubah
                        // dan harus ditetapkan isinya dari awal

    public function login() // method >> ini berfungsi seperti function pada umumnya
    {
        return 'logging in ..'; // return >> mengembalikan string jika function ini dipanggil
    }

    public function logout() // method
    {
        return 'logging out ...'; // isi method
    }

    public function setPassword($string) // method, bisa diberi parameter sama seperti function pada biasanya
    {
        if (strlen($string) < self::MINCHARS) { // strlen digunakan untuk menghitung jumlah karakter ( string )
            // self::MINCHARS >> self digunakan untuk memanggil constanta, MINCHARS merupakan nama dari constanta tersebut
            throw new Exception('Minimal karakter password adalah '.self::MINCHARS);
            // throw new Exception >> merupakan error jenis exception ( pengecualian )
        }
        $this->password = hash('sha256', $string);
            // $this->password >> $this-> digunakan untuk memanggil property
            // password merupakan nama dari property tersebut
            // hash >> digunakan untuk mengacak kata atau angka menjadi sesuatu yang tidak beraturan
    }
}
