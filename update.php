<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <br/>
    <br/>
    <h3>Update Data</h3>

    <?php
    include 'koneksi.php';
    $Nama_Lengkap = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from info where Nama_Lengkap = '$Nama_Lengkap'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post"action="ubah.php">
            <table>
                <tr>
                    <td>Nama_Lengkap</td>
                    <td>
                        <input type="text" name="Nama_Lengkap" value="<?php echo $d['Nama_Lengkap']; ?>">
    </td>
                <tr>
                    <td>No_Telp</td>
                    <td>
                        <input type="number" name="No_Telp" value="<?php echo $d['No_Telp']; ?>">
    </td>
    <tr>
        <td>Detail_Pesanan</td>
        <td><input type= "text" name="Detail_Pesanan" value="<?php echo $d['Detail_Pesanan']; ?>"></td>
    </tr>
    <tr>
        <td>Lokasi_Pengiriman</td>
        <td><input type= "text" name="Lokasi_Pengiriman" value="<?php echo $d['Lokasi_Pengiriman']; ?>"></td>
    </tr>
    <tr>
        <td>Preferensi_Pembayaran</td>
        <td><input type= "text" name="Preferensi_Pembayaran" value="<?php echo $d['Preferensi_Pembayaran']; ?>"></td>
    </tr>    
    <tr>
        <td>Notes</td>
        <td><input type= "text" name="Notes" value="<?php echo $d['Notes']; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
    </table>
    </form>
<?php
    }
    ?>
</body>
<footer>
    <div class="copyright">
        © Update Page - Louissa Hartono Wijaya @2025
    </div>
</footer>  
</html>