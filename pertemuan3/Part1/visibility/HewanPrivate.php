<?php

class HewanPrivate {
    // Visibility
    public $mata;      // Bisa diakses dari luar kelas
    private $kaki;      // Hanya bisa diakses dari dalam kelas itu sendiri

    // Constructor untuk inisialisasi
    public function __construct($mata, $kaki) {
        $this->mata = $mata;
        $this->kaki = $kaki;
    }

    // Method public
    public function hidup() {
        return "Hewan ini hidup<br>";
    }

    // Method private
    private function berjalan() {
        return "Hewan ini berjalan<br>";
    }

    // Method untuk mengakses kaki (private)
    public function getKaki() {
        return $this->kaki;
    }

    // Method untuk memanggil method private berjalan()
    public function callBerjalan() {
        return $this->berjalan();
    }
}

// Buat objek dari kelas HewanPrivate
$kelinciPrivate = new HewanPrivate("Coklat", "4");

// Akses properti dan method
echo "Mata kelinci: " . $kelinciPrivate->mata . "<br>";
echo "Jumlah kaki kelinci: " . $kelinciPrivate->getKaki() . "<br>";
echo $kelinciPrivate->hidup(); // Memanggil method hidup()

// Mengakses method private melalui method public callBerjalan()
echo $kelinciPrivate->callBerjalan();
?>
