<?php

use Produk as GlobalProduk;

    class Produk {
        public $judul  ,
               $penulis  ,
               $penerbit  ,
               $harga  ;

               public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penulis", $harga = 0 ){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
               }

               public function getLabel(){
                return "$this->penulis, $this->penerbit";

               }
    }


    class CetakInfoProduk {
        public function cetak ( Produk $produk ){
            $str = "{$produk->judul} | {$produk->getLabel()}  (Rp. {$produk->harga})";
            return $str;

        }
    }


    $produk1 = new Produk("Attact on Titan", "Shounen Jump", "Hajime Isayama", 35000 );
    $produk2 = new Produk("Naruto", "Shounen Jump", "Masashi Kisimoto", 36000);
    


    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Manga : " . $produk2->getLabel(); 
    echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);







?>