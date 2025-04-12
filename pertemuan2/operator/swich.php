<?php 
/*   
    - Digunakan untuk membandingkan satu variabel dengan beberapa nilai yang berbeda.
    - Lebih efisien daripada menggunakan banyak if-else if.
    bisa diartika Pilih sesuai nilai variabel
    - Lebih mudah dibaca dan dipahami.
*/
$hari = "selasa";

switch ($hari) {
    case "Senin":
        echo "Hari masuk sekolah!";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Hari libur!";
        break;
    default:
        echo "Hari biasa";
}
