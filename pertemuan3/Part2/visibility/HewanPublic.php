<?php

class HewanPublic{

    // visibility
    public $mata;
    public  $telinga;


    public function __construct($mata,$telinga){
        $this->mata = $mata ;
        $this->telinga = $telinga ;
    }

    public function hidup(){
        echo "Hewan ini hidup<br>";
    }

}

// buat objek baru dari class HewanPublic
$kelinci = new HewanPublic ('hitam','panjang');
echo"hewan bermata :".$kelinci->mata."<br>";
echo"hewan bertelinga :".$kelinci->telinga."<br>";
echo$kelinci->hidup(); // panggil method hidup