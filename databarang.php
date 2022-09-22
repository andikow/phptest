<?php
include "koneksi.php";
$kode = $_REQUEST['KdBarang'];
$deskripsi = $_REQUEST['Deskripsi'];
$het = $_REQUEST['HET'];
$mysqli = "INSERT INTO barang (KdBarang, Deskripsi, HET) VALUES ('$kode', '$deskripsi', '$het')";
$result = mysqli_query($conn, $mysqli);
echo "Input Ok";
mysqli_close($conn);
?>
