<?php 
//     define('NAMA', 'Alan Ari Mahendra');
//     echo NAMA;

//     echo "<br>";

// const UMUR = 12;
// echo UMUR;

    // class Coba {
    //     const NAMA = 'Alan Ari Mahendra';
    // }

    // echo Coba::NAMA;

    echo __LINE__;
    echo "<br>";
    // echo __FILE__;
    echo "<br>";
    // echo __DIR__;
    echo "<br>";
    function coba (){
        return __FUNCTION__;
    }
    echo coba();
    echo "<br>";
    class Anu{
        public $kelas = __CLASS__;
    }
    $obj = new anu;
    echo $obj->kelas;












?>