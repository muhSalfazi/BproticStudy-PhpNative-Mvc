<?php
class Hewan {
    // visibility
    // public, protected, private
    public $mata;
    protected $telinga;
    private $kaki;


    public function hidup(){
        return "Hewan ini hidup<br>";
    }

    protected function mendengar(){
        return "Hewan ini mendengar<br>";
    }

    private function berjalan(){
        return "Hewan ini berjalan<br>";
    }


}
// buat object
$kelinci = new Hewan();

// public
echo $kelinci->hidup= "hitam";
echo $kelinci->mata ="hitam";        
echo $kelinci->telinga ="panjang";
echo $kelinci->kaki ="4";



