<?php
class Toko{

    // method biasa
    public function  transaksi($jumlah){
        echo "Jumlah transaksi : $jumlah <br>";
    }

    // method static
    public static function hitungpendapatan($total){
        echo "pendapatan toko : $total <br>";
    }
}
// membuat objek dari class Toko
$toko = new Toko();

$toko->transaksi(1000); // memanggil method biasa
Toko::hitungpendapatan(5000); // memanggil method static