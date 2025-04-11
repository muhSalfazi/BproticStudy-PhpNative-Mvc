<?php 
/*   
    - Digunakan untuk membandingkan satu variabel dengan beberapa nilai yang berbeda.
    - Lebih efisien daripada menggunakan banyak if-else if.
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
