<?php

class produk{
    public  $judul = "judul", 
            $penulis = "penulis", 
            $penerbit = "penerbit", 
            $harga = 0;

    // public function sayHello(){
    //     return "Hello word";
    public function getLabel (){
        return "$this->penulis, $this->penerbit";
    }
    }



// $produk1 = new produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahproperty= "hahaha";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000 ;
// var_dump($produk3);
// echo "komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->getLabel();

// echo "<hr>";

$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 25000 ;

echo "komik : " . $produk3->getLabel();
echo "<br>";

echo "Game : " . $produk4->getLabel();

?>