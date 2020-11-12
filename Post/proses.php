<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    echo "Nama : " .$nama;
    echo "<br>";
    echo "Alamat : " .$alamat;
}
?>