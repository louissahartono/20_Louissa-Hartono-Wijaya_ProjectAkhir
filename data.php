<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="data.css">
</head>
<body>
<header>
    <nav>
        <a href="tambah.php">Input Data</a>
        <a href="data.php">Show Data</a>
        <a href="index.php">Log out</a>
    </nav>
</header>
    <table border="1" class="table-tugasakhir">
        <tr>
            <th>Nama Lengkap</th>
            <th>No. Telpon</th>
            <th>Detail Pesanan</th>
            <th>Lokasi Pengiriman</th>
            <th>Preferensi Pembayaran</th>
            <th>Notes</th>
            <th>Update</th>
            <th>Delete</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from info");
while ($d=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $d['Nama_Lengkap']; ?></td>     
        <td><?php echo $d['No_Telp']; ?></td>     
        <td><?php echo $d['Detail_Pesanan']; ?></t>
        <td><?php echo $d['Lokasi_Pengiriman']; ?></td>
        <td><?php echo $d['Preferensi_Pembayaran']; ?></td>
        <td><?php echo $d['Notes']; ?></td>
        <td>  
            <a href="update.php?id=<?php echo $d['Nama_Lengkap']; ?>">UPDATE</a></td>
            <td>
            <a href="delete.php?id=<?php echo $d['Nama_Lengkap']; ?>">DELETE</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
<footer>
    <div class="copyright">
        © Data Page - Louissa Hartono Wijaya @2025
    </div>
</footer>  
</html>