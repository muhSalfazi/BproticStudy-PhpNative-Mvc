<?php

class Brankas{
    // properti buat menyimpan data barang
    private $barang ;

    public function setBarang($barang){
        // method untuk mengisi properti barang
        $this->barang = $barang;
    }

    public function getBarang(){
        // method untuk mengambil data barang
        return $this->barang;
    }
}

// membuat objek dari class Brankas
$brankas = new Brankas();
// mengisi properti barang dengan method setBarang
$brankas->setBarang('Emas');
// mengambil data barang dengan method getBarang
echo $brankas->getBarang(); // output: Emas