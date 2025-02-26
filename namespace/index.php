<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
// $produk2 = new Game("Uncharted", "Nail Drucmann", "Sony Computer", 350000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

use App\Service\User as ServiceUser;        //gunakan as
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
