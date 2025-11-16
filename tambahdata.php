<?php
include "koneksi.php";
$Nama_Lengkap = $_POST['Nama_Lengkap'];
$No_Telp = $_POST['No_Telp'];
$Detail_Pesanan = $_POST['Detail_Pesanan'];
$Lokasi_Pengiriman = $_POST['Lokasi_Pengiriman'];
$Preferensi_Pembayaran = $_POST['Preferensi_Pembayaran'];
$Notes = $_POST['Notes'];
mysqli_query($koneksi, "INSERT INTO info (Nama_Lengkap, No_Telp, Detail_Pesanan, Lokasi_Pengiriman, Preferensi_Pembayaran, Notes)
VALUES ('$Nama_Lengkap','$No_Telp','$Detail_Pesanan','$Lokasi_Pengiriman','$Preferensi_Pembayaran','$Notes')");
header("location:data.php");
?>