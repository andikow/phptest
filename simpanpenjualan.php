<?php
include "koneksi.php";
$kodepel = $_REQUEST['KdPelanggan'];
$nama = $_REQUEST['Nama'];
$nopol = $_REQUEST['NoPol'];
$mysqli = "INSERT INTO pelanggan (Nama, Alamat, NPWP) VALUES ('$nama', '$alamat', '$npwp')";
$result = mysqli_query($conn, $mysqli);
echo "Input Ok";
mysqli_close($conn);
?>
