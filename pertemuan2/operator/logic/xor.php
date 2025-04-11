<?php
$beliLaptop = true;
$beliTablet = true;

if ($beliLaptop xor $beliTablet) {
    echo "Dapat bonus spesial!";
} else {
    echo "Tidak dapat bonus!";
}
?>
