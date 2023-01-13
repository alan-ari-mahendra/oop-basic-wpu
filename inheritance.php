<?php

use Produk as GlobalProduk;

    class Produk {
        public $judul  ,
               $penulis  ,
               $penerbit  ,
               $harga,
               $halaman,
               $waktu;

               public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penulis", $harga = 0, $halaman = 0, $waktu = 0){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
                $this->halaman = $halaman;
                $this->waktu = $waktu;

               }

               public function getLabel(){
                return " $this->judul | $this->penulis, $this->penerbit, ($this->harga)";

               }
    



        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str ;
        }
    }     
 
    class Game extends Produk {
        public function getInfoProduk()
        {
            $str = "Manga : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktu} Jam";      
            return $str ;    
        }

        }


    class Komik extends Produk {
        public function getInfoProduk()
        {
            $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->halaman} Halaman";      
            return $str ;    
        }

        }


        class CetakInfoProduk {
            public function cetak ( Produk $produk ){
                $str = "{$produk->judul} | {$produk->getLabel()}  (Rp. {$produk->harga})";
                return $str;
    
            }
        }

    $produk1 = new Komik("Attact on Titan", "Shounen Jump", "Hajime Isayama", 35000, 124, 0);
    $produk2 = new Game("Naruto", "Shounen Jump", "Masashi Kisimoto", 36000, 0, 50);
    

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();







?>