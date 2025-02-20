<?php

class Komik extends Produk implements InfoProduk    //implemantasi interface InfoProduk di class turunan
{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlHalaman);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()     //ini isi interface yang diatas tadi, di class turunan
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        return $str;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}
