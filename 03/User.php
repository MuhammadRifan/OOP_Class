<?php

class User
{
    private $email; // property di atur sebagai private itu artinya property ini tidak bisa digunakan diluar class
    private $password; // berbeda dengan public karena public bisa digunakan diluar class
    const MINCHARS = 8;

    public function login()
    {
        return 'logging in ..';
    }

    public function logout()
    {
        return 'logging out ...';
    }

    public function setPassword($string)
    {
        if ($this->validatePassword($string) == false) {
            throw new Exception('Minimal karakter password adalah '.self::MINCHARS);
        }
        $this->password = hash('sha256', $string);
    }

    public function getPassword() // karena password di private dan tidak bisa digunakan diluar class, maka cara
    {
        return $this->password; // mengeluarkannya hanya melalui public method
    }

    public function setEmail($string) // karena email di private dan tidak bisa digunakan diluar class, maka cara
    {
        if (!filter_var($string, FILTER_VALIDATE_EMAIL)) { // mengisinya hanya melalui public method
            // if diatas digunakan untuk menfilter email, apakah email tersebut benar email apa tidak
            throw new Exception('Gunakan email yang valid');
        }
        $this->email = $string;
    }

    public function getEmail()
    {
        return $this->email;
    }

    private function validatePassword($string)
    {
        // sama seperti private property, private method juga tidak bisa digunakan diluar class
        return strlen($string) < self::MINCHARS ? false : true;
        // diatas merupakan if 1 kondisi yang simpel, jadi tidak terlalu memakan banyak baris
        // ? >> akhir dari if, : >> adalah else
    }
}
