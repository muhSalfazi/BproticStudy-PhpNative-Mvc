<form method="POST">
    nama : <input type="text" name="nama"><br>
    umur : <input type="text" name="umur"><br>
    <input type="submit" value="kirim">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];

    // validasi:umur adalah angka
    if (!is_numeric($umur)) {
        print("Umur harus angka");
    } else {
        print("Nama: " . $nama . "<br>");
        print("Umur: " . $umur ." thn". "<br>");
    }   
}
