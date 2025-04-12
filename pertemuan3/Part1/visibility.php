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

/*public
echo $kelinci->mata(); // bisa diakses dari luar class  
*/
echo $kelinci->mata ="hitam";  
/*protected
echo $kelinci->telinga(); // tidak bisa diakses dari luar class, hanya bisa diakses dari dalam class atau class turunan*/
echo $kelinci->telinga ="panjang";
// echo $kelinci->kaki ="4"; // error, karena private hanya bisa diakses di dalam class itu sendiri
echo $kelinci->kaki ="4";



