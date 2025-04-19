<?php 

class HewanProtected{

    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis){
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    protected function mendengar(): string{
        return "Hewan ini mendengar<br>";
    }
}

class Macan extends HewanProtected{

    public function lihat(){
        return "Nama hewan : $this->nama <br> Jenis hewan : $this->jenis <br>"; 
    }

    public function mendengarHewan(){
        return $this->mendengar(); // memanggil method protected dari parent class
    }
}

// buat objek baru dari class HewanProtected
$Macan = new Macan ('Macan', 'Karnivora');
echo $Macan->lihat(); // panggil method lihat
echo $Macan->mendengarHewan(); // panggil method mendengarHewan