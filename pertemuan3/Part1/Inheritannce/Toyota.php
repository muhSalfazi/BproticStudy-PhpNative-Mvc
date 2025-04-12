<?php
require_once 'Mobil.php';
use Mobil as Kendaraan;


// pakai extends untuk inheritance
class  Toyota extends Kendaraan {


}

// new object
$Toyota = new Toyota();
$Toyota->getwarna("merah");
$Toyota->getmerk("Toyota");

// 
var_dump( "Warna : ".$Toyota->warna."<br>");
echo "Merk : ".$Toyota->merk."<br>";
