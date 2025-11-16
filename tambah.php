<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
<header>
    <nav>
        <a href="tambah.php">Input Data</a>
        <a href="data.php">Show Data</a>
        <a href="index.php">Log out</a>
    </nav>
</header>
    <h3>Data Website</h3>
    <form method="post" action="tambahdata.php">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="Nama_Lengkap"></td>
</tr>
<tr>
    <td>No. Telp</td>
    <td><input type="number" name="No_Telp"></td>
</tr>
<tr>
    <td>Detail Pesanan</td>
    <td><input type="text" name="Detail_Pesanan"></td>
</tr>
<tr>
    <td>Lokasi Pengiriman</td>
    <td><input type="text" name="Lokasi_Pengiriman"></td>
</tr>
<tr>
    <td>Preferensi Pembayaran</td>
    <td><input type="text" name="Preferensi_Pembayaran"></td>
</tr>
<tr>
    <td>Notes</td>
    <td><input type="text" name="Notes"></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
</body>
<footer>
    <div class="copyright">
        © Input Page - Louissa Hartono Wijaya @2025
    </div>
</footer>    
</html>