<?php
include 'koneksi.php';
$Nama_Lengkap = $_GET['id'];
mysqli_query($koneksi, "DELETE from info WHERE Nama_Lengkap='$Nama_Lengkap'");
header("location:data.php");
?>