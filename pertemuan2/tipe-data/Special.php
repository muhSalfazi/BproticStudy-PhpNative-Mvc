<?php
// Digunakan untuk hal yang lebih teknis, seperti resource atau NULL.
$alamat = null;
echo "<h3>TIPE DATA SPECIAL - NULL</h3>";
echo "Alamat: " . var_export($alamat, true) . "<br>"; // NULL artinya tidak punya nilai

echo "<h3>TIPE DATA SPECIAL - RESOURCE</h3>";
$file = fopen("contoh.txt", "w"); // membuka file
echo "Tipe variabel file: " . gettype($file) . "<br>";
fclose($file);
?>
