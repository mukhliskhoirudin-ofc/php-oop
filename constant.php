<?php

//ini menggunakan define, tidak bisa disimpan didalam kelas, harus disimpan di luar sebagai konstanta global
define('NAMA', 'Mukhlis Khoirudin');
echo NAMA;
echo "<br>";

//ini menggunakan const, bisa dimasukkan didalam kelas, sehingga bisa digunakan di konsef oop 
const UMUR = 32;
echo UMUR;

echo "<br>";

//contoh:
class Coba
{
    const KELAS = 'IF22A';
}

echo Coba::KELAS;       //cara panggil contans


//megic contans:
// __LINE__	     = akan menampilkan baris const saat kita ngoding
// __FILE__      = akan menampilkan alamat file konstanta
// __DIR__       = untuk mengetahui direktori yang bersangkutan
// __FUNCTION__  = untuk mengetahui lagi di functiion apa
// __CLASS__     = untuk mengetahui lagi di class apa
// __TRAIT__     = 
// __METHOD__    = 
// __NAMESPACE__ = 

//contoh
// function coba()
// {
//     return __LINE__;
// }

// echo coba();
