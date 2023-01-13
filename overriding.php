

<?php 

use Produk as GlobalProduk;

    class Produk {
        public $judul  ,
               $penulis  ,
               $penerbit  ,
               $harga;

               public function __construct( $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
                $this->judul = $judul;
                $this->penulis = $penulis;
                $this->penerbit = $penerbit;
                $this->harga = $harga;;

               }

               public function getLabel(){
                return " $this->judul | $this->penulis, $this->penerbit, ($this->harga)";

               }
    



        public function getInfoProduk(){
            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

            return $str ;
        }
    }     
 
    class Manga extends Produk {
        public $waktu;

        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktu = 0)
        {
            parent::__construct($judul, $penulis, $penerbit , $harga) ;

            $this->$waktu = $waktu;
        }

        public function getInfoProduk()
        {
            $str = "Manga :" . parent::getInfoProduk() . " - {$this->waktu} Jam";      
            return $str ;    
        }

        }


        class Komik extends Produk {
            public $halaman;

            public function __construct( $judul = " Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $halaman = 0)
            {
                parent::__construct ( $judul, $penulis, $penerbit, $harga) ;
                $this->$halaman = $halaman;
            }

            public function getInfoProduk()
            {
                $str = "Komik : " . parent::getInfoProduk() . " - {$this->halaman} Halaman ";      
                return $str ;    
            }

        }


        class CetakInfoProduk {
            public function cetak ( Produk $produk ){
                $str = "{$produk->judul} | {$produk->getLabel()}  (Rp. {$produk->harga})";
                return $str;
    
            }
        }

    $produk1 = new Komik("Attact on Titan", "Shounen Jump", "Hajime Isayama", 35000, 124);
    $produk2 = new Manga("Naruto", "Shounen Jump", "Masashi Kisimoto", 36000, 50);
    

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();







?>

