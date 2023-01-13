<?php 

    class Produk {
        public $judul = "Judul",
               $penulis = "penulis",
               $penerbit = "penerbit",
               $harga = 0;

               public function getLabel(){
                return "$this->penulis, $this->penerbit";
               } 
    }

    $produk1 = new Produk();
    $produk1->judul = "Attack on Titan";
    $produk1->penerbit = "Shounen Jump";
    $produk1->penulis = "Hajime Isayama";
    $produk1->harga = 35000;


    $produk2 = new Produk();
    $produk2->judul = "Naruto";
    $produk2->penerbit = "Shounen Jump";
    $produk2->penulis = "Masashi Kisimoto";
    $produk2->harga = 36000;

    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Manga : " . $produk2->getLabel(); 





?>