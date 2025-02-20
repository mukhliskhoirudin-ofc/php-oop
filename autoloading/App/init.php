<?php

//contoh versi manual tidak menggunakan autoloading
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

//contoh versi menggunakan autoloading
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/Produk/' . $class . '.php';
});
