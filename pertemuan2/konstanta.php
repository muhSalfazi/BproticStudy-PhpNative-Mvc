<?php 

// mendefinisikan konstanta
define("Diskon", 0.1);
/*
 0.1 = 10%
 mendefinisikan konstanta dengan nama Diskon
*/

$harga = 500;

$harga_diskon = $harga - ($harga * Diskon) ;

// nampilin harga diskon
echo "harga asli: ".$harga."<br>";
echo "harga setelah diskon: ".$harga_diskon."<br>";




