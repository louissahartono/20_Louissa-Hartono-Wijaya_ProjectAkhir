<?php
include 'koneksi.php';
$Nama_Lengkap = $_POST['Nama_Lengkap'];
$No_Telp = $_POST['No_Telp'];
$Detail_Pesanan = $_POST['Detail_Pesanan'];
$Lokasi_Pengiriman = $_POST['Lokasi_Pengiriman'];
$Preferensi_Pembayaran = $_POST['Preferensi_Pembayaran'];
$Notes = $_POST['Notes'];
mysqli_query($koneksi, "UPDATE info SET Nama_Lengkap='$Nama_Lengkap', No_Telp='$No_Telp', Detail_Pesanan='$Detail_Pesanan', Lokasi_Pengiriman='$Lokasi_Pengiriman', Preferensi_Pembayaran='$Preferensi_Pembayaran', Notes='$Notes'");
header("location:data.php");
?>