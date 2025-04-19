<?php
class HewanPrivate{
    // visibility 
    private $nama;
    private $kaki;
    
    // constructor
    public function __construct($nama, $kaki){
        $this->nama = $nama;
        $this->kaki = $kaki;

        // menampilkan properti nama dan kaki
        echo "Nama Hewan : " . $this->getNama() . "<br>";
        echo "Jumlah Kaki : " . $this->getKaki() . "<br>";

        // memanggil method hidup
        $this->hidup(); // panggil method hidup

    }
    private function getNama(){
        return $this->nama;
    }
    private function getKaki(){
        return $this->kaki;
    }

    private function hidup(){
        echo "Hewan ini hidup<br>";
    }
}

// buat objek baru dari class HewanPrivate
$kucing = new HewanPrivate ('Kucing', 4);

