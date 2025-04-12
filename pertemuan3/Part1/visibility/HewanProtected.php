<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class HewanProtected {
    // Visibility
    public $mata;      // Bisa diakses dari luar kelas
    protected $telinga; // Hanya bisa diakses dari dalam kelas dan subclass

    // Constructor untuk inisialisasi
    public function __construct($mata, $telinga) {
        $this->mata = $mata;
        $this->telinga = $telinga;
    }

    // Method public
    public function hidup() {
        return "Hewan ini hidup<br>";
    }

    // Method protected
    protected function mendengar() {
        return "Hewan ini mendengar<br>";
    }

    // Method untuk mengakses telinga (protected)
    public function getTelinga() {
        return $this->telinga;
    }

    // Method untuk memanggil method protected mendengar()
    public function callMendengar() {
        return $this->mendengar();
    }
}

// Buat objek dari kelas HewanProtected
$kelinciProtected = new HewanProtected("Hitam", "Panjang");

// Akses properti dan method
echo "Mata kelinci: " . $kelinciProtected->mata . "<br>";
echo "Telinga kelinci: " . $kelinciProtected->getTelinga() . "<br>";
echo $kelinciProtected->hidup(); // Memanggil method hidup()

// Mengakses method protected melalui method public callMendengar()
echo $kelinciProtected->callMendengar();