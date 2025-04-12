<?php
// Tipe data yang dapat menyimpan banyak nilai sekaligus, seperti array dan object.
$buah = ["Apel", "Jeruk", "Mangga"];

echo "<h3>TIPE DATA COMPOUND - ARRAY</h3>";
echo "Saya suka buah " . $buah[0] . " dan " . $buah[2] . "<br>";


// object
class Siswa {
    public $nama;
    public $umur;
    
    // Constructor untuk menginisialisasi properti
    function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    function perkenalan() {
        return "Halo, saya " . $this->nama . ", umur saya " . $this->umur . " tahun.";
    }
}

$siswa1 = new Siswa("Budi", 17);

echo "<h3>TIPE DATA COMPOUND - OBJECT</h3>";
echo $siswa1->perkenalan() . "<br>";
?>
