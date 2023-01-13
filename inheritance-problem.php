<?php

use Produk as GlobalProduk;

    class Produk {
        public $judul  ,
               $penulis  ,
               $penerbit  ,
               $harga,
               $halaman,
               $waktu,
               $tipe ;

               public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penulis", $harga = 0, $halaman = 0, $waktu = 0, $tipe ){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;
                $this->halaman = $halaman;
                $this->waktu = $waktu;
                $this->tipe = $tipe;
               }

               public function getLabel(){
                return " $this->judul | $this->penulis, $this->penerbit, ($this->harga)";

               }
    



        public function getInfoLengkap(){
            $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
                if ($this->tipe == "Komik") {
                    $str .= " - {$this->halaman} Halaman. ";
                } else if ($this->tipe == "Jam" ) {
                    $str .= " ~ {$this->waktu} Jam. ";
                }
                
                return $str ;
            }
        }     
        class CetakInfoProduk {
            public function cetak ( Produk $produk ){
                $str = "{$produk->judul} | {$produk->getLabel()}  (Rp. {$produk->harga})";
                return $str;
    
            }
        }

    $produk1 = new Produk("Attact on Titan", "Shounen Jump", "Hajime Isayama", 35000, 124, 0, "Komik" );
    $produk2 = new Produk("Naruto", "Shounen Jump", "Masashi Kisimoto", 36000, 0, 50, "Jam");
    

    echo $produk1->getInfoLengkap();
    echo "<br>";
    echo $produk2->getInfoLengkap();







?>