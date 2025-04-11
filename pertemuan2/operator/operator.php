<?php
$x = 10;
$y = 20;

// ========================
// Operator Aritmatika
// ========================
echo "<h3>Operator Aritmatika</h3>";
echo "Penjumlahan: " . ($x + $y) . "<br>";    
echo "Pengurangan: " . ($x - $y) . "<br>";     
echo "Perkalian: " . ($x * $y) . "<br>";       
echo "Pembagian: " . ($y / $x) . "<br>";       
echo "Modulus: " . ($y % $x) . "<br>";         

echo "<h4>Case Aritmatika</h4>";
$hargaBarang = 50000;
$jumlahBarang = 3;
$totalBelanja = $hargaBarang * $jumlahBarang;
echo "Total belanja: Rp " . $totalBelanja . "<br>";

// ========================
// Operator Perbandingan
// ========================
echo "<h3>Operator Perbandingan</h3>";
echo "\$x == \$y : " . var_export($x == $y, true) . "<br>";   // false
echo "\$x === \$y : " . var_export($x === $y, true) . "<br>"; // false
echo "\$x != \$y : " . var_export($x != $y, true) . "<br>";   // true
echo "\$x < \$y : " . var_export($x < $y, true) . "<br>";     // true
echo "\$x > \$y : " . var_export($x > $y, true) . "<br>";     // false
echo "\$x <= \$y : " . var_export($x <= $y, true) . "<br>";   // true
echo "\$x >= \$y : " . var_export($x >= $y, true) . "<br>";   // false
// ========================
// Operator Penggabungan String
// ========================
echo "<h3>Operator Penggabungan String</h3>";
$namaDepan = "Salman";
$namaBelakang = "Fauzi";
$namaLengkap = $namaDepan . " " . $namaBelakang;
echo "Nama Lengkap: " . $namaLengkap . "<br>";
?>
