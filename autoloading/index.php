<?php

require_once 'App/init.php';

$produk1 = new Komik("naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("uncharted", "Neil Druckman", "Sony Computer", 25000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();
