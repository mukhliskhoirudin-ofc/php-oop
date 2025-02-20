<?php

//static keyword, kita bisa mengakses property dan method tanpa melakukan instansiasi dari class tersebut, dengan menggunakan static keyword

//contoh 1
class ContohStatic
{
    public static $angka = 1;   //ini mengunakan static

    public static function hallo()
    {
        return "hallo " . self::$angka++ . " kali. <br>";      //gunakan self::untuk panggil property
    }
}

echo ContohStatic::$angka;      //untuk panggil static property, ini menggunakan static
echo "<hr>";

echo ContohStatic::hallo();     //untuk panggil static methodnya
echo ContohStatic::hallo();
echo ContohStatic::hallo();
echo "<hr>";


//contoh 2
class Contoh
{
    public static $angka = 1;   //contoh ketika menggunakan static, maka angkanya tidak akan di reset ketika buat object baru

    public function hallo()
    {
        return "hallo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();
