<?php

class Siswa{

    // properti
    public $nama;
    const Sekolah = 'SDN AMERIKA 1'; // properti konstan


    public function __construct($nama){
        $this->nama = $nama;
    }

    public function TampilkanInfo(){
        echo "Nama Siswa : " . $this->nama . "<br>";
        echo "Sekolah : " . self::Sekolah . "<br>"; // akses properti konstan
    }
}

// buat objek baru dari class Siswa
$siswa = new Siswa('Budi');
$siswa->TampilkanInfo(); 