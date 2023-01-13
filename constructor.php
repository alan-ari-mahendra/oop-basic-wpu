<?php 

    class Produk {
        public $judul = "Judul",
               $penulis = "penulis",
               $penerbit = "penerbit",
               $harga = 0;

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

    $produk1 = new Produk("Attact on Titan", "Shounen Jump", "Hajime Isayama", 35000 );
    $produk2 = new Produk("Naruto", "Shounen Jump", "Masashi Kisimoto", 36000);
    $produk3 = new Produk("Demon Slayer", 36000);
    


    echo "Komik : " . $produk1->getLabel();
    echo "<br>";
    echo "Manga : " . $produk2->getLabel(); 
    echo "<br>";
    var_dump($produk3);





?>