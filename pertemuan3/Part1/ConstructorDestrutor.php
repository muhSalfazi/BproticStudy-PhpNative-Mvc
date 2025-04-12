<?php 

class Mobil {

    // ini contructor
    function __construct(){
        echo "Constructor dipanggil<br>";
    }

    // ini destructor
    function __destruct(){
        echo "Destructor dipanggil<br>";
    }

    function tambah(){
        echo "Tambah<br>";
    }

}

$Honda = new Mobil(); // constructor dipanggil
echo $Honda->tambah(); // tambah dipanggil