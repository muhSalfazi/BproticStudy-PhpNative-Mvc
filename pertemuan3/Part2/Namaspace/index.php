<?php

require_once 'A/Mobil.php';
require_once 'B/MobilB.php';

use A\Mobil as MobilA;
use B\MobilB as MobilB;   

// Menggunakan alias untuk menghindari bentrok nama kelas
$mobilA = new MobilA();
$mobilA->info();


$mobilB = new MobilB();
$mobilB->info();