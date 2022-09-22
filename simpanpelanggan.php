<?php
include "koneksi.php";
$nama = $_REQUEST['Nama'];
$alamat = $_REQUEST['Alamat'];
$npwp = $_REQUEST['NPWP'];
$mysqli = "INSERT INTO pelanggan (Nama, Alamat, NPWP) VALUES ('$nama', '$alamat', '$npwp')";
$result = mysqli_query($conn, $mysqli);
echo "Input Ok";
mysqli_close($conn);
?>
