<?php
// array
$buah = array("mangga", "kurma", "apel", "semangka");

// FOREACH
echo "<h3>Foreach</h3>";
foreach($buah as $item){
    echo "Saya suka buah " . $item . "<br>";
}

// FOR
echo "<h3>For</h3>";
for ($i = 0; $i < count($buah); $i++) {
    echo "Saya suka buah " . $buah[$i] . "<br>";
}

// WHILE
echo "<h3>While</h3>";
$i = 0;
while ($i < count($buah)) {
    echo "Saya suka buah " . $buah[$i] . "<br>";
    $i++;
}

// DO WHILE
echo "<h3>Do While</h3>";
$i = 0;
do {
    echo "Saya suka buah " . $buah[$i] . "<br>";
    $i++;
} while ($i < count($buah));
?>
