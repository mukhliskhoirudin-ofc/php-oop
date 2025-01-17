<?php

class Produk    //class
{
    public $judul = "judul",    //property
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()  //method
    {
        return "$this->penulis, $this->penerbit";
    }
}

//object
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Nail Drucmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 35000;

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();
