<?php

class Game extends Produk implements InfoProduk     //implemantasi interface InfoProduk
{

    public $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        return $str;
    }

    public function getInfoProduk()     //ini isi interface yang diatas tadi, di class turunan
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";

        return $str;
    }
}
